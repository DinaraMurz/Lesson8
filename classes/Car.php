<?php


class Car
{
    //static $road;
    public $x;
    public $y;

    /**
     * Car constructor.
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }


    public function moveForward(Car $car): bool {
        if(canMove($car)){

        }
    }
    public function turnLeft(Car $car): bool {

    }
    public function turnRigth(Car $car): bool {

    }

    private function canMove(Car $car): bool{

    }
}