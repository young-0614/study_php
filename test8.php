<?php
//   $p1 = array("Copier", "Inkjet", "Laser", "Photo");
//   echo "pl element: ".$p1[2]."<br>";
//   $p2 = array('copier' => "Copier & Multipurpose", 'inkjet' => "Inkjet Priniter", 'laser' => "Laser Printer", 'photo' => "Photographic Paper");
//   echo "p2 elemnet: ".$p2["inkjet"]."<br>";

//   $j = 0;
//   foreach($p1 as $item){
//     echo "$j: $item<br>";
//     ++$j;
//   }

//   foreach($p2 as $item => $description){
//     echo "$item: $description<br>";
//   }

  $products = array(
    'paper' => array('copier' => "Copier & Multipurpose", 'inkjet' => "Inkjet Priniter", 'laser' => "Laser Printer", 'photo' => "Photographic Paper"),
    'pens' => array('ball' => 'Ball Point', 'hilite' => "Highlighters", 'marker' => "Markers"),
    'misc' => array('tape' => "Sticky Tape", 'glue' => "Adhesives", 'clips' => "Paperclipes")
  ); //다차원 배열
  echo "<pre>";
  foreach($products as $section => $items)
    foreach($items as $key => $value)
      echo "$section: \t$key\t ($value)<br>";
  echo "</pre>";
  ?>