<?php

namespace App\Utils;

class Utils
{
    function trainbool($bool)
    {
        if ($bool == 1) {
            return 'Si';
        } else {
            return 'No';
        }
    }
}
