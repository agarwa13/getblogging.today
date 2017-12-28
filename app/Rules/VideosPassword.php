<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class VideosPassword implements Rule
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
        return $value === "ShowMeTheVideos";
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The password you entered is incorrect. Click on the link in your email so you don\'t have to enter the password';
    }
}
