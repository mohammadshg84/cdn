<?php 

$str = file_get_contents('https://de1.cdn.hspr.ir/1401/01/24/test-code-42436765.php');
$swc = str_word_count($str);

echo $swc-178;

?>