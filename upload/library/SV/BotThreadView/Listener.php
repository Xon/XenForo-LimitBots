<?php

class SV_BotThreadView_Listener
{
    public static function load_class($class, array &$extend)
    {
        $extend[] = 'SV_BotThreadView_'.$class;
    }
}