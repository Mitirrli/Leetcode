<?php

class Solution {
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        //后进先出: 遍历整个字符串s 如果是左括号将其压入栈中 右括号将栈中元素取出对比
        $matchDictionary = [']' => '[', '}' => '{', ')' => '('];

        //转换为数组进行处理
        $arr = str_split($s);
    
        $stack = new SplStack();
    
        foreach ($arr as $value) {
            if (!array_key_exists($value, $matchDictionary)) {
                $stack->push($value);
            } else {
                if (!$stack->isEmpty() && $matchDictionary[$value] === $stack->top()) {
                    $stack->pop();
                } else {
                    return false;
                }
            }
        }

        //到最后数组应该全部匹配完
        return $stack->isEmpty();
    }
}
