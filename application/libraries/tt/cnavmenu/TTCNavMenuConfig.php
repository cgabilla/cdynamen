<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @filename TTNavMenuConfig.php - The name of the helper class should be similar with the class name.
 * @desc     Helper for the system configuration.
 * @author   Cyrus G. Gabilla <cgabilla@gmail.com>
 * @version  September, 18, 2015 - The date written or the file version.
 */

// The class name starts with the developer id, TT, and followed the studly style convention.
class TTCNavMenuConfig {
    const TT_ASSETS_DEF_NAME = 'tt_assets';

    protected $cAltAssetsDirName;
    protected static $cNavMenuConfigInstance;

    // public functions interface
    function __construct($assetsDirName = null) {
        $this->cAltAssetsDirName = $assetsDirName;
    }
    /**
     * @desc    Uses a studly style naming convention.
     * @return  The directory location of the assets.
     */
    public function AssetsUrl() {
        return (base_url().self::TT_ASSETS_DEF_NAME.'/');
    }

    public function AssetsAltDirName() {
        return !isset($this->cAltAssetsDirName) ? TTCNavMenuConfig::AssetsDefDirName() : $this->cAltAssetsDirName;
    }

    // static functions interface
    public static function AssetsDefDirName() {
        return self::TT_ASSETS_DEF_NAME;
    }

    public static function Instance() {
        if (!isset(self::$cNavMenuConfigInstance))
            self::$cNavMenuConfigInstance = new TTCNavMenuConfig(TTCNavMenuConfig::AssetsDefDirName());
        return self::$cNavMenuConfigInstance;
    }
}

/* End of file TTCNavMenuConfig.php */
/* Location: ./application/libraries/TTCNavMenuConfig.php */
