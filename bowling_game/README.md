# Bowling Game score calculator

This program calculates the score of the bowling game

## Specification

* 10 frames
* each frame has 10 pins
* 1 pin 1 point
* spare will add the score of the next frame
    - 5
    - 5 //spare
    - 7 // 24 points total
* strike will add the score of the next 2 frames
    - 10 // strike
    - 2 
    - 4 // 22 points total

## Test
```
composer test
npm run dev
```

## Installation
```
composer install && npm install
```