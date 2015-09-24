<?php

//* MenuItem ISA Component
//  + menuType
//    * NAVIGATOR
//    * SITE
//    * LABEL
//  + isNavigatorMenu(): return false
//  + isSiteMenu(): return false
//  + isLabelMenu(): return false

//               <li>
//                 <a href="javascript:;" title="Level 2.1">Level 2.1</a>
//               </li>
require_once '../components/Component.php';
require_once '../components/DomSourceGenerator.php';
require_once '../components/MenuNavigatorBuilder.php';


class MenuItem extends Component implements DomSourceGenerator
{
    const C_DROPPED_DOWN_URL = '#';
    const C_DEF_URL = 'javascript:;';

    protected $cTitle;
    protected $cSourceUrl;

    protected $cIsDroppedDown;

    protected $cIsFileIcon;
    protected $cIsFolderOpenIcon;
    protected $cIsFolderOpenMainIcon;

    protected $cIconType;

    function __construct($title = 'MenuItem', $source = MenuItem::C_DEF_URL)
    {
        parent::__construct();

        // <a href="javascript:;" title="A Menu Item">A Menu Item</a>
        $this->cTitle = $title;
        $this->cSourceUrl = $source;

        $this->cIsDroppedDown = false;

        $this->cIsFileIcon = false;
        $this->cIsFolderIcon = false;
        $this->cIsFolderIconMain = false;
    }

    // A Dropdown or Navigator
    //                   <li class="nav-dropdown"> <= DOMTagger
    //                     <a href="#" title="Level 3.3">Level 3.3</a>  <= DOMTagger
    //                     <ul class="nav-sub">
    //                       <li>
    //                         <a href="javascript:;" title="Level 4.1">Level 4.1</a>
    //                       </li>
    //                     </ul>
    //                   </li>

    public function DomSrc()
    {
        if ($this->IsDroppedDown())
            return MenuNavigatorBuilder::DropDownMenuItemDOMSrc($this);
        else
            return MenuNavigatorBuilder::StaticMenuItemDOMSrc($this);
    }

    public function IsDroppedDown()
    {
        return $this->cIsDroppedDown;
    }

    public function IsFolderOpenIcon()
    {
        return $this->cIsFolderOpenIcon;
    }

    public function IsFolderOpenMainIcon()
    {
        return $this->cIsFolderOpenMainIcon;
    }

    public function IconType($classAttributeValue)
    {
        $this->cIconType = $classAttributeValue;
        $this->cIsFileIcon = false;
        $this->cIsFolderOpenIcon = false;
        $this->cIsFolderOpenMainIcon = false;
    }

    public function UserDefinedIconType() {
        return  $this->cIconType;
    }

    public function IsFileIcon()
    {
        return $this->cIsFileIcon;
    }

    public function DroppedDown()
    {
        if (!$this->cIsDroppedDown)
            $this->cIsDroppedDown = !$this->cIsDroppedDown;
        if ($this->SourceURL() != MenuItem::C_DROPPED_DOWN_URL)
            $this->cSourceUrl = MenuItem::C_DROPPED_DOWN_URL;
    }

    public function FolderOpenIcon()
    {
        if (!$this->cIsFolderOpenIcon)
            $this->cIsFolderOpenIcon = !$this->cIsFolderOpenIcon;
    }

    public function FolderOpenMainIcon()
    {
        if (!$this->cIsFolderOpenMainIcon)
            $this->cIsFolderOpenMainIcon = !$this->cIsFolderOpenMainIcon;
    }

    public function FileIcon()
    {
        if (!$this->cIsFileIcon)
            $this->cIsFileIcon = !$this->cIsFileIcon;
    }
    // DroppedDown Types Icon
    // <i class="fa fa-fw fa-folder-open"></i>
    // <i class="fa fa-fw fa-file"></i>

    public function AddSubMenu(MenuItem $menu)
    {
        if ($this->IsDroppedDown())
            return $this->AddComponent($menu);
        return false;
    }

    public function Title()
    {
        return $this->cTitle;
    }

    public function SourceURL()
    {
        return $this->cSourceUrl;
    }
}