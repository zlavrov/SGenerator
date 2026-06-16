<?php

declare(strict_types=1);

namespace App\Validator\Constraints;

use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\Validator\Constraints\Composite;
use Symfony\Component\Validator\Exception\LogicException;

#[\Attribute(
    \Attribute::TARGET_CLASS | \Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE
)]
class When extends Composite
{
    public function __construct(
        public string|Expression|array $expression,
        public ?array $constraints = null,
        public ?array $values = null,
        array $groups = null,
        $payload = null,
        array $options = []
    ) {
        if (!class_exists(ExpressionLanguage::class)) {
            throw new LogicException(
                sprintf('The "symfony/expression-language" component is required to use 
                the "%s" constraint. Try running "composer require symfony/expression-language".', __CLASS__)
            );
        }

        if (\is_array($expression)) {
            $options = array_merge($expression, $options);
        } else {
            $options['expression'] = $expression;
            $options['constraints'] = $constraints;
        }

        if (null !== $groups) {
            $options['groups'] = $groups;
        }

        if (null !== $payload) {
            $options['payload'] = $payload;
        }

        parent::__construct($options);

        $this->values = $values ?? $this->values;
    }

    public function getRequiredOptions(): array
    {
        return ['expression', 'constraints'];
    }

    public function getTargets(): string|array
    {
        return [self::CLASS_CONSTRAINT, self::PROPERTY_CONSTRAINT];
    }

    protected function getCompositeOption(): string
    {
        return 'constraints';
    }
}
