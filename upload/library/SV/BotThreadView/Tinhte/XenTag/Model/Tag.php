<?php

class SV_BotThreadView_Tinhte_XenTag_Model_Tag extends XFCP_SV_BotThreadView_Tinhte_XenTag_Model_Tag
{
    public function logTagView($tagView)
    {
        if (XenForo_Application::isRegistered('session'))
        {
            $session = XenForo_Application::getSession();
            if($session && $session->get('robotId'))
            {   // do not log robot session views!
                return;
            }
        }

        parent::logTagView($tagView);
    }
}