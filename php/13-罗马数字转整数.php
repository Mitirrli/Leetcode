<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $arr = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
        $a = str_split($s);

        $sum = 0;
        $temp = 0; //记录上一个值
        
        foreach ($a as $value) {
            if ($temp && $arr[$value] > $temp) {
                $sum += $arr[$value] - $temp * 2; //把上次多加的减掉
            } else {
                $sum += $arr[$value];
            }
            $temp = $arr[$value];
        }
        return $sum;
    }
}