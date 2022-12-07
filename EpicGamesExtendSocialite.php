<?php

namespace Voval\Socialite\EpicGames;

use SocialiteProviders\Manager\SocialiteWasCalled;

class EpicGamesExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('epicgames', Provider::class);
    }
}
