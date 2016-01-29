# CNavMenu: A Dynamic Navigation Menu API in PHP (for CodeIgniter 2)
> Cyrus G. Gabilla [`<cgabilla@gmail.com>`](<cgabilla@gmail.com>)

*CNavMenu* is a set of PHP classes that will automatically generate a navigation menu modeled from an existing theme
sample (see `raw-navmenu-model.xml`).
In order for the user of the system who has only a little knowledge of dealing web scripts, **HTML**, **PHP**, etc., 
it provides set of functionality to do generate script similar to the navigation model menu.
 
## Version 1.0, October 21, 2015
The first major release.

## ATTENTION!!!
The transition from the previous versions were completely overhauled. The project were redesigned to attain the 
object of the project.

## Deprecated `cnavmenu-{0.01, 0.02}`

See File Directories

 * Main - `cnavmenu\application\libraries\tt\cnavmenu`
 * Source - `cnavmenu\application\libraries\tt\cnavmenu\components`
 * Tests - `cnavmenu\application\libraries\tt\cnavmenu\tests`
 * Design - `cnavmenu\tt_design`
 * Theme - `cnavmenu\tt_assets`
 
## CNavMenu Directory Structure

The main directory of the CNavMenu is a CodeIgniter structure and also a PHPStorm project. It can be opened using a 
PHPStorm editor. I was using an evaluation copy of the PHPStorm under my name. The main *CNavMenu* API  is located at the *application path* of the CodeIgniter2 project `\application\libraries\abu`.

 1. `\AkamApps\CNavMenu\src` - Sources. It contains the complete class implementation of the `CNavMenu` API.
 
    * `CNavMenu.php`
    * `CNavMenuConfigurator.php`
    * `CNavMenuGroup.php`
    * `CNavMenuModel.php`
    * `DomBuilder.php`
    * `MenuItem.php`
    * `MenuItemDomBuilder.php`
    * `MenuItemList.php`
    * `MenuItemNavigationRec.php`
    * `MenuItemNRList.php`
    * `MiniDomTag.php` 
    
 2. `\AkamApps\CNavMenu\tests` - Tests. It shows the usage of every classes of the `CNavMenu` API. 
 
    * `CNavMenuModelTest.php`
    * `CNavMenuTest.php`
    * `DomBuilderTest.php`
    * `MenuItemListTest.php`
    * `MenuItemNavigationTest.php`
    * `MenuItemNRListTest.php`
    * `MenuItemNRModelTest.php`
    * `MenuItemNRTest.php`
    * `MenuItemTest.php`
    * `MiniDomTagTest.php` 
    
## Configuration Classes
The following are the configuration implemented classes for the CNavMenu

 1. `\application\libraries\tt\cnavmenu\TTCNavMenuBuilder.php`
 2. `\application\libraries\tt\cnavmenu\TTCNavMenuConfig.php`

## UML Diagram
The diagram in `\application\libraries\abu\AkamApps\CNavMenu\diagram` in SVG, JPG, and PNG formats can be pictured out
 as whole API classes. These diagrams were generated using a built-in plugin in the PHPStorm 9.0.2.

 * CNavMenu_JPG.jpg
 * CNavMenu_PNG.png
 * CNavMenu_SVG.svg
 
## The Model Theme
 See directory `cnavmenu\tt_assets`.

## A Sample Test of CNavMenu API

### An Example of Creating a CNavMenu:  `CNavMenuTest.php`
See the file `cnavmenu\application\libraries\abu\AkamApps\CNavMenu\tests\CNavMenuTest.php`.

    <?php
    
    /**
     * CNavMenuGroup Class Test
     * 	- It shows the usage of the CNavMenu API.
     *
     * @author Cyrus G. Gabilla
     */
    
    require_once '../src/MenuItemNavigationRec.php';
    require_once '../src/CNavMenuGroup.php';
    
    $cnavmenu = new CNavMenuGroup();
    $cnavmenu->buildHeaderNav('A Navigation', 0);
    $cnavmenu->buildMainNav('Top Xs', 0);
    
    //echo $cnavmenu->getHeaderNav()->domSrc() . PHP_EOL;
    //echo $cnavmenu->getMainNav()->domSrc();
    
    echo 'main nav: ' . $cnavmenu->getMainNav()->getLabel() . PHP_EOL;
    
    $cnavmenu->addNavMenuElement('Frank', 0, $cnavmenu->getMainNav()->getLabel());
    $cnavmenu->addNavMenuElement('Ernest', 1, $cnavmenu->getMainNav()->getLabel());
    $cnavmenu->addNavMenuElement('Poloy', 2, $cnavmenu->getMainNav()->getLabel());
    
    echo MiniDomTag::formatXmlString($cnavmenu->domSrc());
    
    //$frank = new MenuItemNavigationRec('Frank', 0);
    //$frank->setOrderIndex(1);
    
    $x2 = new MenuItemNavigationRec('X2', 2);
    // $x2->addSubMenuItemNR(new MenuItemNavigationRec('X2', 2));
    
    $x2->addSubMenuItemNR(new MenuItemNavigationRec('XXX1'));
    
    $cnavmenu->addNavMenuElementNR($x2, 2, 'Frank');
    
    echo PHP_EOL . MiniDomTag::formatXmlString($cnavmenu->domSrc());
    
    // $frank->addSubMenuItemNR($x2);
    // $x2->addSubMenuItemsNR(array(new MenuItemNavigationRec('Z1', 2), new MenuItemNavigationRec('Z3', 5)));
    // $frank->addSubMenuItemsNR(array($x2, new MenuItemNavigationRec('X1', 1)));
    
    $cnavmenu->addNavMenuElementsArray(array( new MenuItemNavigationRec('E2', 10), new MenuItemNavigationRec('E1', 1)), 2, 'Ernest');
    
    echo PHP_EOL . MiniDomTag::formatXmlString($cnavmenu->domSrc());
    
    $cnavmenu->addNavMenuElement('Jenny', 2, 'E2');
    
    echo PHP_EOL . MiniDomTag::formatXmlString($cnavmenu->domSrc());
    
    $cnavmenu->addNavMenuElementsArray(array( new MenuItemNavigationRec('Bang2', 10), new MenuItemNavigationRec('Bang1', 1)), 2, 'Poloy');
    
    $cnavmenu->addNavMenuElement('Toink', 2, 'Bang1');
    
    // generate a CNavMenu script
    echo PHP_EOL . MiniDomTag::formatXmlString($cnavmenu->domSrc());
    
    $cnavmenuSig = "<!--A CNavMenu generated XML script.--> " . nl2br("\n\n") .  MiniDomTag::formatXmlString
    ($cnavmenu->domSrc());
    // generate a file
    file_put_contents('cnavmenu.xml', $cnavmenuSig);


### The *CNavMenu* Generated XML: `cnavmenu.xml`
See the file `cnavmenu\application\libraries\abu\AkamApps\CNavMenu\tests\cnavmenu.xml`.
 
    <!--A CNavMenu generated XML script.--> <br />
    <br />
    <body class="">
     <div class="page-wrapper">
      <aside class="sidebar sidebar-default">
       <nav>
        <h5 class="sidebar-header">A Navigation<ul class="nav nav-pills nav-stacked">
         <li class="nav-dropdown">
          <a href="#" title="Top Xs">
           <i class="fa fa-lg fa-fw fa-folder-open">
            </i>Top Xs</a>
            <ul class="nav-sub">
             <li class="nav-dropdown">
              <a href="#" title="Frank">
               <i class="fa fa-fw fa-folder-open">
                </i>Frank</a>
                <ul class="nav-sub">
                 <li class="nav-dropdown">
                  <a href="#" title="X2">
                   <i class="fa fa-fw fa-folder-open">
                    </i>X2</a>
                    <ul class="nav-sub">
                     <li>
                      <a href="javascript:;" title="XXX1">
                       <i class="fa fa-fw fa-file">
                        </i>XXX1</a>
                       </li>
                      </ul>
                     </li>
                    </ul>
                   </li>
                   <li class="nav-dropdown">
                    <a href="#" title="Ernest">
                     <i class="fa fa-fw fa-folder-open">
                      </i>Ernest</a>
                      <ul class="nav-sub">
                       <li class="nav-dropdown">
                        <a href="#" title="E2">
                         <i class="fa fa-fw fa-folder-open">
                          </i>E2</a>
                          <ul class="nav-sub">
                           <li>
                            <a href="javascript:;" title="Jenny">
                             <i class="fa fa-fw fa-file">
                              </i>Jenny</a>
                             </li>
                            </ul>
                           </li>
                           <li>
                            <a href="javascript:;" title="E1">
                             <i class="fa fa-fw fa-file">
                              </i>E1</a>
                             </li>
                            </ul>
                           </li>
                           <li class="nav-dropdown">
                            <a href="#" title="Poloy">
                             <i class="fa fa-fw fa-folder-open">
                              </i>Poloy</a>
                              <ul class="nav-sub">
                               <li>
                                <a href="javascript:;" title="Bang2">
                                 <i class="fa fa-fw fa-file">
                                  </i>Bang2</a>
                                 </li>
                                 <li class="nav-dropdown">
                                  <a href="#" title="Bang1">
                                   <i class="fa fa-fw fa-folder-open">
                                    </i>Bang1</a>
                                    <ul class="nav-sub">
                                     <li>
                                      <a href="javascript:;" title="Toink">
                                       <i class="fa fa-fw fa-file">
                                        </i>Toink</a>
                                       </li>
                                      </ul>
                                     </li>
                                    </ul>
                                   </li>
                                  </ul>
                                 </li>
                                </ul>
                               </h5>
                              </nav>
                             </aside>
                            </div>
                           </body>

