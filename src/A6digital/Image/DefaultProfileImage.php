<?php

namespace A6digital\Image;

use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;
use Exception;

class DefaultProfileImage
{

	/**
	 * @param string $name
	 * @param int $size
	 * @param string $background_color
	 * @param string $text_color
	 * @param string $font_file
	 * @return ImageManagerStatic
	 * @throws Exception
	 */
	public static function create ($name = '', $size = 512, $background_color = '#666', $text_color = '#FFF', $font_file = '../../../font/OpenSans-Semibold.ttf')
	{
	
		if (strlen($name) <= 0) {
			throw new Exception('Name must be at least 2 characters.');
		}
		
		if ($size <= 0) {
			throw new Exception('Input must be greater than zero.');
		}

        if ($font_file === '../../../font/OpenSans-Semibold.ttf') {
            $font_file = __DIR__."/".$font_file;
        }

        if (!file_exists($font_file)) {
            throw new Exception("Font file not found");
        }

        $str = "";
        $name_ascii = strtoupper(Str::ascii($name));

        $words = preg_split("/[\s,_-]+/", $name_ascii);

        if(count($words) > 2) {
            $str = $words[0][0].$words[2][0];
        } else if (count($words) == 2) {
            $str = $words[0][0].$words[1][0];
        } else {
            $str = substr($name_ascii, 0, 2);
        }

		$img = ImageManagerStatic::canvas($size, $size, $background_color)->text($str, $size / 2, $size / 2, function($font) use($size, $text_color, $font_file) {
			$font->file($font_file);
			$font->size($size / 2);
			$font->color($text_color);
			$font->align('center');
			$font->valign('middle');
		});
		
		return $img;
		
	}

}