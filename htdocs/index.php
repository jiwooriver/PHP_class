<?php
    $a = 20;

    function testFunction() {
        global $a;
        $b = 30;
        echo $a + $b;
    }

    testFunction();

    $a = 20;

    if($a >= 20) {
        $b = 30;
    }

    echo $b;

    $a = 100;
    $b = 200;
    echo $a . "<br>" . $b;
    echo $a . "<br>" . $b;

    $a = 100;
    $b = 200;
    echo $a . "<br>" . $b;
    unset($a);
    echo $a . "<br>" . $b;

$a = 100;
    $b = 200;
    echo $a . "<br>" . $b . "<br>";
    echo isset($a) . $b . "<br>";
    echo $a . "<br>" . $b . "<br>";


    function destroy_foo()
    {
        global $foo;
        unset($GLOBALS['foo'));
    }
$foo = 'bar';
destroy_foo();
echo $foo;


define("HOME", "/src");

echo HOME . "<br>";

function test() {
    echo "In test : " . HOME;
}

test();

echo __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";
function test() {
    echo __FUNCTION__ . "<br>"; 
}

test();
