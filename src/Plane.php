<?php

class Plane {

    public function __construct($name) {
        $this->name = $name;
        $this->isLandedAt = [];
        $this->landed = false;
    }


}