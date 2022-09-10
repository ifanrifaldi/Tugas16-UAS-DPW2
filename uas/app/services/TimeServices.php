<?php

namespace App\Services;

class TimeServices {
    public function showTimeNow(){
        return date("H:i");
    }
}