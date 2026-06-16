<?php

declare(strict_types=1);

namespace App\Model;

use App\Security\AccessGroup;
use App\Validator\Constraints\When;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\IsFalse;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Range;

class QueryStringModel {

    #[Groups(groups: [
        AccessGroup::NUMBER_BETWEEN_READ,
        AccessGroup::RANDOM_FLOAT_READ
    ])]
    public int $min;

    #[Groups(groups: [
        AccessGroup::NUMBER_BETWEEN_READ,
        AccessGroup::RANDOM_FLOAT_READ
    ])]
    #[Range(min: 1, max: 2100000000, groups: [
        AccessGroup::NUMBER_BETWEEN_READ,
        AccessGroup::RANDOM_FLOAT_READ
    ])]
    public int $max;

    #[Groups(groups: [
        AccessGroup::RANDOM_DIGIT_READ,
        AccessGroup::NUMBER_BETWEEN_READ,
        AccessGroup::RANDOM_NUMBER_READ,
        AccessGroup::RANDOM_FLOAT_READ,
        AccessGroup::WORDS_READ,
        AccessGroup::SENTENCES_READ,
        AccessGroup::PARAGRAPHS_READ,
        AccessGroup::TEXT_READ
    ])]
    #[Range(min: 1, max: 1000, groups: [
        AccessGroup::RANDOM_DIGIT_READ,
        AccessGroup::NUMBER_BETWEEN_READ,
        AccessGroup::RANDOM_NUMBER_READ,
        AccessGroup::RANDOM_FLOAT_READ,
        AccessGroup::WORDS_READ,
        AccessGroup::SENTENCES_READ,
        AccessGroup::PARAGRAPHS_READ,
        AccessGroup::TEXT_READ
    ])]
    public int $count;

    #[Groups(groups: [
        AccessGroup::RANDOM_NUMBER_READ
    ])]
    #[Range(min: 1, max: 9, groups: [
        AccessGroup::RANDOM_NUMBER_READ
    ])]
    public int $nbDigits;

    #[Groups(groups: [
        AccessGroup::RANDOM_FLOAT_READ
    ])]
    public int $nbMaxDecimals;

    public array $elements;

    #[Groups(groups: [
        AccessGroup::SENTENCES_READ,
        AccessGroup::PARAGRAPHS_READ,
        AccessGroup::WORDS_READ,
    ])]
    public int $nb;

    #[Groups(groups: [
        AccessGroup::TEXT_READ
    ])]
    #[Range(min: 5, max: 10000, groups: [
        AccessGroup::TEXT_READ
    ])]
    public int $maxNbChars;
}
