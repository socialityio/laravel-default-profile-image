# Laravel Default Profile Image
[![Latest Stable Version](https://poser.pugx.org/a6digital/laravel-default-profile-image/v/stable.svg)](https://packagist.org/packages/a6digital/laravel-default-profile-image) [![Total Downloads](https://poser.pugx.org/a6digital/laravel-default-profile-image/downloads.svg)](https://packagist.org/packages/a6digital/laravel-default-profile-image) [![Latest Unstable Version](https://poser.pugx.org/a6digital/laravel-default-profile-image/v/unstable.svg)](https://packagist.org/packages/a6digital/laravel-default-profile-image) [![License](https://poser.pugx.org/a6digital/laravel-default-profile-image/license.svg)](https://packagist.org/packages/a6digital/laravel-default-profile-image)

Laravel package to create default profile image using name of user.


## Installation

Install using composer:

    composer require a6digital/laravel-default-profile-image

Edit `app/config/app.php` and add the `providers`

    'providers' => [
        'A6digital\Image\DefaultProfileImageServiceProvider'
    ]

    
## Basic Usage

To create a profile image just do

	$img = \DefaultProfileImage::create("Name Surname");
	\Storage::put("profile.png", $img->encode());

	
This will create a profile image that has 512px width&height using the first letters of name and surname.

![Profile Image](https://raw.githubusercontent.com/a6digital/laravel-default-profile-image/master/docs/images/profile.png)

## Advanced Usage

Create a white color text over black color background profile image that has 216px width&height.

	$img = \DefaultProfileImage::create("Name Surname", 256, '#000', '#FFF');
	\Storage::put("profile.png", $img->encode());

![Profile Small Image](https://raw.githubusercontent.com/a6digital/laravel-default-profile-image/master/docs/images/profile-small.png)


Using a custom font

	$img = \DefaultProfileImage::create("@ Lamoni", 256, "#212121", "#FFF", '/var/www/public/fonts/RobotoDraftRegular.woff');
	\Storage::put("profile.png", $img->encode());
	
![Profile Small Image](https://raw.githubusercontent.com/a6digital/laravel-default-profile-image/master/docs/images/profile-font-roboto.png)