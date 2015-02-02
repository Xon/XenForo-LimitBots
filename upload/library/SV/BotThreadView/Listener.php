<?php

class SV_BotThreadView_Listener
{
    const AddonNameSpace = 'SV_BotThreadView';

    public static function load_class($class, array &$extend)
    {
        switch($class)
        {
            case 'Tinhte_XenTag_Model_Tag':
            case 'XenForo_Model_Thread':
                $extend[] = self::AddonNameSpace.'_'.$class;
                break;
        }
    }
}