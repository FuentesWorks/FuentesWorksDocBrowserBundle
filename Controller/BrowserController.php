<?php
/**
 * Edmundo Fuentes
 * FuentesWorks
 * (c) 2014
 */

namespace FuentesWorks\DocBrowserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;

class BrowserController extends Controller
{
    public function browseAction(Request $request)
    {

    }

    public function sidebarAction(Request $request)
    {
        $finder = new Finder();
        $finder->files()->in(__DIR__);

    }
}