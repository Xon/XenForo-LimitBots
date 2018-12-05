<?php

class SV_BotThreadView_XenForo_ControllerPublic_Forum extends XFCP_SV_BotThreadView_XenForo_ControllerPublic_Forum
{
    protected function _getDisplayConditions(array $forum)
    {
        if (SV_BotThreadView_Application::isBot(false))
        {
            list($defaultOrder, $defaultOrderDirection) = $this->_getDefaultThreadSort($forum);

            $order = $this->_input->filterSingle('order', XenForo_Input::STRING, array('default' => $defaultOrder));
            $orderDirection = $this->_input->filterSingle('direction', XenForo_Input::STRING, array('default' => $defaultOrderDirection));
            if ($defaultOrder != $order || $orderDirection != $defaultOrderDirection)
            {
                throw $this->getNoPermissionResponseException();
            }
        }
        return parent::_getDisplayConditions($forum);
    }
}