<?php
namespace Nisl\Logo\Block;

class Display extends \Magento\Framework\View\Element\Template{

	protected $_scopeConfig;

	 /**
     * @var \Magento\MediaStorage\Helper\File\Storage\Database
     */
    protected $_fileStorageHelper;

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
		\Magento\MediaStorage\Helper\File\Storage\Database $fileStorageHelper,
		array $data = []
	) {
			$this->_fileStorageHelper = $fileStorageHelper;
			parent::__construct($context, $data);
			$this->_scopeConfig = $scopeConfig;
	}

	public function getGeneralConfig(){		
		$getgeneralconfig = $this->_scopeConfig->getValue('logo/general/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
		return $getgeneralconfig;
	}

    public function getLogoAlt(){     
        $getgeneralalt = $this->_scopeConfig->getValue('logo/general/footer_logo_alt', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $getgeneralalt;
    }

    public function getLogoWidth(){     
        $getgeneralwidth = $this->_scopeConfig->getValue('logo/general/footer_logo_width', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $getgeneralwidth;
    }

    public function getLogoHeight(){     
        $getgeneralconfig = $this->_scopeConfig->getValue('logo/general/footer_logo_height', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $getgeneralconfig;
    }

	public function getLogoConfig(){
		$getlogoconfig = $this->_getLogoUrl();
		return $getlogoconfig;
	}

	/**
     * Retrieve logo image URL
     *
     * @return string
     */
    protected function _getLogoUrl()
    {    	
        $folderName = \Magento\Config\Model\Config\Backend\Image\Logo::UPLOAD_DIR;
        
        $storeLogoPath = $this->_scopeConfig->getValue(
            'logo/general/footer_logo_src',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        $path = $folderName . '/' . $storeLogoPath;

        $logoUrl = $this->_urlBuilder
                ->getBaseUrl(['_type' => \Magento\Framework\UrlInterface::URL_TYPE_MEDIA]) . $path;

        if ($storeLogoPath !== null && $this->_isFile($path)) {
            $url = $logoUrl;
        } elseif ($this->getLogoFile()) {
            $url = $this->getViewFileUrl($this->getLogoFile());
        } else {
            $url = $this->getViewFileUrl('images/logo.svg');
        }
        return $url;
    }

    /**
     * If DB file storage is on - find there, otherwise - just file_exists
     *
     * @param string $filename relative path
     * @return bool
     */
    protected function _isFile($filename)
    {
        if ($this->_fileStorageHelper->checkDbUsage() && !$this->getMediaDirectory()->isFile($filename)) {
            $this->_fileStorageHelper->saveFileToFilesystem($filename);
        }

        return $this->getMediaDirectory()->isFile($filename);
    }
}
?>


