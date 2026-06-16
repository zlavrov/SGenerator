<?php

declare(strict_types=1);

namespace App\Manager;

use App\Model\QueryStringModel;
use function Zenstruck\Foundry\faker;
use Generator;
use LogicException;
use Symfony\Component\HttpFoundation\Request;
use Zenstruck\Foundry\Factory;

class InternetManager {

    public function email(Request $request): Generator
    {
        $count = $request->get('count', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->email();}
    }

    public function domain(Request $request): Generator
    {
        $count = $request->get('count', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->domainName();}
    }

    public function password(Request $request): Generator
    {
        $count = $request->get('count', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->password(6, 20);}
    }

    public function userName(Request $request): Generator
    {
        $count = $request->get('count', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->userName();}
    }

    public function url(Request $request): Generator
    {
        $count = $request->get('count', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->url();}
    }

    public function slug(Request $request): Generator
    {
        $count = $request->get('count', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->slug();}
    }

    public function ip(Request $request): Generator
    {
        $count = $request->get('count', 1);
        $format = $request->get('format', 'ipv4');

        for ($i = 0; $i < $count; $i++) {
            if ($format === 'ipv4') {yield faker()->ipv4();}
            if ($format === 'localipv4') {yield faker()->localIpv4();}
            if ($format === 'ipv6') {yield faker()->ipv6();}
        }
    }

    public function macAddress(Request $request): Generator
    {
        $count = $request->get('count', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->macAddress();}
    }
}
