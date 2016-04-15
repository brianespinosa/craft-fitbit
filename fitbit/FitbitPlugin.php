<?php
namespace Craft;

/**
 * @link      https://github.com/brianespinosa/craft-fitbit
 * @copyright Copyright (c) 2016, Brian Espinosa
 * @license   https://github.com/brianespinosa/craft-fitbit/blob/release/master/LICENSE
 */



class FitbitPlugin extends BasePlugin
{
    /**
     * Get OAuth Providers
     */
    public function getOAuthProviders()
    {
        require_once(CRAFT_PLUGINS_PATH.'fitbit/providers/oauth/Fitbit.php');

        return [
            'Dukt\OAuth\Providers\Fitbit'
        ];
    }

    /**
     * Get Name
     */
    function getName()
    {
        return Craft::t('Fitbit');
    }

    /**
     * Get Version
     */
    function getVersion()
    {
        return '1.0.0';
    }

    /**
     * Get Developer
     */
    function getDeveloper()
    {
        return 'Brian Espinosa';
    }

    /**
     * Get Developer URL
     */
    function getDeveloperUrl()
    {
        return 'https://github.com/brianespinosa/craft-fitbit';
    }
}
