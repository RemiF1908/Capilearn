<?php
$pp = $_POST['message'];
$p = json_decode($pp);
file_put_contents('capitales-non-connue.json', $p[0]);

echo $pp;
