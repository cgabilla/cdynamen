<?php
/**
 * User: Cyrus G. Gabilla
 * Date: 9/24/2015
 * Time: 2:48 AM
 */
require_once '../components/MenuItem.php';
require_once '../components/MenuNavigator.php';

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

$menuNavigator = new MenuNavigator('A Navigator Menu', 'cnavmenuv5');
$menuNavigator->AttachMainMenuItem($levelMain);

// echo $menuNavigator->DomSrc();
$menuNavigator->Xml();
$menuNavigator->Html();