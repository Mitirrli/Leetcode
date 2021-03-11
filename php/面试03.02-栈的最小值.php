<?php

class MinStack {
    private $stack1;
    private $stack2; //辅助栈

    /**
     * initialize your data structure here.
     */
    function __construct()
    {
        $this->stack1 = new SplStack();
        $this->stack2 = new SplStack();
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x)
    {
        $this->stack1->push($x);

        if ($this->stack2->isEmpty() || $x <= $this->stack2->top()) {
            $this->stack2->push($x);
        }
    }

    /**
     * @return NULL
     */
    function pop()
    {
        $value = $this->stack1->pop();
        if ($value === $this->stack2->top()) {
            $this->stack2->pop();
        }

        return $value;
    }

    /**
     * @return Integer
     */
    function top()
    {
        return $this->stack1->top();
    }

    /**
     * @return Integer
     */
    function getMin()
    {
        return $this->stack2->top();
    }
}