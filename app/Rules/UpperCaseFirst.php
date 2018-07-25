<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UpperCaseFirst implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
        $str=trim($value);
        $first_letter=substr($str,0,1);
        return ctype_upper($first_letter);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'First Letter must be upper case.';
    }
}
