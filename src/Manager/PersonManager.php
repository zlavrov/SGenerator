<?php

declare(strict_types=1);

namespace App\Manager;

use App\Model\QueryStringModel;
use function Zenstruck\Foundry\faker;
use Generator;
use LogicException;
use Symfony\Component\HttpFoundation\Request;
use Zenstruck\Foundry\Factory;

class PersonManager {

    public function name(Request $request): Generator
    {
        $count = $request->get('count', 1);

        for ($i = 0; $i < $count; $i++) {yield \sprintf('%s %s', faker()->firstName(), faker()->lastName());}
    }
}

// title($gender = null|'male'|'female')     // 'Ms.'
// titleMale                                 // 'Mr.'
// titleFemale                               // 'Ms.'
// suffix                                    // 'Jr.'
// name($gender = null|'male'|'female')      // 'Dr. Zane Stroman'
// firstName($gender = null|'male'|'female') // 'Maynard'
// firstNameMale                             // 'Maynard'
// firstNameFemale                           // 'Rachel'
// lastName                                  // 'Zulauf'
