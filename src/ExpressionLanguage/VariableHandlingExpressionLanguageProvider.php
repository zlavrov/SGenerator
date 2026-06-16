<?php

declare(strict_types=1);

namespace App\ExpressionLanguage;

use Symfony\Component\ExpressionLanguage\ExpressionFunction;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;

class VariableHandlingExpressionLanguageProvider implements ExpressionFunctionProviderInterface
{
    public function getFunctions(): array
    {
        return [
            new ExpressionFunction('isset', function ($value): string {
                return sprintf('(isset(%1$s))', $value);
            }, function ($arguments, $value): bool {
                if (isset($arguments['this']->{$value})) {
                    return true;
                }

                return false;
            }),
        ];
    }
}
