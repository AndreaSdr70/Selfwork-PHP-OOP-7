<?php
class Ironman {
    private $name;
    private $armor;

    public function __construct($name, IronmanArmor $armor) {
        $this->name = $name;
        $this->armor = $armor;
    }

    public function getName() {
        return $this->name;
    }

    public function getArmor() {
        return $this->armor;
    }
}
?>