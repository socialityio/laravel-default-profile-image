<?php

namespace A6digital\Image\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * DefaultProfileImage
 *
 */ 
class DefaultProfileImage extends Facade {
 
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'defaultprofileimage';
    }
 
}