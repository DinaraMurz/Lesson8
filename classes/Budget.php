<?php


class Budget
{
    static $bank = 0;
    public $collection;

    public function __construct()
    {

    }


    public  function addMoney($count){
        self::$bank += $count;
        return $this;
    }

    public function spendMoney($count){
        if(self::$bank + $this->collection  < $count)
            return "No Money";
        $k = static::$bank - $count;
        if($k< 0) {
            self::$bank = 0;
            $this->collection -= $k;
            }
        return $this;
    }
    public function collectMoney($count){
        if(self::$bank  < $count)
            return "No Money";
        self::$bank -= $count;
        $this->collection += $count;
        return $this;

    }
}