<?php
echo  "<div id=\"onc\"> <div class=\"row\" id = \"drow\"><div class=\"col-sm-12\" id =\"twl\"> <div class = \"welc\"><a href=\"/\">ONCdev</a></div></div>";

echo "<div class = \"row\"><div class =\"col-xs-12\">";

echo "<H1 class=\"text-center\">".$ltmodel->title."</H1><br>";
echo "<img id=\"pic1\" src =\"images\\".$ltmodel->picture."\" ><img id = \"pic2\">";
echo "<p class= \"text-left\" id =\"ptext\">".$ltmodel->text."</p>";
echo "<p>    Используемая технология: ";
    if ( $ltmodel->tag == "cs"){
        echo "C# ";
    }else{
        echo $ltmodel->tag;
    }

echo  "</p></div></div>";

echo "<div class=\"col-xs-12\" id=\"socialn\" > <a href = \"\"><img src=\"/images/vk1.png\"/></a><a href = \"\"><img src=\"/images/fb1.png\"/></a><a href = \"\"><img src=\"/images/ok1.png\"/></a><a href = \"\"><img src=\"/images/tw1.png\"/></a></div>";

echo "</div></div>";

$script = <<< JS
$('#pic1').each(function(){
$(this).width('300px');
});
$('#pic1').click(function(){
var atr2 = $(this).attr('src');
var width = $('#pic2').parent().width();
$('#pic2').css('width', width*0.7);
$('#pic2').attr('src', atr2);
$('#pic2').css('z-index', '100');
$('#pic2').css({
		position:'absolute',
		left: ($(document).width() - $('#pic2').outerWidth())/4,
		top: ($(document).height() - $('#pic2').outerHeight())/100,
		border: ' 2px solid #262626',
	});
});
$('#pic2').click(function(){
$(this).attr('src', '');
$('#pic2').css('border', '0px');
});
JS;
$this->registerJs($script, yii\web\View::POS_END);