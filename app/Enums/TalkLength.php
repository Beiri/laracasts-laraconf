<?php

namespace App\Enums;

enum TalkLength: string
{
    case LIGHTNING = 'Lightning - 15 minutes';
    case NORMAL = 'Normal - 30 Minutes';
    case KEYNOTE = 'Keynote';
}
