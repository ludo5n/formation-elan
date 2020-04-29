<?php
    require "Movable.php";

    final class Hero extends Character implements Movable{

        private $level;
        private $hp;
        private $exp;

        private static $expRates = [0, 12, 30, 50, 82];

        public function __construct($nom, $race, $sexe){
            parent::__construct($nom, $race, $sexe);
            $this->level = self::START_LEVEL;
            $this->hp = 20;
            $this->exp = 0;
        }

        public function move($direction){

        }

        public function increaseExp($amount){  
            $index = $this->level;

            $this->exp+= $amount;
            
            if($this->exp >= self::$expRates[$index]){
                $this->nextLevel();
                $this->increaseExp(0);
            }
            else return;
        }

        public function getExpToNextLevel(){
            return self::$expRates[$this->level+1] - $this->exp;
        }
 
        public function getLevel(){
            return $this->level;
        }

        public function setLevel($level){
            $this->level = $level;

            return $this;
        }
 
        public function getMana(){
            return $this->mana;
        }
 
        public function setMana($mana){
            $this->mana = $mana;

            return $this;
        }

        public function getHp(){
            return $this->hp;
        }

        public function setHp($hp){
            $this->hp = $hp;

            return $this;
        }

        public function getExp(){
            return $this->exp;
        }

        public function setExp($exp){
            $this->exp = $exp;

            return $this;
        }

        private function nextLevel(){
            $this->level++;
        }
    }