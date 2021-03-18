<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $min = min(array_map('strlen', $strs)); //计算长度为最短的长度
        $prefix = substr($strs[0], 0, $min);

        array_shift($strs); //去掉第一个元素
        foreach ($strs as $value) {
            $prefix = $this->checkInclude($value, $prefix);
        }

        return $prefix;
    }

    function checkInclude($value, $str)
    {
        return strpos($value, $str) === 0 ? $str : $this->checkInclude($value, substr($str, 0, -1));
    }
}