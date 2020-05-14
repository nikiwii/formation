<?php

function addBr($var) {
    echo $var;
    echo "<br>";
}


function addBrX($var, $color="red") {
    echo "<div style='border:$color 2px solid; padding:10px; margin-bottom:20px; background:#eee'>";
    echo $var;
    echo "</div>";
}

function h1(string $str = "") {
    echo "<h1>$str</h1>";
}

function h2(string $str = "") {
    echo "<h2>$str</h2>";
}

function hr() {
    echo "<hr>";
}