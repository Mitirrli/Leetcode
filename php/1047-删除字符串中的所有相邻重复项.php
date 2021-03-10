<?php

class Solution {
    private $stack1;

    function __construct()
    {
        $this->stack1 = new SplStack;
    }

    /**
     * @param String $S
     * @return String
     */
    function removeDuplicates($S) {
        $reverse = strrev($S);

        $length = strlen($reverse);

        //往栈中插入数据
        for ($i = 0; $i < $length; $i++) {
            //判断是否第一个元素
            if (!$this->stack1->isEmpty()) {
                if ($reverse[$i] === $this->stack1->top()) {
                    $this->stack1->pop();
                    continue;
                } else {
                    $this->stack1->push($reverse[$i]); //数据压入栈中
                }
            } else {
                $this->stack1->push($reverse[$i]); //数据压入栈中
            }
        }

        return implode("", iterator_to_array($this->stack1));
    }
}