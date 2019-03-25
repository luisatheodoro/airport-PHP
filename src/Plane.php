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

    public function takeOff($airport) {
        if(!$this->landed || $this->isLandedAt['0']->name !== $airport->name) {
            throw new Exception('Cannot take off, because plane has already taken off or is not in this airport');
        }elseif ($this->isLandedAt['0']->name === $airport->name && $airport->canTakeOff($this->name)) {
            unset($this->isLandedAt);
            $this->landed = false;
        }
    }
}
