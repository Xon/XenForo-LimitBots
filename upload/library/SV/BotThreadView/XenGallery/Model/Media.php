<?php

class SV_BotThreadView_XenGallery_Model_Media extends XFCP_SV_BotThreadView_XenGallery_Model_Media
{
    public function logMediaView($mediaId)
    {
        if (!SV_BotThreadView_Application::isBot())
        {
            parent::logMediaView($mediaId);
        }
    }
}