<?php

namespace A6digital\Image;

use Illuminate\Support\ServiceProvider;

class DefaultProfileImageServiceProvider extends ServiceProvider
{

    
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register 'defaultprofileimage' instance container to our defaultprofileimage object
        $this->app->singleton('defaultprofileimage', function($app)
        {
            return new DefaultProfileImage;
        });

        // Shortcut so developers don't need to add an Alias in app/config/app.php
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('DefaultProfileImage', 'A6digital\Image\Facades\DefaultProfileImage');
        });
    }

    
}
