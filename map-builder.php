<?php
$map = array();
for($y = 0; $y < 200; $y++) {
    for($x = 0; $x < 200; $x++) {
        $map[$x][$y] = array('g' => 1, 'b' => null);
    }
}
echo json_encode($map);