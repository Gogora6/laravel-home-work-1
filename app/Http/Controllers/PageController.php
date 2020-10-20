<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function getContactPage()
    {
        $pageName = 'Contact';
        $theme = 'theme--dark';
        $footerText = 'This is Footer Text!!';
        return view('layout')
            ->with('pageName', $pageName)
            ->with('theme', $theme)
            ->with('title', $pageName)
            ->with('showFooter', true)
            ->with('footerText', $footerText);
    }

    public function getAboutPage()
    {
        $pageName = 'About';
        $footerText = 'This is Footer Text!!';

        return view('layout')
            ->with('pageName', $pageName)
            ->with('title', $pageName)
            ->with('footerText', $footerText);


    }

    public function getHomePage()
    {
        $pageName = 'Home';
        $theme = 'theme--light';
        $footerText = 'This is Footer Text!!';

        return view('layout')
            ->with('pageName', $pageName)
            ->with('theme', $theme)
            ->with('title', $pageName)
            ->with('showFooter', true)
            ->with('footerText', $footerText);
    }

}
