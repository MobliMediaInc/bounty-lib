<?php

namespace BountyLib;


class Version
{
    const version = '0.1.2';


    static public function getVersion()
    {
        return self::version;
    }
}