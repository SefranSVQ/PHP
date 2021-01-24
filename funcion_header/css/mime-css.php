<?php
header("Content-type: text/css");
$color = rand(0, 360);
print "body {";
print "  background-color: hsl($color, 50%, 90%);";
print "  color: hsl($color, 50%, 30%);";
print "}";
?>