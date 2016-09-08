<?php

class SV_BotThreadView_XenForo_Session extends XFCP_SV_BotThreadView_XenForo_Session
{
    public function saveSessionToSource($sessionId, $isUpdate)
    {
        // do not save robot sessions to the backstore
        if (!empty($this->_session['robotId']))
        {
            return;
        }
        parent::saveSessionToSource($sessionId, $isUpdate);
    }
}