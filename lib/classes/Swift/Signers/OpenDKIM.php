<?php

class Swift_Signers_OpenDKIM
{
    const OPTS_FIXEDTIME = 1;

    static function setOption($a, $b)
    {
        return $a + $b;
    }
}
