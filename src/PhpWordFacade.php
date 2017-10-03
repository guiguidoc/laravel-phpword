<?php

namespace guiguidoc\LaravelPhpword;

use Illuminate\Support\Facades\Facade;
use PhpOffice\PhpWord\PhpWord;

/**
 * Class PhpWordFacade
 * @package guiguidoc\LaravelPhpword
 */
class PhpWordFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return PhpWord::class;
    }
}