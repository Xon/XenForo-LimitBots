<?php

class SV_BotThreadView_GFNClassifieds_Model_Classified extends XFCP_SV_BotThreadView_GFNClassifieds_Model_Classified
{
    public function logClassifiedView($classifiedId)
    {
        if (!SV_BotThreadView_Application::isBot())
        {
            parent::logClassifiedView($classifiedId);
        }
    }
}
