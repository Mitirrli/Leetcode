<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $len = array_map('strlen', $strs);
        $min = min($len); //计算长度为最短的长度
    
        $prefix = substr($strs[0], 0, $min);
        array_shift($strs); //去掉第一个元素
    
        foreach ($strs as $value) {
            $prefix = $this->checkInclude($value, $prefix);
        }
    
    
        return $prefix;
    }
    
    function checkInclude($value, $str)
    {
        if (strpos($value, $str) === 0) {
            $prefix = $str;
    
            return $prefix;
        } else {
            return $this->checkInclude($value, substr($str, 0, -1));
        }
    }
    }