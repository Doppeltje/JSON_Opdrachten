<?php

$file = 'Scholen.json';
if(file_exists($file))
{
  $filedata = file_get_contents($file); // read file
  $data = json_decode($filedata, true); // true = associative array

  // indexed array (1..2..3..)
  // associative array / named array
  // multi-dimensional array (nested)

  echo "<hr><code><pre>"; // hr = horizontal line, pre = preserve
  print_r($data); // shows array, print_r = print readable
  echo "</pre></code><hr>";
}
else
{
  echo $file . 'not found';
}

// test output
echo $data['School']['Mediacollege']['courses']['MD'];
echo "<br>";
echo $data['School']['Martinus College']['courses']['BV'];

?>
