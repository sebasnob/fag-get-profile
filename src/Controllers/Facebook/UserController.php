<?php

namespace App\Controllers\Facebook;

use Facebook;

/**
 * Description of UserController
 *
 * @author sebastian maldoni
 */
class UserController {
    
    protected $user;
    protected $app;
    
    public function __construct($app) {
        //parent::__construct();
        $this->app = $app;
        
        $facebook = new Facebook\Facebook([
            'app_id' => $this->app->settings['facebook']['app_id'],
            'app_secret' => $this->app->settings['facebook']['app_secret'],
            'default_graph_version' => $this->app->settings['facebook']['default_graph_version'],
            'default_access_token' => $this->app->settings['facebook']['default_access_token']
        ]);
        
        $this->facebook = $facebook;
    }
    
    /**
     * 
     * @param int $user
     * @return json
     */

    public function getProfile($user)
    {
        $this->user = $user;
        
        try
        {
            $search = sprintf('%s?fields=id,first_name,last_name', $this->user);
            $data = $this->facebook->get($search);
            
            return $data->getGraphUser();
            
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            return json_encode($e->getMessage());
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            return json_encode($e->getMessage());
        }
    }
}
