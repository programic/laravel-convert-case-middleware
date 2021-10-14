<?php

namespace Programic\LaravelConvertCaseMiddleware;

use Illuminate\Support\Str;
use InvalidArgumentException;

class CaseConverter
{
    public const CASE_SNAKE = 'snake';
    public const CASE_CAMEL = 'camel';
    public const CASE_KEBAB = 'kebab';
    public const CASE_STUDLY = 'studly';

    private $arguments = [
        self::CASE_SNAKE,
        self::CASE_CAMEL,
        self::CASE_KEBAB,
        self::CASE_STUDLY,
    ];

    /**
     * Convert an array to a given case.
     *
     * @param string $case
     * @param array $data
     * @return array
     */
    public function convert(string $case, array $data): array
    {
        if (!in_array($case, $this->arguments)) {
            throw new InvalidArgumentException(
                'Case unknown, possible casing: ' . implode(',', $this->arguments)
            );
        }

        $array = [];

        foreach ($data as $key => $value) {
            $array[Str::{$case}($key)] = is_array($value)
                ? $this->convert($case, $value)
                : $value;
        }

        return $array;
    }
}
