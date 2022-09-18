<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static car()
 * @method static static bike()
 * @method static static airPlane()
 */
final class Vehicle extends Enum
{
    const CAR = 0;
    const BIKE = 1;
    const AIRPLANE = 2;
}
