<?php
require 'Airport.php';
class Plane {

    public function __construct($name) {
        $this->name = $name;
        $this->isLandedAt = [];
        $this->landed = false;
    }

    public function land($airport) {
        if ($this->landed) {
            throw new Exception('Cannot land, because plane is already landed');
        }elseif ($airport->canLand($this->name)){
            $this->isLandedAt[] = $airport;
            $this->landed = true;
        }
    }
}
