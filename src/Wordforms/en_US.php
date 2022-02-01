<?php

declare(strict_types=1);

namespace Difra\Wordforms;

/**
 * Class en_US
 * @package Difra\Wordforms
 */
class en_US extends Common
{
    /**
     * Get quantity-based form
     * @param string $word
     * @param int $form
     * @param int $quantity
     * @return string
     */
    public function getQuantityForm(string $word, int $form, int $quantity): string
    {
        if ($quantity == 1) {
            return $word;
        } else {
            $lastLetter = mb_substr($word, -1);
            if ($lastLetter == 's') {
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'es';
            } elseif ($lastLetter == 'y') {
                return mb_substr($word, 0, mb_strlen($word) - 1) . 'ies';
            } else {
                return $word . 's';
            }
        }
    }
}
