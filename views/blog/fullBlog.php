<?php
$art= $bmodel;

echo  "<div id=\"onc\"> <div class=\"row\" id = \"drow\"><div class=\"col-sm-12\" id =\"twl\"> <div class = \"welc\"><a href=\"/\">ONCdev</a></div></div>";

echo "<div class = \"row\"><div class =\"col-xs-12\">";

echo "<H1 class=\"text-center\">".$art->title."</H1>";
echo "<p class= \"text-left\" id =\"ptext\">".$art->text."</p>";

echo  "</div></div>";

echo "<div class=\"col-xs-12\" id=\"socialn\" > <a href = \"\"><img src=\"/images/vk1.png\"/></a><a href = \"\"><img src=\"/images/fb1.png\"/></a><a href = \"\"><img src=\"/images/ok1.png\"/></a><a href = \"\"><img src=\"/images/tw1.png\"/></a></div>";

echo "</div></div>";
