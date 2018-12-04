<?php

class SV_BotThreadView_Application
{
    public static function isBot()
    {
        if (!XenForo_Application::isRegistered('session'))
        {
            return true;
        }

        $session = XenForo_Application::getSession();
        if ($session->get('robotId'))
        {
            return true;
        }

        $visitor = XenForo_Visitor::getInstance()->toArray();
        if ($visitor['is_banned'])
        {
            return true;
        }

        $options = XenForo_Application::getOptions();

        if (!empty($options->svCountGuestViews) && empty($visitor['user_id']))
        {
            return false;
        }
        else if (!empty($options->svZeroPostUsersAsBots))
        {
            if (!$visitor['message_count'] || !$visitor['like_count'])
            {
                return true;
            }
        }

        return false;
    }
}