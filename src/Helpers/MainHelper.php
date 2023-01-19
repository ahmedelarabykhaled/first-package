<?php

function pretty_print($data){
    print "<pre>" . print_r($data, true) . "</pre>" . PHP_EOL;
}