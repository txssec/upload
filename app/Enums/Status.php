<?php

namespace App\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method status enum
 */
final class Status extends Enum
{
    const DISAPPROVED =  'disapproved';
    const APPROVED =   'approved';
    const PENDENT =   'pendent';
}
