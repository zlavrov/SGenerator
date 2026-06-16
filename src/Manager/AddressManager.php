<?php

declare(strict_types=1);

namespace App\Manager;

use App\Model\QueryStringModel;
use function Zenstruck\Foundry\faker;
use Generator;
use LogicException;
use Symfony\Component\HttpFoundation\Request;
use Zenstruck\Foundry\Factory;

class AddressManager {

    public function coordinates(Request $request): Generator
    {
        $count = $request->get('count', 1);
        for ($i = 0; $i < $count; $i++) {yield \sprintf('%s, %s', faker()->latitude(), faker()->longitude());}
    }

    public function adderss(Request $request): Generator
    {
        $count = $request->get('count', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->address();}
    }
}
