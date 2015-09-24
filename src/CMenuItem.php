<?php

/**
 * @filename CNavMenuAssetsConfig.php - Configuration object
 * @desc     Singleton class for the navigator menu
 * @author   Cyrus G. Gabilla <cgabilla@gmail.com>
 * @version  September, 18, 2015 - The date written or the file version
 */

class CMenuItem {

  protected $cLabel;
  protected $cDescription;

  protected $cBaseUrl;

  function __construct ($assetsDirName, $baseUrl) {
    $this->cAssetsDirName = $assetsDirName;
    $this->cBaseUrl = $baseUrl;
  }

  function clone($assetsDirName, $baseUrl) {
    $theClone = new static ($assetsDirName, $baseUrl);
    return $theClone;
  }

  public function AssetsUrl() { return $this->cBaseUrl . $this->cAssetsDirName . '/'; }
  public static function AssetsDirName() { return $this->cAssetsDirName; }

}

/* End of file CMenuItem.php */
/* Location: ./application/helpers/CMenuItem.php */
