<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'libraries/tt/cnavmenu/TTCNavMenuConfig.php');

class TTCNavMenuBuilder {

    protected $cNavMenuConfig;

    function __construct($cAssetsDirName) {
        $this->cNavMenuConfig = new TTCNavMenuConfig($cAssetsDirName);
    }

    public function Config() {
        return (!isset($this->cAssetsDirName)) ? new TTCNavMenuConfig(TTCNavMenuConfig::AssetsDefDirName()) : $this->cNavMenuConfig;
    }
}

/* End of file TTCNavMenuBuilder.php */
/* Location: ./application/controllers/TTCNavMenuBuilder.php */
