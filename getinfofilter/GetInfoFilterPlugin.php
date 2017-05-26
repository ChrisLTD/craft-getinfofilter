<?php
namespace Craft;

// Based on: https://github.com/CWSpear/word-it-up
// https://cameronspear.com/blog/craft-cms-twig-filter-extension/

class GetInfoFilterPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Get Info Filter');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Chris Johnson';
    }

    public function getDeveloperUrl()
    {
        return 'http://chrisltd.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.getinfofilter.twigextensions.GetInfoFilterTwigExtension');
        return new GetInfoFilterTwigExtension();
    }
}
