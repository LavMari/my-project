<?php

$textStorage = [];

function add ( $ttl, $txt, &$textStorage)
{
    $textStorage[] = array("title" => $ttl,"text" => $txt);
}

add('News1', 'Today is Tuesday',$textStorage);
add("News2", "Today is winter", $textStorage);

var_dump($textStorage);

function remove ($key, &$textStorage)
{ 
    if (array_key_exists($key, $textStorage)) {
        unset($textStorage[$key]);
        return true;
    } else {
        return false;
    }
}

var_dump(remove(0,$textStorage));
var_dump(remove(5,$textStorage));
var_dump($textStorage);

function edit (int $key, string $ttl, string $txt, &$textStorage)
{ 
    if (array_key_exists($key, $textStorage)) {
        $textStorage[$key] = array("title" => $ttl, "text" => $txt);
        return true;
    } else {
        return false;
    }
}

var_dump(edit(1,'News3','I am tired',$textStorage));
var_dump($textStorage);
var_dump(edit(7,'News3','I am tired',$textStorage));
