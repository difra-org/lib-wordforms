<?php

declare(strict_types=1);

namespace Difra\Wordforms;

use Difra\Wordforms;

/**
 * Class ru_RU
 * Russian language word forms implementation.
 * WARNING: IT'S DRAFT!
 * @package Difra\Locales\Wordforms
 */
class ru_RU extends Common
{
    /** первое склонение */
    const DECLINE_1 = 'decline 1';
    /** второе склонение */
    const DECLINE_2 = 'decline 2';
    /** третье склонение */
    const DECLINE_3 = 'decline 3';
    /** не известное склонение */
    const DECLINE_UNKNOWN = 'decline unknown';

    private static $genders = [
        Wordforms::GENDER_MALE,     // мужской род
        Wordforms::GENDER_FEMALE,   // женский род
        Wordforms::GENDER_NEUTER    // средний род
    ];

    private static $cases = [
        Wordforms::CASE_NOMINATIVE, // именительный падеж
        Wordforms::CASE_GENITIVE,   // родительный падеж
        Wordforms::CASE_DATIVE,     // дательный падеж
        Wordforms::CASE_ACCUSATIVE, // винительный падеж
        Wordforms::CASE_ABLATIVE,   // творительный падеж
        Wordforms::CASE_LOCATIVE    // предложный падеж
    ];

    private static $numbers = [
        Wordforms::NUMBER_SINGLE,   // единственное число
        Wordforms::NUMBER_MULTIPLE  // множественное число
    ];

    private static $declineEndings = [
        Wordforms::GENDER_MALE => [
            self::DECLINE_1 => [
                'а' => [ // папа
                    Wordforms::CASE_NOMINATIVE => [
                        Wordforms::NUMBER_SINGLE => 'а',
                        Wordforms::NUMBER_MULTIPLE => 'ы'
                    ],
                    Wordforms::CASE_GENITIVE => [
                        Wordforms::NUMBER_SINGLE => 'ы',
                        Wordforms::NUMBER_MULTIPLE => ''
                    ],
                    Wordforms::CASE_DATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'ам'
                    ],
                    Wordforms::CASE_ACCUSATIVE => [
                        Wordforms::NUMBER_SINGLE => 'у',
                        Wordforms::NUMBER_MULTIPLE => ''
                    ],
                    Wordforms::CASE_ABLATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ой',
                        Wordforms::NUMBER_MULTIPLE => 'ами'
                    ],
                    Wordforms::CASE_LOCATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'ах'
                    ]
                ],
                'я' => [ // Коля
                    Wordforms::CASE_NOMINATIVE => [
                        Wordforms::NUMBER_SINGLE => 'я',
                        Wordforms::NUMBER_MULTIPLE => 'и'
                    ],
                    Wordforms::CASE_GENITIVE => [
                        Wordforms::NUMBER_SINGLE => 'и',
                        Wordforms::NUMBER_MULTIPLE => 'ей'
                    ],
                    Wordforms::CASE_DATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'ям'
                    ],
                    Wordforms::CASE_ACCUSATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ю',
                        Wordforms::NUMBER_MULTIPLE => 'ь'
                    ],
                    Wordforms::CASE_ABLATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ей',
                        Wordforms::NUMBER_MULTIPLE => 'ями'
                    ],
                    Wordforms::CASE_LOCATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'ях'
                    ]
                ]
            ],
            self::DECLINE_2 => [
                '' => [ // дом
                    Wordforms::CASE_NOMINATIVE => [
                        Wordforms::NUMBER_SINGLE => '',
                        Wordforms::NUMBER_MULTIPLE => 'а'
                    ],
                    Wordforms::CASE_GENITIVE => [
                        Wordforms::NUMBER_SINGLE => 'а',
                        Wordforms::NUMBER_MULTIPLE => 'ов'
                    ],
                    Wordforms::CASE_DATIVE => [
                        Wordforms::NUMBER_SINGLE => 'у',
                        Wordforms::NUMBER_MULTIPLE => 'ам'
                    ],
                    Wordforms::CASE_ACCUSATIVE => [
                        Wordforms::NUMBER_SINGLE => '',
                        Wordforms::NUMBER_MULTIPLE => 'а'
                    ],
                    Wordforms::CASE_ABLATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ом',
                        Wordforms::NUMBER_MULTIPLE => 'ами'
                    ],
                    Wordforms::CASE_LOCATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'ах'
                    ]
                ],
                'ь' => [ // конь
                    Wordforms::CASE_NOMINATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ь',
                        Wordforms::NUMBER_MULTIPLE => 'и'
                    ],
                    Wordforms::CASE_GENITIVE => [
                        Wordforms::NUMBER_SINGLE => 'я',
                        Wordforms::NUMBER_MULTIPLE => 'ей'
                    ],
                    Wordforms::CASE_DATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ю',
                        Wordforms::NUMBER_MULTIPLE => 'ям'
                    ],
                    Wordforms::CASE_ACCUSATIVE => [
                        Wordforms::NUMBER_SINGLE => 'я',
                        Wordforms::NUMBER_MULTIPLE => 'ей'
                    ],
                    Wordforms::CASE_ABLATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ем',
                        Wordforms::NUMBER_MULTIPLE => 'ями'
                    ],
                    Wordforms::CASE_LOCATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'ях'
                    ]
                ]
            ]
        ],
        Wordforms::GENDER_FEMALE => [
            self::DECLINE_1 => [
                'а' => [
                    Wordforms::CASE_NOMINATIVE => [
                        Wordforms::NUMBER_SINGLE => 'а',
                        Wordforms::NUMBER_MULTIPLE => 'ы'
                    ],
                    Wordforms::CASE_GENITIVE => [
                        Wordforms::NUMBER_SINGLE => 'ы',
                        Wordforms::NUMBER_MULTIPLE => ''
                    ],
                    Wordforms::CASE_DATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'ам'
                    ],
                    Wordforms::CASE_ACCUSATIVE => [
                        Wordforms::NUMBER_SINGLE => 'у',
                        Wordforms::NUMBER_MULTIPLE => 'ы'
                    ],
                    Wordforms::CASE_ABLATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ой',
                        Wordforms::NUMBER_MULTIPLE => 'ами'
                    ],
                    Wordforms::CASE_LOCATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'ах'
                    ]
                ],
                'я' => [
                    Wordforms::CASE_NOMINATIVE => [
                        Wordforms::NUMBER_SINGLE => 'я',
                        Wordforms::NUMBER_MULTIPLE => 'и'
                    ],
                    Wordforms::CASE_GENITIVE => [
                        Wordforms::NUMBER_SINGLE => 'и',
                        Wordforms::NUMBER_MULTIPLE => 'ь'
                    ],
                    Wordforms::CASE_DATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'ям'
                    ],
                    Wordforms::CASE_ACCUSATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ю',
                        Wordforms::NUMBER_MULTIPLE => 'и'
                    ],
                    Wordforms::CASE_ABLATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ей',
                        Wordforms::NUMBER_MULTIPLE => 'ями'
                    ],
                    Wordforms::CASE_LOCATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'ях'
                    ]
                ]
            ],
            self::DECLINE_3 => [
                'ь' => [
                    Wordforms::CASE_NOMINATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ь',
                        Wordforms::NUMBER_MULTIPLE => 'и'
                    ],
                    Wordforms::CASE_GENITIVE => [
                        Wordforms::NUMBER_SINGLE => 'и',
                        Wordforms::NUMBER_MULTIPLE => 'ей'
                    ],
                    Wordforms::CASE_DATIVE => [
                        Wordforms::NUMBER_SINGLE => 'и',
                        Wordforms::NUMBER_MULTIPLE => 'ам' // ям, ам
                    ],
                    Wordforms::CASE_ACCUSATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ь',
                        Wordforms::NUMBER_MULTIPLE => 'и'
                    ],
                    Wordforms::CASE_ABLATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ю',
                        Wordforms::NUMBER_MULTIPLE => 'ами' // ями, ами
                    ],
                    Wordforms::CASE_LOCATIVE => [
                        Wordforms::NUMBER_SINGLE => 'и',
                        Wordforms::NUMBER_MULTIPLE => 'ах' // ях, ах
                    ]
                ]
            ]
        ],
        Wordforms::GENDER_NEUTER => [
            self::DECLINE_2 => [
                'о' => [ // очко
                    Wordforms::CASE_NOMINATIVE => [
                        Wordforms::NUMBER_SINGLE => 'о',
                        Wordforms::NUMBER_MULTIPLE => 'и'
                    ],
                    Wordforms::CASE_GENITIVE => [
                        Wordforms::NUMBER_SINGLE => 'а',
                        Wordforms::NUMBER_MULTIPLE => 'ов'
                    ],
                    Wordforms::CASE_DATIVE => [
                        Wordforms::NUMBER_SINGLE => 'у',
                        Wordforms::NUMBER_MULTIPLE => 'ам'
                    ],
                    Wordforms::CASE_ACCUSATIVE => [
                        Wordforms::NUMBER_SINGLE => 'о',
                        Wordforms::NUMBER_MULTIPLE => 'и'
                    ],
                    Wordforms::CASE_ABLATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ом',
                        Wordforms::NUMBER_MULTIPLE => 'ами'
                    ],
                    Wordforms::CASE_LOCATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'ах'
                    ]
                ],
                'е' => [ // поле
                    Wordforms::CASE_NOMINATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'я'
                    ],
                    Wordforms::CASE_GENITIVE => [
                        Wordforms::NUMBER_SINGLE => 'я',
                        Wordforms::NUMBER_MULTIPLE => 'ей'
                    ],
                    Wordforms::CASE_DATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ю',
                        Wordforms::NUMBER_MULTIPLE => 'ям'
                    ],
                    Wordforms::CASE_ACCUSATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'я'
                    ],
                    Wordforms::CASE_ABLATIVE => [
                        Wordforms::NUMBER_SINGLE => 'ем',
                        Wordforms::NUMBER_MULTIPLE => 'ями'
                    ],
                    Wordforms::CASE_LOCATIVE => [
                        Wordforms::NUMBER_SINGLE => 'е',
                        Wordforms::NUMBER_MULTIPLE => 'ях'
                    ]
                ]
            ]
        ]
    ];

    /**
     * Get word form
     * @param string $word
     * @param int $form
     * @return string
     */
    public function getForm(
        string $word,
        int $form = 0
    ): string {
        $decline = $this->getDecline($word, $form);
        if ($decline != self::DECLINE_UNKNOWN) {
            $ending = self::getEnding($word, true);
            if (isset(
                self::$declineEndings
                [$form & Wordforms::MASK_GENDER]
                [$decline]
                [$ending]
                [$form & Wordforms::MASK_CASE]
                [$form & Wordforms::MASK_NUMBER]
            )) {
                return
                    mb_substr($word, 0, mb_strlen($word) - mb_strlen($ending)) .
                    self::$declineEndings
                    [$form & Wordforms::MASK_GENDER]
                    [$decline]
                    [$ending]
                    [$form & Wordforms::MASK_CASE]
                    [$form & Wordforms::MASK_NUMBER];
            }
        }

        // todo: remove
        switch ($form & (Wordforms::MASK_GENDER | Wordforms::MASK_CASE | Wordforms::MASK_NUMBER)) {
            /**
             * Male gender
             */
            case Wordforms::GENDER_MALE | Wordforms::CASE_NOMINATIVE | Wordforms::NUMBER_SINGLE:
                // мужской род, именительный падеж, единственное число
                return $word;
            case Wordforms::GENDER_MALE | Wordforms::CASE_NOMINATIVE | Wordforms::NUMBER_MULTIPLE;
                // мужской род, именительный падеж, множественное число
                return $word . 'ы';
            case Wordforms::GENDER_MALE | Wordforms::CASE_GENITIVE | Wordforms::NUMBER_SINGLE:
                // мужской род, родительный падеж, единственное число
                return $word . 'а';
            case Wordforms::GENDER_MALE | Wordforms::CASE_GENITIVE | Wordforms::NUMBER_MULTIPLE;
                // мужской род, родительный падеж, множественное число
                return $word . 'ов';
            case Wordforms::GENDER_MALE | Wordforms::CASE_DATIVE | Wordforms::NUMBER_SINGLE;
                // мужской род, дательный падеж, единственное число
                return $word . 'у';
            case Wordforms::GENDER_MALE | Wordforms::CASE_DATIVE | Wordforms::NUMBER_MULTIPLE:
                // мужской род, дательный падеж, множественное число
                return $word . 'ам';
            case Wordforms::GENDER_MALE | Wordforms::CASE_ACCUSATIVE | Wordforms::NUMBER_SINGLE:
                // мужской род, винительный падеж, единственное число
                return $word;
            case Wordforms::GENDER_MALE | Wordforms::CASE_ACCUSATIVE | Wordforms::NUMBER_MULTIPLE:
                // мужской род, винительный падеж, множественное число
                return $word . 'ы';
            case Wordforms::GENDER_MALE | Wordforms::CASE_ABLATIVE | Wordforms::NUMBER_SINGLE:
                // мужской род, творительный падеж, единственное число
                return $word . 'ом';
            case Wordforms::GENDER_MALE | Wordforms::CASE_ABLATIVE | Wordforms::NUMBER_MULTIPLE:
                // мужской род, творительный падеж, множественное число
                return $word . 'ами';
            case Wordforms::GENDER_MALE | Wordforms::CASE_LOCATIVE | Wordforms::NUMBER_SINGLE:
                // мужской род, предложный падеж, единственное число
                return $word . 'e';
            case Wordforms::GENDER_MALE | Wordforms::CASE_LOCATIVE | Wordforms::NUMBER_MULTIPLE:
                // мужской род, предложный падеж, множественное число
                return $word . 'ах';
            /**
             * Female gender
             */
            case Wordforms::GENDER_FEMALE | Wordforms::CASE_NOMINATIVE | Wordforms::NUMBER_SINGLE:
                // женский род, именительный падеж, единственное число
                return $word;
            case Wordforms::GENDER_FEMALE | Wordforms::CASE_NOMINATIVE | Wordforms::NUMBER_MULTIPLE:
                // женский род, именительный падеж, множественное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'и';
            case Wordforms::GENDER_FEMALE | Wordforms::CASE_GENITIVE | Wordforms::NUMBER_SINGLE:
                // женский род, родительный падеж, единственное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'и';
            case Wordforms::GENDER_FEMALE | Wordforms::CASE_GENITIVE | Wordforms::NUMBER_MULTIPLE:
                // женский род, родительный падеж, множественное число
                return mb_substr($word, 0, mb_strlen($word) - 1);
            case Wordforms::GENDER_FEMALE | Wordforms::CASE_DATIVE | Wordforms::NUMBER_SINGLE:
                // женский род, дательный падеж, единственное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'е';
            case Wordforms::GENDER_FEMALE | Wordforms::CASE_DATIVE | Wordforms::NUMBER_MULTIPLE:
                // женский род, дательный падеж, множественное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'ам';
            case Wordforms::GENDER_FEMALE | Wordforms::CASE_ACCUSATIVE | Wordforms::NUMBER_SINGLE:
                // женский род, винительный падеж, единственное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'у';
            case Wordforms::GENDER_FEMALE | Wordforms::CASE_ACCUSATIVE | Wordforms::NUMBER_MULTIPLE:
                // женский род, винительный падеж, множественное число
                return mb_substr($word, 0, mb_strlen($word) - 1);
            case Wordforms::GENDER_FEMALE | Wordforms::CASE_ABLATIVE | Wordforms::NUMBER_SINGLE:
                // женский род, творительный падеж, единственное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'ой';
            case Wordforms::GENDER_FEMALE | Wordforms::CASE_ABLATIVE | Wordforms::NUMBER_MULTIPLE:
                // женский род, творительный падеж, множественное число
                return $word . 'ми';
            case Wordforms::GENDER_FEMALE | Wordforms::CASE_LOCATIVE | Wordforms::NUMBER_SINGLE:
                // женский род, предложный падеж, единственное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'e';
            case Wordforms::GENDER_FEMALE | Wordforms::CASE_LOCATIVE | Wordforms::NUMBER_MULTIPLE:
                // женский род, предложный падеж, множественное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'ах';
            /**
             * Neuter gender
             */
            case Wordforms::GENDER_NEUTER | Wordforms::CASE_NOMINATIVE | Wordforms::NUMBER_SINGLE:
                // средний род, именительный падеж, единственное число
                return $word;
            case Wordforms::GENDER_NEUTER | Wordforms::CASE_NOMINATIVE | Wordforms::NUMBER_MULTIPLE:
                // средний род, именительный падеж, множественное число
                if (mb_strtolower($word) == 'яблоко') {
                    return mb_substr($word, 0, mb_strlen($word) - 1) . 'и';
                }
                $ending = mb_strtolower(mb_substr($word, -1));
                if ($ending == 'о') {
                    return mb_substr($word, 0, mb_strlen($word) - 1) . 'а';
                } elseif ($ending == 'е') {
                    return mb_substr($word, 0, mb_strlen($word) - 1) . 'я';
                }
                return $word;
            case Wordforms::GENDER_NEUTER | Wordforms::CASE_GENITIVE | Wordforms::NUMBER_SINGLE:
                // средний род, родительный падеж, единственное число
                $ending = mb_strtolower(mb_substr($word, -1));
                if ($ending == 'о') {
                    return mb_substr($word, 0, mb_strlen($word) - 1) . 'а';
                } elseif ($ending == 'е') {
                    return mb_substr($word, 0, mb_strlen($word) - 1) . 'я';
                }
                return $word;
            case Wordforms::GENDER_NEUTER | Wordforms::CASE_GENITIVE | Wordforms::NUMBER_MULTIPLE:
                // средний род, родительный падеж, множественное число
                $ending = mb_strtolower(mb_substr($word, -1));
                if ($ending == 'о') {
                    return mb_substr($word, 0, mb_strlen($word) - 3) . 'ем';
                } elseif ($ending == 'е') {
                    return mb_substr($word, 0, mb_strlen($word) - 1) . 'я';
                }
                return $word;
            case Wordforms::GENDER_NEUTER | Wordforms::CASE_DATIVE | Wordforms::NUMBER_SINGLE:
                // средний род, дательный падеж, единственное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'у';
            case Wordforms::GENDER_NEUTER | Wordforms::CASE_DATIVE | Wordforms::NUMBER_MULTIPLE:
                // средний род, дательный падеж, множественное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'ам';
            case Wordforms::GENDER_NEUTER | Wordforms::CASE_ACCUSATIVE | Wordforms::NUMBER_SINGLE:
                // средний род, винительный падеж, единственное число
                return $word;
            case Wordforms::GENDER_NEUTER | Wordforms::CASE_ACCUSATIVE | Wordforms::NUMBER_MULTIPLE:
                // средний род, винительный падеж, множественное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'и';
            case Wordforms::GENDER_NEUTER | Wordforms::CASE_ABLATIVE | Wordforms::NUMBER_SINGLE:
                // средний род, творительный падеж, единственное число
                return $word . 'м';
            case Wordforms::GENDER_NEUTER | Wordforms::CASE_ABLATIVE | Wordforms::NUMBER_MULTIPLE:
                // средний род, творительный падеж, множественное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'ами';
            case Wordforms::GENDER_NEUTER | Wordforms::CASE_LOCATIVE | Wordforms::NUMBER_SINGLE:
                // средний род, предложный падеж, единственное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'e';
            case Wordforms::GENDER_NEUTER | Wordforms::CASE_LOCATIVE | Wordforms::NUMBER_MULTIPLE:
                // средний род, предложный падеж, множественное число
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'ах';
            default:
                // not implemented
                return $word;
        }
    }

    /**
     * Get quantity-based form
     * @param string $word
     * @param int $form
     * @param int $quantity
     * @return string
     */
    public function getQuantityForm(string $word, int $form, int $quantity): string
    {
        if ($form & Wordforms::CASE_NOMINATIVE) {
            $number = Wordforms::NUMBER_MULTIPLE;
            if (($quantity % 10 == 0) or ($quantity % 10 >= 5) or ($quantity % 100 > 10 and $quantity % 100 < 20)) {
                $case = Wordforms::CASE_GENITIVE;
            } elseif ($quantity % 10 == 1) {
                $number = Wordforms::NUMBER_SINGLE;
                $case = Wordforms::CASE_NOMINATIVE;
            } elseif ($quantity % 10 < 5) {
                $number = Wordforms::NUMBER_SINGLE;
                $case = Wordforms::CASE_GENITIVE;
            } else {
                $number = Wordforms::NUMBER_SINGLE;
                $case = Wordforms::CASE_GENITIVE;
            }
            return self::getForm($word, $form & Wordforms::MASK_GENDER | $case | $number);
        }

        if (!in_array(($quantity % 100), [11, 12, 13, 14, 15, 16, 17, 18, 19]) and ($quantity % 10 == 1)) {
            return self::getForm($word, $form & ~Wordforms::MASK_NUMBER | Wordforms::NUMBER_SINGLE);
        } else {
            return self::getForm($word, $form & ~Wordforms::MASK_NUMBER | Wordforms::NUMBER_MULTIPLE);
        }
    }

    /**
     * Get linguistic decline
     * @param string $word
     * @param int $form
     * @return string
     */
    public function getDecline(string $word, int $form): string
    {
        switch ($form & Wordforms::MASK_GENDER) {
            case Wordforms::GENDER_MALE: // мужской род — 1, 2 склонение
                $ending = self::getEnding($word);
                if (in_array($ending, ['а', 'я'])) {
                    return self::DECLINE_1;
                }
                if (in_array($ending, ['о', 'е', ''])) {
                    return self::DECLINE_2;
                }
                return self::DECLINE_UNKNOWN;
            case Wordforms::GENDER_FEMALE: // женский род — 1, 3 склонение
                $ending = self::getEnding($word);
                if (in_array($ending, ['а', 'я'])) {
                    return self::DECLINE_1;
                }
                if ($ending == 'ь') {
                    return self::DECLINE_3;
                }
                return self::DECLINE_UNKNOWN;
            case Wordforms::GENDER_NEUTER: // средний род — 2 склонение
                $ending = self::getEnding($word);
                if (in_array($ending, ['о', 'е'])) {
                    return self::DECLINE_2;
                }
                return self::DECLINE_UNKNOWN;
        }
        return self::DECLINE_UNKNOWN;
    }

    /**
     * Get word ending
     * @param string $word
     * @param bool $withSoftSign
     * @return string|null
     */
    public static function getEnding(string $word, bool $withSoftSign = false): ?string
    {
        $last1 = mb_substr($word, -1);

        if (in_array($last1, ['а', 'я', 'о', 'е']) or ($withSoftSign and $last1 == 'ь')) {
            return $last1;
        } else {
            return null;
        }
    }
}
