<?php
use yii\widgets\LinkPager;
$i = 1;

echo  "<div id=\"onc\"> <div class=\"row\" id = \"drow\"><div class=\"col-sm-12\" id =\"twl\"> <div class = \"welc\"><a href=\"/\">ONCdev</a></div></div>";

echo "<div class=\"row\">";
echo "<div class=\"col-xs-12\"> Разделы: <a href=\"\works\">Все</a> | <a href=\"?tag=cs\">C#</a> | <a href=\"?tag=jquery\">jQuery</a></div></div><div class=\"row\">";
foreach ($tmodel as $tmodels){

    if ($i<=3) {
        echo "<div class=\"col-lg-4\"><a href=\"/works?entry=$tmodels->slug\" class=\"woblock\"><img class = \"pr_pic\"  src=\"/images/$tmodels->picture\"><div class=\"plink\" >$tmodels->title</div></a></div>";
        $i++;
    }else if ($i>3){
        echo "</div>";
        echo "<div class=\"row\">";
        echo "<div class=\"col-lg-4\"><div class=\"woblock\"><img class = \"pr_pic\" src=\"/images/$tmodels->picture\"><a class=\"plink\" href=\"/works?entry=$tmodels->slug\" >$tmodels->title</a></div></div>";
        $i=1;
    }

}
echo "<div class=\"col-xs-12\"><div class =\"pagg\">";
echo LinkPager::widget([
    'pagination' => $pages,
]);
echo "</div></div></div><div class=\"col-xs-12\" id=\"socialn\" > <a href = \"\"><img src=\"/images/vk1.png\"/></a><a href = \"\"><img src=\"/images/fb1.png\"/></a><a href = \"\"><img src=\"/images/ok1.png\"/></a><a href = \"\"><img src=\"/images/tw1.png\"/></a></div>";
echo "</div>";
echo "</div>";

$script = <<< JS
$('.pr_pic').each(function(){
var height = $(this).parent().height();
var width = $(this).parent().width();
var offs = $(this).parent().offset();
$(this).css('height', height*0.9);
$(this).css('width', width*0.9);
$(this).offset(offs);
});
JS;
$this->registerJs($script, yii\web\View::POS_END);
echo LinkPager::widget([
    'pagination' => $pages,
]);