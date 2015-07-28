<?php

class SV_BotThreadView_Application
{
	public static function isBot()
	{
		if (!XenForo_Application::isRegistered('session'))
		{
			return false;
		}

		$session = XenForo_Application::getSession();
		return ($session->get('robotId'));
	}
}