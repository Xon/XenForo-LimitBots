<?php

class SV_BotThreadView_Listener
{
    const AddonNameSpace = 'SV_BotThreadView';

    public static function load_class($class, array &$extend)
    {
        $extend[] = self::AddonNameSpace.'_'.$class;
    }
}