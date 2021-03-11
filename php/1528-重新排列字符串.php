<?php

class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        $combine = array_combine($indices, str_split($s));

        ksort($combine);
        return implode('', $combine);
    }
}
