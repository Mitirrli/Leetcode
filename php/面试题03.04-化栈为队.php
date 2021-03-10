<?php

class MyQueue {

    private $stack1;
    private $stack2;

    /**
     * Initialize your data structure here.
     */
    function __construct()
    {
        $this->stack1 = new SplStack();
        $this->stack2 = new SplStack();
    }

    /**
     * Push element x to the back of queue.
     * @param Integer $x
     * @return NULL
     */
    function push($x)
    {
        $this->stack1->push($x);
    }

    /**
     * Removes the element from in front of queue and returns that element.
     * @return Integer
     */
    function pop()
    {
        while (1) {
            // 翻转栈
            if (!$this->stack1->isEmpty()) {
                $value = $this->stack1->pop();
                $this->stack2->push($value);
            } else {
                break;
            }
        }

        // 将队列第一个元素弹出
        $this->stack2->pop();
        while (!$this->stack2->isEmpty()) {
            $this->stack1->push($this->stack2->pop());
        }

        return $value;
    }

    /**
     * Get the front element.
     * @return Integer
     */
    function peek()
    {
        return $this->stack1->bottom();
    }

    /**
     * Returns whether the queue is empty.
     * @return Boolean
     */
    function empty()
    {
        return $this->stack1->isEmpty();
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */