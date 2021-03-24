<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $carry = 1; //进位
        $result = []; //结果数组
        while (!is_null($last = array_pop($digits)) || $carry == 1) {
            $temp = ($last ?? 0) + $carry;

            $carry = (int) $temp == 10;
            array_unshift($result, $temp % 10);
        }

        return $result;
    }
}