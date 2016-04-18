<?php
/**
 * @link      https://github.com/brianespinosa/craft-fitbit
 * @copyright Copyright (c) 2016, Brian Espinosa
 * @license   https://github.com/brianespinosa/craft-fitbit/blob/release/master/LICENSE.md
 */

namespace Dukt\OAuth\Providers;

use Craft\UrlHelper;

class Fitbit extends BaseProvider
{
    // Public Methods
    // =========================================================================

    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return 'Fitbit';
    }

    /**
     * Get Icon URL
     *
     * @return string
     */
    public function getIconUrl()
    {
        return UrlHelper::getResourceUrl('fitbit/fitbit.png');
    }

    /**
     * Get OAuth Version
     *
     * @return int
     */
    public function getOauthVersion()
    {
        return 2;
    }

    /**
     * Get API Manager URL
     *
     * @return string
     */
    public function getManagerUrl()
    {
        return 'https://dev.fitbit.com/apps';
    }

    /**
     * Get Scope Docs URL
     *
     * @return string
     */
    public function getScopeDocsUrl()
    {
        return 'https://dev.fitbit.com/docs/oauth2/#scope';
    }

    /**
     * Create Github Provider
     *
     * @return Fitbit
     */
    public function createProvider()
    {
        $config = [
            'clientId' => $this->providerInfos->clientId,
            'clientSecret' => $this->providerInfos->clientSecret,
            'redirectUri' => $this->getRedirectUri(),
        ];

        return new \djchen\OAuth2\Client\Provider\Fitbit($config);
    }
}
