<?php

class SV_BotThreadView_XenForo_Model_Thread extends XFCP_SV_BotThreadView_XenForo_Model_Thread
{
    public function logThreadView($threadid)
    {
        if (!SV_BotThreadView_Application::isBot())
        {
            parent::logThreadView($threadid);
        }
    }
}