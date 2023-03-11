<?php

class Courier
{
    public $name;
    public $home_country;
    public function __construct($name) {
        $this->name = $name;
    }
    public function ship($parcel = null) {

        if(isset($parcel)){
            $this->home_country = $parcel;
            return true;
        }else {
            $this->home_country = "Nie podanu adresu";
            return false;
        }
    }
}