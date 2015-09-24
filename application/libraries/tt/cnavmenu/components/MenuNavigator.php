<?php

/**
 * User: Cyrus G. Gabilla
 * Date: 9/24/2015
 * Time: 2:12 AM
 */
require_once '../components/DomSourceGenerator.php';

class MenuNavigator implements DomSourceGenerator
{
    const C_DEF_FILE_NAME = 'cnavmenu';
    const C_XML_EXT = '.xml';
    const C_HTML_EXT = '.html';

    const C_NO_PARENT = 'C_MAIN';

    protected $cHeader;
    protected $cMainMenuItem;
    protected $cFileName;

    protected $cDynamicMenu;

    function __construct($header, $fileName = MenuNavigator::C_DEF_FILE_NAME)
    {
        $this->cHeader = $header;
        $this->cMainMenuItem = null;
        $this->cFileName = $fileName;
        $this->cDynamicMenu = array();
    }

    public function AttachMainMenuItem($mainMenuItem)
    {
        $this->cMainMenuItem = isset($mainMenuItem) ? $mainMenuItem : new MenuItem();
    }

    public function AttachMainMenuItemDynamic(MenuItem $mainMenuItem)
    {
        $this->AttachMenuItem($mainMenuItem);
    }

    public function Header()
    {
        return $this->cHeader;
    }

    public function MainMenuItem()
    {
        return $this->cMainMenuItem;
    }

    public function Xml()
    {
        file_put_contents($this->cFileName . MenuNavigator::C_XML_EXT,
            $this->formatXmlString($this->DomSrc()));
    }

    public function Html()
    {
        file_put_contents($this->cFileName . MenuNavigator::C_HTML_EXT,
            $this->formatXmlString($this->HtmlSrc()));
    }

    public function DomSrc()
    {
        return MenuNavigatorBuilder::BuildMenuNavigatorDOMSrc($this);
    }

    public function HtmlSrc()
    {
        return MenuNavigatorBuilder::BuildMenuNavigatorHtmlSrc($this);
    }

    public function AttachMenuItem(MenuItem $subMenuItem, MenuItem $parentMenuItem = null)
    {

        if (!isset($parentMenuItem))
            $this->AttachMainMenuItem($parentMenuItem);

        $parentMenuItem->AddSubMenu($subMenuItem);
        // TODO
//        if (isset($parentMenuItem))
//            $this->cMainMenuItem[$parentMenuItem->Title()][$subMenuItem->Title()] = $subMenuItem;
//        else
//            $this->cMainMenuItem[MenuNavigator::C_NO_PARENT][$subMenuItem->Title()] = $subMenuItem;
    }

    /**
     * @ref http://stackoverflow.com/questions/3616540/format-xml-string
     * @author http://stackoverflow.com/users/394527/pravat231
     * @param $xml
     * @return string
     */
    private function formatXmlString($xml)
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
}