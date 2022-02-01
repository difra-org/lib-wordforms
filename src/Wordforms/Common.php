<?php

declare(strict_types=1);

namespace Difra\Wordforms;

use Difra\Wordforms;

/**
 * Class Common
 * @package Difra\Locales\Wordforms
 */
class Common
{
    /** @var array Languages list for language */
    private static $genders = [
        Wordforms::GENDER_NEUTER
    ];

    /** @var array Cases list for language */
    private static $cases = [
        Wordforms::CASE_NOMINATIVE
    ];

    /** @var array Numbers list for language */
    private static $numbers = [
        Wordforms::NUMBER_SINGLE,
        Wordforms::NUMBER_MULTIPLE
    ];

    /**
     * Forbid direct object creation
     */
    private function __construct()
    {
    }

    /**
     * Forbid cloning
     */
    private function __clone()
    {
    }

    /**
     * Singleton
     * @return static
     */
    public static function getInstance(): static
    {
        static $instance = null;
        return $instance ?: $instance = new static();
    }

    /**
     * Get word form
     * @param string $word
     * @param int $form
     * @return string
     */
    public function getForm(string $word, int $form = 0): string {
        return $word;
    }

    /**
     * Get word form for certain quantity
     * @param string $word
     * @param int $form
     * @param int $quantity
     * @return string
     */
    public function getQuantityForm(string $word, int $form, int $quantity): string
    {
        return $word;
    }
}
