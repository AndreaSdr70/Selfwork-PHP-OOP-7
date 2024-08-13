<?php
class IronmanArmy {
    private $ironmen = [];
    private $count = 0;

    public function addIronman(Ironman $ironman) {
        $this->ironmen[] = $ironman;
        $this->count++;
    }

    public function getIronmanCount() {
        return $this->count;
    }

    public function getIronmen() {
        return $this->ironmen;
    }
}
?>
