<?php

namespace Weissheiten\Neos\FacebookGraphSDK\Tests\Unit;

use Neos\Flow\Tests\UnitTestCase;
use Weissheiten\Neos\FacebookGraphSDK;

class FacebookGraphSDKInitializationTest extends UnitTestCase{

    /**
     * @test
     */
    public function FacebookGraphSDKObjectInitializationIsPossibleWithCurrentConfig(){
        $fbg = new FacebookGraphSDK\FacebookGraphSDK();
        $fbg->initializeObject();
        $fbg->getFb()->getDefaultAccessToken();
    }
}
