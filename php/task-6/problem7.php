<?php
setcookie("style[layout]", "boxed", strtotime("+2 month 5 days"),"/");
setcookie("style[font]", "Swat", strtotime("+2 month 5 days"),"/");
setcookie("style[color]", "blue", strtotime("+2 month 5 days"),"/");
echo "<pre>";
  print_r($_COOKIE);
  echo "</pre>";
  echo "Your color is".$_COOKIE["style"]["color"]."And your font is".$_COOKIE["style"]["font"];