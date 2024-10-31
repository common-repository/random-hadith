<?php
/*
Plugin Name: Random Hadith
Plugin URI: http://yse-uk.com/wordpress/?page_id=417
Description: Displays Random Hadith on your website. Powered by <a href="http://www.kyantonius.com/hadith/">http://www.kyantonius.com/hadith/</a>
Version: 1.0
Author: Usayd Younis
Author URI: http://www.usayd.com
*/
/* 
Please refer to the readme.txt for installation instructions. This release is deemed stable, please contact us if you find any errors or bugs.
*/
/*  Copyright 2005  Usayd Younis  (email : plugins@usayd.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
function random_hadith () {
	include('http://www.kyantonius.com/hadith/quotation.php');
}
?>