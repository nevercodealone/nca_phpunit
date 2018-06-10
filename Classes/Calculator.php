<?php
namespace Eh\EhPhpunit;


class Calculator
{
    public function add() {
        $sum = 0;
        foreach (func_get_args() as $arg) {
            $sum += $arg;
        }

        return $sum;
    }

    public function multiply($a,$b){
        return $a*$b;
    }

    public function sub($a,$b,$c) {
        return $a-$b-$c;
    }

}