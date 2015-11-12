<?php

class SV_BotThreadView_Listener
{
    const AddonNameSpace = 'SV_BotThreadView_';

    public static function load_class($class, array &$extend)
    {
        $extend[] = self::AddonNameSpace.$class;
    }
}