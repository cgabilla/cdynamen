<?php

// * Component implements a Builder
//   + label
//   + description
//   + add(Component)

class Component {
    protected $cNoComponents;
    protected $cComponents;

    function __construct() {
        $this->cNoComponents = 0;
        $this->cComponents = array();
    }

    public function AddComponent(MenuItem $aComponent) {
        if (isset($aComponent)) {
            $this->cComponents[$this->cNoComponents++] = $aComponent;
            return true;
        } else
            return false;
    }

    public function AddComponentDynamic(MenuItem $aComponent) {
        if (isset($aComponent)) {
            $this->cComponents[$aComponent->Title()] = $aComponent;
            $this->cNoComponents++;
            return true;
        } else
            return false;
    }

    public function RemoveComponentDynamic(MenuItem $aComponent)
    {
        if (isset($aComponent)) {
            if (isset($this->cComponents[$aComponent->Title()])) {
                $this->cComponents[$aComponent->Title()] = null;
                $this->cNoComponents--;
                return true;
            } else
                return false;
        }
        return false;
    }

    public function Components() {
        return $this->cComponents;
    }

    public function NoComponentsDynamic() {
        return count($this->cComponents);
    }

    public function NoComponents() {
        return $this->cNoComponents;
    }

}