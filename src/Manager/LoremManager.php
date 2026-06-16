<?php

declare(strict_types=1);

namespace App\Manager;

use App\Model\QueryStringModel;
use function Zenstruck\Foundry\faker;
use Generator;
use LogicException;
use Symfony\Component\HttpFoundation\Request;

class LoremManager {

    public function words(Request $request): Generator
    {
        $count = $request->get('count', 1);
        $nb = $request->get('nb', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->words($nb, true);}
    }

    public function sentences(Request $request): Generator
    {
        $count = $request->get('count', 1);
        $nb = $request->get('nb', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->sentences($nb, true);}
    }

    public function paragraphs(Request $request): Generator
    {
        $count = $request->get('count', 1);
        $nb = $request->get('nb', 1);
        for ($i = 0; $i < $count; $i++) {yield faker()->paragraphs($nb, true);}
    }

    public function text(Request $request): Generator
    {
        $count = $request->get('count', 1);
        $maxNbChars = $request->get('maxNbChars', 1);
        $format = $request->get('format', 'lorem');
        for ($i = 0; $i < $count; $i++) {
            if ($format === 'lorem') {yield faker()->text($maxNbChars);}
            if ($format === 'real') {yield faker()->realText($maxNbChars, 2);}
        }
    }
}
