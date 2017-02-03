<?php

use yii\widgets\LinkPager;

$i = 1;

echo  "<div id=\"onc\"> <div class=\"row\" id = \"drow\"><div class=\"col-sm-12\" id =\"twl\"> <div class = \"welc\"><a href=\"/\">ONCdev</a></div></div>";

echo "<div class=\"row\">";

foreach ($lmodel as $models){
    echo "<div class=\"col-xs-12\"><div class=\"bloge\"><a href=\"/blog?entry=$models->slug\"><H2>$models->title</H2></a><div class = \"cutbl\">$models->cut</div><div class=\"timebl text-right text-muted \">Опубликовано: $models->time</div></div></div>";
}

echo "<div class=\"col-xs-12\"><div class =\"pagg\">";
echo LinkPager::widget([
    'pagination' => $pages,
]);
echo "</div></div></div><div class=\"col-xs-12\" id=\"socialn\" > <a href = \"\"><img src=\"/images/vk1.png\"/></a><a href = \"\"><img src=\"/images/fb1.png\"/></a><a href = \"\"><img src=\"/images/ok1.png\"/></a><a href = \"\"><img src=\"/images/tw1.png\"/></a></div>";
echo "</div>";
echo "</div>";
