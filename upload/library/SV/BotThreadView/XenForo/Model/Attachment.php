<?php

class SV_BotThreadView_XenForo_Model_Attachment extends XFCP_SV_BotThreadView_XenForo_Model_Attachment
{
    public function logAttachmentView($attachmentId)
    {
        if (!SV_BotThreadView_Application::isBot())
        {
            parent::logAttachmentView($attachmentId);
        }
    }
}