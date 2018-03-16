<?php

namespace App\Controllers\Facebook;

use \Facebook\Facebook;

/**
 * Description of FacebookController
 *
 * @author sebastian maldoni
 */
class FacebookController {
    
    protected $facebook;
    protected $app;

    public function __construct()
    {
        $facebook = new Facebook\Facebook([
            'app_id' => $settings['app_id'],
            'app_secret' => $settings['app_secret'],
            'default_graph_version' => $settings['default_graph_version'],
        ]);
        
        $this->facebook = $facebook;
    }
}
