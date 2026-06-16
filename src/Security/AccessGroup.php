<?php

declare(strict_types=1);

namespace App\Security;

class AccessGroup {

    public const NUMBER_BETWEEN_READ = 'nubber:between:read';
    public const RANDOM_DIGIT_READ = 'random:digit:read';
    public const RANDOM_ELEMENTS_READ = 'random:elements:read';
    public const RANDOM_FLOAT_READ = 'random:float:read';
    public const RANDOM_NUMBER_READ = 'random:number:read';


    public const WORDS_READ = 'words:read';
    public const SENTENCES_READ = 'sentences:read';
    public const PARAGRAPHS_READ = 'paragraphs:read';
    public const TEXT_READ = 'text:read';
}
