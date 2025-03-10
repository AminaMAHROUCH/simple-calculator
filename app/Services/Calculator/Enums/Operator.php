<?php

namespace App\Services\Calculator\Enums;

enum Operator: string
{
    case ADDITION = '+';
    case SUBTRACTION = '-';
    case MULTIPLICATION = '*';
    case DIVISION = '/';
}
