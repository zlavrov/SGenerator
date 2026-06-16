<?php

declare(strict_types=1);

namespace App\Manager;

use App\Model\QueryStringModel;
use function Zenstruck\Foundry\faker;
use Generator;
use LogicException;
use Symfony\Component\HttpFoundation\Request;
use Zenstruck\Foundry\Factory;

class PhoneNumberManager {

    public function phoneNumber(Request $request): Generator
    {
        $count = $request->get('count', 1);

        $format = $request->get('format', 'e164');

        for ($i = 0; $i < $count; $i++) {

            if ($format === 'e164') {

                yield faker()->e164PhoneNumber();
            }

            if ($format === 'local') {

                $value = faker()->phoneNumber();

                if (str_starts_with($value, "(")) {
    
                    yield $value;
                } else {
    
                    $count+=1;
                }
            }
        }
    }
}
