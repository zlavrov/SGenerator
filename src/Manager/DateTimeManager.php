<?php

declare(strict_types=1);

namespace App\Manager;

use App\Model\QueryStringModel;
use DateTimeImmutable;

use function Zenstruck\Foundry\faker;
use Generator;
use LogicException;
use Symfony\Component\HttpFoundation\Request;
use Zenstruck\Foundry\Factory;

class DateTimeManager {

    public function dateTime(Request $request): Generator
    {
        $count = $request->get('count', 1);

        $dateTimeFrom = $request->get('dateTimeFrom', new DateTimeImmutable());
        $dateTimeTo = $request->get('dateTimeTo', new DateTimeImmutable());

        if (!($dateTimeFrom instanceof DateTimeImmutable)) {

            $dateTimeFrom = new DateTimeImmutable($dateTimeFrom);
        }

        if (!($dateTimeTo instanceof DateTimeImmutable)) {

            $dateTimeTo = new DateTimeImmutable($dateTimeTo);
        }

        for ($i = 0; $i < $count; $i++) {

            yield (new DateTimeImmutable())->setTimestamp(random_int($dateTimeFrom->getTimestamp(), $dateTimeTo->getTimestamp()))->format('Y-m-d H:i:s');
        }
    }
}
