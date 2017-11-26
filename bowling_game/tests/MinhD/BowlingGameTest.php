<?php

namespace MinhD;

use InvalidArgumentException;

class BowlingGameTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_scores_a_gutter_game_as_zero()
    {
        $game = new BowlingGame();
        $game->rollTimes(20, 0);
        $this->assertEquals($game->score(), 0);
    }

    /** @test */
    public function it_scores_the_sum_of_all_knocked_down_pints_for_a_game()
    {
        $game = new BowlingGame();
        $game->rollTimes(20, 1);
        $this->assertEquals($game->score(), 20);
    }

    /** @test */
    public function it_awards_1_roll_bonus_for_every_spare()
    {
        $game = new BowlingGame();
        $game->roll(2);
        $game->roll(8); // spare
        $game->roll(5);
        $game->rollTimes(17, 0); // finish the game
        $this->assertEquals($game->score(), 20);
    }

    /** @test */
    public function it_awards_2_roll_bonus_for_every_strike()
    {
        $game = new BowlingGame();
        $game->roll(10); // strike
        $game->roll(7);
        $game->roll(2);
        $game->rollTimes(17, 0); // finish the game
        $this->assertEquals($game->score(), 28);
    }

    /** @test */
    public function it_test_perfect_game()
    {
        $game = new BowlingGame();
        $game->rollTimes(20, 10); // finish the game
        $this->assertEquals($game->score(), 300);
    }

    /** @test */
    public function it_checks_exception()
    {
        $this->expectException(InvalidArgumentException::class);
        $game = new BowlingGame();
        $game->roll(-5);
    }
}
