<?php

require_once '../components/MenuItem.php';
require_once '../components/DOMTagger.php';
require_once '../components/FAIcon.php';


class MenuNavigatorBuilder
{
    const C_XML_HEADER = '<?xml version="1.0" encoding="UTF-8"?>';
    const C_SUB_MENU_HEADER = 'nav nav-pills nav-stacked';
    const C_SUB_MENU = 'nav-sub';

    // DroppedDown Types Icon
    // <i class="fa fa-fw fa-folder-open"></i>
    // <i class="fa fa-fw fa-file"></i>
    public static function ToMenuDOMSrc(MenuItem $menuItem)
    {
        $iconType = $menuItem->UserDefinedIconType();
        if ($menuItem->IsFolderOpenMainIcon())
            $iconType = FAIcon::C_FA_FOLDER_OPEN_LG;
        else if ($menuItem->IsFolderOpenIcon())
            $iconType = FAIcon::C_FA_FOLDER_OPEN_LW;
        else if ($menuItem->IsFileIcon())
            $iconType = FAIcon::C_FA_FILE;
        else
            ;
        $dom = new DOMTagger('a', MenuNavigatorBuilder::_IconTypeDOMSrc($iconType) . $menuItem->Title());

        $dom->AddAttribute('href', $menuItem->SourceURL());
        $dom->AddAttribute('title', $menuItem->Title());
        return $dom->DOMSrc();
    }

    // <li>
    //     <a href="javascript:;" title="Level 4.1">Level 4.1</a>
    // </li>
    public static function StaticMenuItemDOMSrc(MenuItem $menuItem)
    {
        return MenuNavigatorBuilder::_MenuItemDOMSrc($menuItem);
    }

    public static function DropDownMenuItemDOMSrc(MenuItem $menuItem)
    {
        return MenuNavigatorBuilder::_DropDownMenuDOMSrc(
            MenuNavigatorBuilder::ToMenuDOMSrc($menuItem) .
            MenuNavigatorBuilder::_SubDropDownMenuDOMSrc($menuItem));
    }

    public static function BuildMenuNavigatorDOMSrc(MenuNavigator $menuNavigator)
    {
        return MenuNavigatorBuilder::C_XML_HEADER . MenuNavigatorBuilder::_MainDropDownMenuDOMSrc($menuNavigator);
    }

    // <body class="">
    //<div class="page-wrapper">
    //<aside class="sidebar sidebar-default">
    public static function BuildMenuNavigatorHtmlSrc(MenuNavigator $menuNavigator)
    {
        // TODO: Dynamic content of header and footer with using AssetConfig
        $header = '<!--header here>';
        $footer = '<!--footer here>';
        return $header . MenuNavigatorBuilder::_ViewNavigatorMenuHtmlSrc($menuNavigator) . $footer;
    }


//    // <h5 class="sidebar-header">Navigation</h5>
//    private static function _MenuHeaderDOM($title) {
//        $dom = new DOMTagger('h5', $title);
//        $dom->AddAttribute('class', 'sidebar-header');
//        return $dom->DOMSrc();
//    }
//
//    // <ul class="nav nav-pills nav-stacked">
//    private static function _StackedMenuDOM($title) {
//        $dom = new DOMTagger('ul', $title);
//        $dom->AddAttribute('class', 'nav nav-pills nav-stacked');
//        return $dom->DOMSrc();
//    }


    //  <li class="nav-dropdown"> <= DOMTagger
    //  <a href="#" title="Level 3.3">Level 3.3</a>  <= DOMTagger
    private static function _DropDownMenuDOMSrc($title)
    {
        $dom = new DOMTagger('li', $title);
        $dom->AddAttribute('class', 'nav-dropdown');
        return $dom->DOMSrc();
    }

    // sub-menu helper
    private static function _SubMenuHelperDOMSrc($title, $subMenuType)
    {
        $dom = new DOMTagger('ul', $title);
        $dom->AddAttribute('class', $subMenuType);
        return $dom->DOMSrc();
    }

    // <ul class="nav nav-pills nav-stacked">
    private static function _SubMenuHeaderDOMSrc(MenuItem $menuItem)
    {
        return MenuNavigatorBuilder::_SubMenuHelperDOMSrc($menuItem->DOMSrc(), MenuNavigatorBuilder::C_SUB_MENU_HEADER);
    }

    // <ul class="nav-sub">
    private static function _SubMenuDOMSrc($title)
    {
        return MenuNavigatorBuilder::_SubMenuHelperDOMSrc($title, MenuNavigatorBuilder::C_SUB_MENU);
    }

    // <li>
    //     ... $title
    // </li>
    private static function _MenuItemDOMSrc(MenuItem $menuItem)
    {
        $dom = new DOMTagger('li', MenuNavigatorBuilder::ToMenuDOMSrc($menuItem));
        return $dom->DOMSrc();
    }

    //  <li class="nav-dropdown"> <= DOMTagger
    //      <a href="#" title="Level 3.3">Level 3.3</a>  <= DOMTagger
    //  <ul class="nav-sub">
    private static function _SubDropDownMenuDOMSrc(MenuItem $menuItem)
    {
        // get sub-menus DOM source
        $dom = DOMTagger::C_STR_INIT;
        $subMenus = $menuItem->Components();
        foreach ($subMenus as $domItem) {
            // $dom .= self::StaticMenuItemDOMSrc(self::ToMenuDOMSrc($domItem));
            // it should be a recursive solution
            $dom .= $domItem->DOMSrc();
        }
        return MenuNavigatorBuilder::_SubMenuDOMSrc($dom);
    }

    private static function _IconTypeDOMSrc($fontAwesomeClass)
    {
        $dom = new DOMTagger('i');
        $dom->AddAttribute('class', $fontAwesomeClass);
        return $dom->DOMSrc();
    }

    //<nav>
    //<h5 class="sidebar-header">Navigation</h5>
    //  <ul class="nav nav-pills nav-stacked">
    private static function _NavigationHeaderDOMSrc($header)
    {
        $dom = new DOMTagger('h5', $header);
        $dom->AddAttribute('class', 'sidebar-header');
        return $dom->DOMSrc();
    }

    private static function _MainDropDownMenuDOMSrc(MenuNavigator $menuNavigator)
    {
        $dom = new DOMTagger('nav',
            MenuNavigatorBuilder::_NavigationHeaderDOMSrc($menuNavigator->Header()) .
            MenuNavigatorBuilder::_SubMenuHeaderDOMSrc($menuNavigator->MainMenuItem()));
        return $dom->DOMSrc();
    }

    private static function _PageWrapperDOMSrc($content) {
        $dom  = new DOMTagger('div', $content);
        $dom->AddAttribute('class', 'page-wrapper');
        return $dom->DomSrc();
    }

    private static function _SideBarDOMSrc(MenuNavigator $menuNavigator) {
        $dom  = new DOMTagger('aside',
            MenuNavigatorBuilder::BuildMenuNavigatorDOMSrc($menuNavigator));
        $dom->AddAttribute('class', 'sidebar sidebar-default');
        return $dom->DomSrc();
    }

    // <body class="">
    //<div class="page-wrapper">
    //<aside class="sidebar sidebar-default">
    private static function _ViewNavigatorMenuHtmlSrc(MenuNavigator $menuNavigator)
    {
        $html  = new DOMTagger('body',
            MenuNavigatorBuilder::_PageWrapperDOMSrc(MenuNavigatorBuilder::_SideBarDOMSrc(
                $menuNavigator
            ))
        );

        $html->AddAttribute('class');
        return $html->DomSrc();
    }

}

//     <nav>
//         <h5 class="sidebar-header">Navigation</h5>
//         <ul class="nav nav-pills nav-stacked">
//           <li class="nav-dropdown">
//             <a href="#" title="Menu Levels">Menu Levels</a>
//             <ul class="nav-sub">
//               <li>
//                 <a href="javascript:;" title="Level 2.1">Level 2.1</a>
//               </li>
//               <li>
//                 <a href="javascript:;" title="Level 2.2">Level 2.2</a>
//               </li>
//               <li class="nav-dropdown">
//                 <a href="#" title="Level 2.3">Level 2.3
//                 <span class="pull-right badge badge-info">More</span></a>
//                 <ul class="nav-sub">
//                   <li>
//                     <a href="javascript:;" title="Level 3.1">Level 3.1</a>
//                   </li>
//                   <li class="nav-dropdown">
//                     <a href="#" title="Level 3.2">Level 3.2</a>
//                     <ul class="nav-sub">
//                       <li>
//                         <a href="javascript:;" title="Level 4.1">Level 4.1</a>
//                       </li>
//                       <li class="nav-dropdown">
//                         <a href="#" title="Level 4.2">Level 4.2</a>
//                         <ul class="nav-sub">
//                           <li class="nav-dropdown">
//                             <a href="#" title="Level 5.1">Level 5.1</a>
//                             <ul class="nav-sub">
//                               <li>
//                                 <a href="javascript:;" title="Level 6.1">Level 6.1</a>
//                               </li>
//                               <li>
//                                 <a href="javascript:;" title="Level 6.2">Level 6.2</a>
//                               </li>
//                             </ul>
//                           </li>
//                           <li>
//                             <a href="javascript:;" title="Level 5.2">Level 5.2</a>
//                           </li>
//                           <li>
//                             <a href="javascript:;" title="Level 5.3">Level 5.3</a>
//                           </li>
//                         </ul>
//                       </li>
//                       <li>
//                         <a href="javascript:;" title="Level 4.3">Level 4.3</a>
//                       </li>
//                     </ul>
//                   </li>
//                   <li class="nav-dropdown">
//                     <a href="#" title="Level 3.3">Level 3.3</a>
//                     <ul class="nav-sub">
//                       <li>
//                         <a href="javascript:;" title="Level 4.1">Level 4.1</a>
//                       </li>
//                     </ul>
//                   </li>
//                 </ul>
//               </li>
//             </ul>
//           </li>
//         </ul>
//       </nav>
