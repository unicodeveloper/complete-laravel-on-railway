<?php

namespace App\Enums;

enum TalkType: string
{
    case LIGHTNING = 'lightning';
    case STANDARD = 'standard';
    case KEYNOTE = 'keynote';
}