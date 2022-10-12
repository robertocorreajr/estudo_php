<?php

function a(){
    $a = 0;
    $a++;
    echo "$a <br>";
}

a();
a();
a();
 
function b(){
    static $b = 0;
    $b++;
    echo "$b <br>";
}

b();
b();
b();

function somar($a, $b){
    echo $a + $b;
    echo "<br>";
}

somar(1,1);
somar(2,2);
somar(3,3);

class foo {
    var $bar = 'I am bar. original';
    var $arr = array('I am A.', 'I am B.', 'I am C.');
    var $r   = 'I am r.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo $foo->$bar . "2<br>";
echo $foo->{$baz[1]} . "3<br>";

$start = 'b';
$end   = 'ar';
echo $foo->{$start . $end} . "4<br>";

$arr = 'arr';
echo $foo->{$arr[1]} . "5<br>";

$Bar = "a";
  $Foo = "Bar";
  $World = "Foo";
  $Hello = "World";
  $a = "Hello";

  $a; //Returns Hello
  echo $a;
  echo $$a; //Returns World
  echo $$$a; //Returns Foo
  echo $$$$a; //Returns Bar
  echo $$$$$a; //Returns a

  echo $$$$$$a; //Returns Hello
  echo $$$$$$$a; //Returns World
