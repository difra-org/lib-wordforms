<?php

declare(strict_types=1);

namespace Difra\Locales;

use Difra\Wordforms\Common;

class Wordforms
{
    /** Bits for gender */
    const BITS_GENDER = 2;
    /** Bit shift for gender */
    const SHL_GENDER = 0;
    /** Bit mask for gender */
    const MASK_GENDER = 0b11 << self::SHL_GENDER;

    /** Bits for case */
    const BITS_CASE = 4;
    /** Bit shift for case */
    const SHL_CASE = self::SHL_GENDER + self::BITS_GENDER;
    /** Bit mask for case */
    const MASK_CASE = 0b1111 << self::SHL_CASE;

    /** Bits for number */
    const BITS_NUMBER = 3;
    /** Bit shift for number */
    const SHL_NUMBER = self::SHL_CASE + self::BITS_CASE;
    /** Bit mask for number */
    const MASK_NUMBER = 0b111 << self::SHL_NUMBER;

    /** Neuter gender */
    const GENDER_NEUTER = 1 << self::SHL_GENDER;
    /** Male gender */
    const GENDER_MALE = 2 << self::SHL_GENDER;
    /** Female gender */
    const GENDER_FEMALE = 3 << self::SHL_GENDER;

    /** accusative */
    const CASE_ACCUSATIVE = 1 << self::SHL_CASE;
    /** dative */
    const CASE_DATIVE = 2 << self::SHL_CASE;
    /** nominative of address, vocative */
    const CASE_VOCATIVE = 3 << self::SHL_CASE;
    /** essive */
    const CASE_ESSIVE = 4 << self::SHL_CASE;
    /** nominative, subjective */
    const CASE_NOMINATIVE = 5 << self::SHL_CASE;
    /** instrumental, ablative */
    const CASE_ABLATIVE = 6 << self::SHL_CASE;
    /** objective, oblique */
    const CASE_OBJECTIVE = 7 << self::SHL_CASE;
    /** locative, local */
    const CASE_LOCATIVE = 8 << self::SHL_CASE;
    /** common */
    const CASE_COMMON = 9 << self::SHL_CASE;
    /** allative */
    const CASE_ALLATIVE = 10 << self::SHL_CASE;
    /** possessive */
    const CASE_POSSESSIVE = 11 << self::SHL_CASE;
    /** genitive */
    const CASE_GENITIVE = 12 << self::SHL_CASE;
    /** partitive genitive */
    const CASE_PARITITIVE_GENITIVE = 13 << self::SHL_CASE;
    /** equative */
    const CASE_EQUATIVE = 14 << self::SHL_CASE;

    /** Single number */
    const NUMBER_SINGLE = 1 << self::SHL_NUMBER;
    /** Dual number */
    const NUMBER_DUAL = 2 << self::SHL_NUMBER;
    /** Triple number */
    const NUMBER_TRIPLE = 3 << self::SHL_NUMBER;
    /** Multiple number */
    const NUMBER_MULTIPLE = 4 << self::SHL_NUMBER;

    private static $objects = [];

    /**
     * Private constructor
     */
    private function __construct()
    {
    }

    /**
     * Forbid clone
     */
    private function __clone()
    {
    }

    /**
     * Factory
     * @param string $locale
     * @return Wordforms\Common
     */
    public static function getInstance(string $locale): Common
    {
        if (isset(self::$objects[$locale])) {
            return self::$objects[$locale];
        }
        if (class_exists(__NAMESPACE__ . '\\Wordforms\\' . $locale)) {
            return self::$objects[$locale] = call_user_func([__NAMESPACE__ . '\\Wordforms\\' . $locale, 'getInstance']);
        } else {
            return self::$objects[$locale] = call_user_func([__NAMESPACE__ . '\\Wordforms\\Common', 'getInstance']);
        }
    }
}
