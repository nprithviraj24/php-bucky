<?php
$str = 'In My Cart : 11 12 items';
preg_match_all('!\d+!', $str, $matches);
print_r($matches);

$dom = new DOMDocument();
$dom->loadHTML($html);

$xpath = new DOMXPath($dom);

$tags = $xpath->query('//input[@name="id"]');
foreach ($tags as $tag) {
    var_dump(trim($tag->getAttribute('value')));
}



?>