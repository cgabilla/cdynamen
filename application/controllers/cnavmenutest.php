<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'libraries/tt/cnavmenu/TTCNavMenuBuilder.php');

class CNavMenuTest extends CI_Controller {

    private $cNavMenuBuilder;

    function __construct() {
        parent::__construct();
        $this->cNavMenuBuilder = new TTCNavMenuBuilder(TTCNavMenuConfig::AssetsDefDirName());
    }

    public function index() {
        // $this->whole();
        $this->generated();
    }

    // a complete html document in a  file
    // STATUS: working Javascript code
    public function whole() {
		$this->load->view('cnavmenu_whole_ttv', $this->_Config());
    }

    public function generated() {
        $this->load->view('cnavmenu_generated_ttv', $this->_Config());
    }

    // header, footer, and main as a separate php file, and group using the include function
    // STATUS: not working Javascript code
    public function partition() {
		$this->load->view('cnavmenu_partition_ttv');
    }

    // header, footer, and main as a separate view file
    // STATUS: not working Javascript code
    public function mono() {
		$this->load->view('tt_tpl/header', $this->_Config());
		$this->load->view('cnavmenu_mono_ttv');
		$this->load->view('tt_tpl/footer', $this->_Config());
    }

    /**
     * a class helper function in CamelCase prepended with `_` and always be declared private
     *
     * @return $data['ttcConfig'] The navigation menu builder configuration singleton class.
     */
    private function _Config() {
        $data['ttcConfig'] = $this->cNavMenuBuilder->Config();
        return $data;
    }
}

/* End of file CNavMenuTest.php */
/* Location: ./application/controllers/CNavMenuTest.php */
