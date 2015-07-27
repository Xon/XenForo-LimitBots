<?php

class SV_BotThreadView_Tinhte_XenTag_Model_Tag extends XFCP_SV_BotThreadView_Tinhte_XenTag_Model_Tag
{
    public function logTagView($tagView)
    {
        if (!SV_BotThreadView_Application::isBot())
        {
            parent::logTagView($tagView);
        }
    }
}