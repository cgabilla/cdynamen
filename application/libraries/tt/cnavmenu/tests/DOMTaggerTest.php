<?php
/**
 * User: Cyrus G. Gabilla
 * Date: 9/23/2015
 * Time: 7:32 PM
 */

require '../components/DOMTagger.php';

$imgTag = new DOMTagger('img', DOMTagger::C_STR_INIT);
$imgTag->AddAttribute('src', 'www.facebook.com/cgabilla/profile/profile.jpeg');

echo 'Sample img tag: ' . $imgTag->DOMSrc() . PHP_EOL;

$liTag = new DOMTagger('li', 'Frank');
$ulTag = new DOMTagger('ul', $liTag->DOMSrc());
$ulTag->AddAttribute('class', 'titan_developers');

echo 'Sample ul, li tag: ' . $ulTag->DOMSrc() . PHP_EOL;


