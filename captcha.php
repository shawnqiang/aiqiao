<?php
/**
 *      [PHPB2B] Copyright (C) 2007-2099, Ualink Inc. All Rights Reserved.
 *      The contents of this file are subject to the License; you may not use this file except in compliance with the License. 
 *
 *      @version $Revision: 2075 $
 */
require('libraries/securimage/securimage.php');
$img = new securimage();
$img->code_length = 4;
$img->ttf_file = 'libraries/securimage/ttffonts/COOLVETI.ttf';
//Change some settings
$img->perturbation = 0.45;
$img->image_bg_color = new Securimage_Color("#f6f6f6");
$img->multi_text_color = array(new Securimage_Color("#3399ff"),
new Securimage_Color("#3300cc"),
new Securimage_Color("#3333cc"),
new Securimage_Color("#6666ff"),
new Securimage_Color("#99cccc")
);
$img->use_multi_text = true;
$img->num_lines = 2;
$img->line_color = new Securimage_Color("#eaeaea");
if ($handle = @opendir('libraries/securimage/backgrounds/'))
{
	while ($bgfile = @readdir($handle))
	{
		if (preg_match('/\.jpg$/i', $bgfile))
		{
			$backgrounds[] = 'libraries/securimage/backgrounds/'.$bgfile;
		}
	}
	@closedir($handle);
}
srand ((float) microtime() * 10000000);
$rand_keys = array_rand ($backgrounds);
$background = $backgrounds[$rand_keys];
$img->show($background);
?>