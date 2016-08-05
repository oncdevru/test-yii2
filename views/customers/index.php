<?php
//use yii\widgets\ListView;

echo \yii\widgets\ListView::widget(
		[
			'options' => [
				'class' =>'list-view',
				'id' => 'search_results'
			],
			'itemView' => '_customer',
			'dataProvider' => $records
		]
	);