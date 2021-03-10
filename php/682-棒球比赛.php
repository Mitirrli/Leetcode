<?php

class Solution {
    /**
     * @param String[] $ops
     * @return Integer
     */
    function calPoints($ops)
    {
        //构建一个堆栈
        $stack = [];

        foreach ($ops as $key => $value) {
            if ($value === 'C') {
                //移除前一次的记录
                array_pop($stack);
            } elseif ($value === 'D') {
                //本回合新获得的得分是前一次得分的两倍
                array_push($stack, end($stack) * 2);
            } elseif ($value === '+') {
                //本回合新获得的得分是前两次得分的总和
                $score1 = array_pop($stack);
                $score2 = array_pop($stack);

                array_push($stack, $score2, $score1, $score1 + $score2);
            } else {
                array_push($stack, $value);
            }
        }

        return array_sum($stack);
    }
}