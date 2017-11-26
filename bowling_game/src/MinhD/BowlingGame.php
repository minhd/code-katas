<?php

namespace MinhD;

use InvalidArgumentException;

class BowlingGame
{
    protected $rolls = [];

    public function roll($pins)
    {
        if ($pins < 0) {
            throw new InvalidArgumentException();
        }
        $this->rolls[] = $pins;
    }

    public function rollTimes($times, $pins)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->roll($pins);
        }
    }

    /**
     * @return int
     */
    public function score()
    {
        $score = 0;
        $roll = 0;

        for ($frame = 1; $frame <= 10; $frame++) {
            $bonus = $this->getDefaultFrameScore($roll);
            $rollover = 2;

            if ($this->isStrike($roll)) {
                $bonus = 10 + $this->rolls[$roll+1] + $this->rolls[$roll+2];
                $rollover = 1;
            }

            if ($this->isSpare($roll)) {
                $bonus = 10 + $this->rolls[$roll+2];
            }

            $score += $bonus;
            $roll += $rollover;
        }
        return $score;
    }

    private function isStrike($roll)
    {
        return $this->rolls[$roll] == 10;
    }

    private function isSpare($roll)
    {
        return $this->getDefaultFrameScore($roll) == 10;
    }

    private function getDefaultFrameScore($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll+1];
    }
}
