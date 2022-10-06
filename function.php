<?php
function run($s) {

        $char = preg_match("[/ || , || ']", $s);
        $space = strlen($s) == whitespace;
        $nspace = strlen($s) != whitespace; 
        if ($char) {
            $t = preg_replace('/[^a-zA-Z0-9]/', "", $s);
            $u = strrev($t);

            if($t == $u){
                return true;
            }
            return false;
        } else if ($space) {
            $v = str_replace(' ',"",$s);
            $w = strrev($str1);
            if($w == $v){
                return true;
            }
            return false;
        } else if ($nspace) {
            $a = strrev($s);
            if($s == $a){
                return true;
            }
            return false;
        }
}
