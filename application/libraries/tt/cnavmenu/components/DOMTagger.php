<?php

// * DOMTagger
//   Example:  <img src="image.jpg"></img>

// A Simple specific for the NavMenu DOM builder/tagger
require_once '../components/DomSourceGenerator.php';

class DOMTagger implements DomSourceGenerator
{
    const C_STR_INIT = '';
    const C_SPACER = ' ';

    protected $cNameTag;
    protected $cContent;

    protected $cAttributes;
    protected $cValues;

    protected $cNoAttributes;

    function __construct($nameTag = 'DOMTagger', $content = DOMTagger::C_SPACER)
    {
        $this->cNameTag = $nameTag;
        $this->cContent = $content;

        $this->cAttribs = array();
        $this->cValues = array();

        $this->cNoAttributes = 0;
    }

    public function SetContent($content = self::C_STR_INIT)
    {
        $this->cContent = $content;
    }

    public function AddAttribute($attribute, $value = self::C_STR_INIT)
    {
        if (!isset($attribute))
            return null;
        $this->cAttributes[$this->cNoAttributes] = $attribute;
        $this->cValues[$this->cNoAttributes++] = $value;
    }

    public function DomSrc()
    {
        $src = $this->_StartOpen() . $this->cNameTag;

        if ($this->cNoAttributes > 0)
            $src .= self::C_SPACER;

        $idx = 0;
        for (; $idx < $this->cNoAttributes; $idx++) {
            $src .= $this->cAttributes[$idx] . '="' . $this->cValues[$idx] . '"';
            if (($idx + 1) < $this->cNoAttributes)
                $src .= self::C_SPACER;
        }
        $src .= $this->_Close() . $this->cContent . $this->_CompleteClose();

        return $src;
    }

    // helpers
    private function _StartOpen()
    {
        return '<';
    }

    private function _EndOpen()
    {
        return '</';
    }

    private function _Close()
    {
        return '>';
    }

    private function _CompleteClose()
    {
        $src = $this->_EndOpen() . $this->cNameTag . $this->_Close();
        return $src;
    }
}

/**
 * Usage:
 *
 * To generate <img src="hello.html"></img>,
 *
 * $imgTag = new DOMTagger('img');
 * $imgTag.AddTag('src', 'hello.html');
 * echo $imgTag.DOMSrc();
 *
 */
