<?php 
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class GetInfoFilterTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'getInfo';
    }

    public function getFilters()
    {
        return array(
            'getInfo' => new Twig_Filter_Method($this, 'getInfo'),
        );
    }

    public function getInfo($string)
    {
        return preg_replace('#({|%7B)get(i|I)nfo:siteurl(}|%7D)#', craft()->getSiteUrl(), $string);
    }

}
