<?php

declare(strict_types=1);

namespace App\Manager;

use App\Model\QueryStringModel;
use function Zenstruck\Foundry\faker;
use Generator;
use LogicException;
use Symfony\Component\HttpFoundation\Request;
use Zenstruck\Foundry\Factory;

class BaseManager {

    public function randomDigit(Request $request): Generator
    {
        $count = $request->get('count', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->randomDigit();}
    }

    public function numberBetween(Request $request): Generator
    {
        $count = $request->get('count', 1);
        $min = $request->get('min', 1);
        $max = $request->get('max', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->numberBetween($min, $max);}
    }

    public function randomNumber(Request $request): Generator
    {
        $count = $request->get('count', 1);
        $nbDigits = $request->get('nbDigits', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->randomNumber($nbDigits, true);}
    }

    public function randomFloat(Request $request): Generator
    {
        $count = $request->get('count', 1);
        $min = $request->get('min', 1);
        $max = $request->get('max', 1);
        $nbMaxDecimals = $request->get('nbMaxDecimals', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->randomFloat($nbMaxDecimals, $min, $max);}
    }
}

// randomElements($array = array ('a','b','c'), $count = 1) // array('c')
// randomElement($array = array ('a','b','c')) // 'b'
// shuffle(array(1, 2, 3)) // array(2, 1, 3)
