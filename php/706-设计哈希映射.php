<?php

class MyHashMap {
    private $hashTable = [];

    /**
     * Initialize your data structure here.
     */
    function __construct() {
        
    }

    /**
     * value will always be non-negative.
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        $this->hashTable[$key] = $value;
    }

    /**
     * Returns the value to which the specified key is mapped, or -1 if this map contains no mapping for the key
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        return $this->hashTable[$key] ?? -1;
    }

    /**
     * Removes the mapping of the specified value key if this map contains a mapping for the key
     * @param Integer $key
     * @return NULL
     */
    function remove($key) {
        unset($this->hashTable[$key]);
    }
}
