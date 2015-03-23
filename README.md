# Laravel Default Profile Image

Laravel package to create default profile image using name of user.


## Installation

Install using composer:

    composer require a6digital/laravel-default-profile-image

Edit `app/config/app.php` and add the `alias`

    'aliases' => array(
        'DefaultProfileImage' => 'A6Digital\Image\DefaultProfileImage',
    )

    
## Basic Usage

To create a profile image just do

	DefaultProfileImage::create("Name Surname")
	
This will create a profile image that has 512px diameter circle using the first letters of name and surname.

## Advanced Usage

Create a white color text over black color background profile image that has 216px diameter.

	DefaultProfileImage::create("Name Surname", 256, '#000', '#FFF')
