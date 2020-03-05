<?php

/**
 * Class ProBudget
 *
 */
class ProBudget extends Budget
{

    public function spendMoney($count){
        if(self::$bank + $this->collection  < $count)
            return "No Money";
        $k = self::$bank - $count;
        if($k< 0) {    self::$bank = 0;
            $this->collection -= $k;
        }
        else if($k - $this->collection < 100){
            $this->addDept($k - $this->collection);
        }
    }

    public function addDept($count){
        static::$bank -= $count;
    }


}

