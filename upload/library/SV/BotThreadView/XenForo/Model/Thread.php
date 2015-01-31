<?php

class SV_BotThreadView_XenForo_Model_Thread extends XFCP_SV_BotThreadView_XenForo_Model_Thread
{
    public function logThreadView($threadid)
    {
        if (XenForo_Application::isRegistered('session'))
        {
            $session = XenForo_Application::getSession();
            if($session && $session->get('robotId'))
            {   // do not log robot session views!
                return;
            }
        }
        
        parent::logThreadView($threadid);
    }
}