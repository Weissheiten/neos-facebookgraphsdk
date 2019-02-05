<?php

namespace Weissheiten\Neos\FacebookGraphSDK;

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Log\SystemLoggerInterface;
use Facebook\Facebook;

/**
 * @Flow\Scope("singleton")
 */
class FacebookGraphSDK{

    /* @var Facebook $fb */
    var $fb;

    /**
     * @Flow\Inject
     * @var SystemLoggerInterface
     */
    protected $systemLogger;


    /**
     * @Flow\InjectConfiguration(path="Weissheiten.Neos.FacebookGraphSDK")
     * @var array
     */
    protected $settings;


    /***
     * @return Facebook Facebook API object for requests
     */
    public function getFb() : Facebook
    {
        return $this->fb;
    }

    /**
     */
    public function initializeObject() {
       try{
            $this->fb = new Facebook($this->settings);
       }
       catch(\Facebook\Exceptions\FacebookSDKException $fbe){
           $this->systemLogger->log(
               "Error while initializing FacebookGraphSDK: ".$fbe->getMessage(),
               LOG_ERR,
               null,
               'Weissheiten.Neos.FacebookGraphSDK',
               'FacebookGraphSDK',
               'initializeObject'
           );
       }
    }




}