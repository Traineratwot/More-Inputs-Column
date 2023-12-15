<?php

namespace Traineratwot\MoreInputsColumn\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Traineratwot\MoreInputsColumn\MoreInputsColumn
 */
class MoreInputsColumn extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Traineratwot\MoreInputsColumn\MoreInputsColumn::class;
    }
}
