<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        // 数组反向
        $arr_reverse = array_reverse($digits);

        $carry = 1; //是否需要进位
        $result = '';
        while (1) {
            if (!empty($arr_reverse) || $carry != 0) {
                //弹出第一个元素
                $first = array_shift($arr_reverse) ?? 0;

                //计算两数和
                $sum = $first + $carry;

                $carry = $sum >= 10 ? 1 : 0;

                //取最后面的数字
                $result .= substr($sum, -1);
            } else {
                break;
            }
        }

        return array_reverse(str_split($result));
    }
}