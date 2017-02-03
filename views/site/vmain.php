<?php
$script = <<< JS
	$('#oncz').fadeTo(3000, 1.0);
JS;
$this->registerJs($script, yii\web\View::POS_READY);


echo  "<div id=\"onc\"> <div class=\"row\" id = \"drow\"><div class=\"col-sm-12\" id =\"twl\"> <div class = \"welc\"><a href=\"/\">ONCdev</a></div></div><div class=\"col-sm-6\" id = \"rcoll\"><p class=\"lead\"> $quote->text</p></div>
<div class=\"col-sm-6\" id=\"lcoll\"><blockquote class=\"pull-right\"><span class=\"quotes\"> $quote->quote </span><small> $quote->author</small></blockquote></div><div class=\"col-sm-6\" id=\"llinks\">Рекомендую посетить:<br><a href=\"http://www.yiiframework.com/\" target = _blank >www.yiiframework.com</a><br><a href=\"http://getbootstrap.com/\" target = _blank>getbootstrap.com</a><br><a href=\"https://unity3d.com/ru\" target = _blank>unity3d.com</a></div><div class=\"col-sm-6\" >";

echo yii\bootstrap\Carousel::widget([
	'items' => [
		[
			'content' => '<img src="/images/6.png"/>',
			'caption' => '<h4>Yii2</h4><p>Сайт ONCdev.ru использует php-фреймворк Yii2</p>',
			],
		[
			'content' => '<img src="/images/2.png"/>',
			'caption' => '<h4>Приложение на Yii2</h4><p>Схема приложения на Yii2</p>',
		],
		[
			'content' => '<img src="/images/3.png"/>',
			'caption' => '<h4>Twitter Bootstrap</h4><p>Фреймворк Yii2 активно использует Twitter Bootstrap</p>',
		],
		[
			'content' => '<img src="/images/4.png"/>',
			'caption' => '<h4>Адаптивный веб-дизайн</h4><p>Twitter Bootstrap позволяет создавать приложения с правильным отображением на различных устройствах</p>',
		],
		[
			'content' => '<img src="/images/1.png"/>',
			'caption' => '<h4>Unity 3d</h4><p>В разделе <a href=/works>Works</a> представлено несколько приложений с использованием Unity 3d</p>',
		],
		[
			'content' => '<img src="/images/0.png"/>',
			'caption' => '<h4>C#</h4><p>Unity 3d использует язык программирования C# для написания скриптов приложения</p>',
		],[
			'content' => '<img src="/images/5.png"/>',
			'caption' => '<h4>jQuery</h4><p>Также в разделе <a href=/works>Works</a> есть работы с использованием библиотеки jQuery</p>',
		],
	],
	'controls' => [
		'<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
		'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
	],
	'options' => [
		'style' => 'margin-top:15px; -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75); -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75); box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);',
	],
]);

echo "</div><div class=\"col-xs-12\" id=\"socialn\" > <a href = \"https://vk.com/id42034259\" target = _blank><img src=\"/images/vk1.png\"/></a><a href = \"\"><img src=\"/images/fb1.png\"/></a><a href = \"\"><img src=\"/images/ok1.png\"/></a><a href = \"\"><img src=\"/images/tw1.png\"/></a></div></div>";
?>