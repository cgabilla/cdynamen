<?php
/**
 * User: Cyrus G. Gabilla
 * Date: 9/23/2015
 * Time: 9:04 PM
 */
require_once '../components/MenuItem.php';

/**
 * @ref http://stackoverflow.com/questions/3616540/format-xml-string
 * @author http://stackoverflow.com/users/394527/pravat231
 * @param $xml
 * @return string
 */
function formatXmlString($xml)
{
    $xml = preg_replace('/(>)(<)(\/*)/', "$1\n$2$3", $xml);
    $token = strtok($xml, "\n");
    $result = '';
    $pad = 0;
    $matches = array();
    while ($token !== false) :
        if (preg_match('/.+<\/\w[^>]*>$/', $token, $matches)) :
            $indent = 0;
        elseif (preg_match('/^<\/\w/', $token, $matches)) :
            $pad--;
            $indent = 0;
        elseif (preg_match('/^<\w[^>]*[^\/]>.*$/', $token, $matches)) :
            $indent = 1;
        else :
            $indent = 0;
        endif;
        $line = str_pad($token, strlen($token) + $pad, ' ', STR_PAD_LEFT);
        $result .= $line . "\n";
        $token = strtok("\n");
        $pad += $indent;
    endwhile;
    return $result;
}

$menuItemMain = new MenuItem('Menu MAIN');
$menuItemMain->DroppedDown();

$menuItemSubOne = new MenuItem('Menu Sub One');
$menuItemSubTwo = new MenuItem('Menu Sub Two');
$menuItemSubThree = new MenuItem('Menu Sub Three');

$menuItemMain->AddSubMenu($menuItemSubOne);
$menuItemMain->AddSubMenu($menuItemSubTwo);
$menuItemMain->AddSubMenu($menuItemSubThree);
// echo $menuItemMain->DOMSrc();
file_put_contents('xml/cnavmenu1.xml', formatXmlString($menuItemMain->DOMSrc()));

//Another Complicated Test
//Level 2.1
//Level 2.2
//Level 2.3
//    Level 3.1
//    Level 3.2
//        Level 4.1
//        Level 4.2
//            Level 5.1
//                Level 6.1
//                Level 6.2
//            Level 5.2
//            Level 5.3
//        Level 4.3
//    Level 3.3

$levelMain = new MenuItem('Menu Levels');
$levelMain->DroppedDown();
$levelMain->FolderOpenIcon();

$level21 = new MenuItem('Level 2.1');
$level22 = new MenuItem('Level 2.2');
$level23 = new MenuItem('Level 2.2');

$level23->DroppedDown();
$level23->FolderOpenIcon();

$levelMain->AddSubMenu($level21);
$levelMain->AddSubMenu($level22);

$level31 = new MenuItem('Level 3.1');
$level32 = new MenuItem('Level 3.2');
$level33 = new MenuItem('Level 3.2');

$level23->AddSubMenu($level31);
$level23->AddSubMenu($level32);
$level23->AddSubMenu($level33);

$levelMain->AddSubMenu($level23);

// echo PHP_EOL . $levelMain->DOMSrc();

// save as .xml
file_put_contents('xml/cnavmenu2.xml', formatXmlString($levelMain->DOMSrc()));