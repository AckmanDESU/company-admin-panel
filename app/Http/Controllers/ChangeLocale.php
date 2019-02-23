<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChangeLocale extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($locale)
    {
        if (in_array($locale, \Config::get('app.locales')))
            Session::put('locale', $locale);

        return back();
    }
}
