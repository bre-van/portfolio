<?php
/**
 * @author Brecht Vanderdonckt
 * Date: 30/12/2025
 */

namespace App\Enums;

enum SkillLevel: int
{
    case EXPERT = 1;
    case EXPERIENCED = 2;
    case COMFORTABLE = 3;
    case NOVICE = 4;

    public function label(): string
    {
        return match ($this) {
            self::EXPERT => 'Expert',
            self::EXPERIENCED => 'Ervaren',
            self::COMFORTABLE => 'Comfortabel',
            self::NOVICE => 'Basis',
        };
    }
}
