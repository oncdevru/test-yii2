(function(){
	$(document).ready(function(){
		$('#otc').hide();
		$('#cont').hide();
		$('#pic3').hide();
		$('#oncdev').hide();
		$('#block').append('<div id = \'pop\' ><a id= \"close\">Начать</a></div><audio></audio>');
		$('#pop').animate({'height': 220, 'width': 400}, {
					duration:500,
					queue: false,
					specialEasing:{
						height: 'swing',
						width: 'swing',
						complete: (function(){
							$('#pop').text(hell);
							$("<audio></audio>").attr({
               				'src':'sound/a3.mp3',
                			'volume':0.4,
                			'autoplay':'autoplay'
        					}).appendTo("body");
							
						})() //опо
					}});
		$('#pop').append('<a id= \"close\">Начать Тест</a>');
		$('#close').on("click", function(){
				$("<audio></audio>").attr({
               	'src':'sound/click.mp3',
                'volume':0.4,
                'autoplay':'autoplay'
        		}).appendTo("body");
        		$('#pop').remove();
		});

		$('#next').on("click", function(){
				$("<audio></audio>").attr({
               	'src':'sound/click.mp3',
                'volume':0.4,
                'autoplay':'autoplay'
        		}).appendTo("body");
        		
		});

	$('#aa1').on("click", function(){
			$('#aa1').css({
				'color' : 'white',
				'background' : 'linear-gradient(to bottom,  rgba(136,191,232,1) 0%,rgba(112,176,224,1) 100%)',
				'text-shadow' : '1px 1px 1px rgba(28, 28, 28, 1)'
		});        	
				$('#aa2').css({
				'color' : '#acacac',
				'background' : '#e5e5e5',
				'text-shadow' : " dfgdf"

		});	
	});


	$('#aa2').on("click", function(){
			$('#aa2').css({
				'color' : 'white',
				'background' : 'linear-gradient(to bottom,  rgba(136,191,232,1) 0%,rgba(112,176,224,1) 100%)',
				'text-shadow' : '1px 1px 1px rgba(28, 28, 28, 1)'
		});        	
				$('#aa1').css({
				'color' : '#acacac',
				'background' : '#e5e5e5',
				'text-shadow' : ""
		});	
	});

	$('#bb1').on("click", function(){
			$('#bb1').css({
				'color' : 'white',
				'background' : 'linear-gradient(to bottom,  rgba(136,191,232,1) 0%,rgba(112,176,224,1) 100%)',
				'text-shadow' : '1px 1px 1px rgba(28, 28, 28, 1)'
		});        	
				$('#bb2').css({
				'color' : '#acacac',
				'background' : '#e5e5e5',
				'text-shadow' : " dfgdf"

		});	
	});


	$('#bb2').on("click", function(){
			$('#bb2').css({
				'color' : 'white',
				'background' : 'linear-gradient(to bottom,  rgba(136,191,232,1) 0%,rgba(112,176,224,1) 100%)',
				'text-shadow' : '1px 1px 1px rgba(28, 28, 28, 1)'
		});        	
				$('#bb1').css({
				'color' : '#acacac',
				'background' : '#e5e5e5',
				'text-shadow' : ""
		});	
	});

	$('#cc1').on("click", function(){
			$('#cc1').css({
				'color' : 'white',
				'background' : 'linear-gradient(to bottom,  rgba(136,191,232,1) 0%,rgba(112,176,224,1) 100%)',
				'text-shadow' : '1px 1px 1px rgba(28, 28, 28, 1)'
		});        	
				$('#cc2').css({
				'color' : '#acacac',
				'background' : '#e5e5e5',
				'text-shadow' : " dfgdf"

		});	
	});


	$('#cc2').on("click", function(){
			$('#cc2').css({
				'color' : 'white',
				'background' : 'linear-gradient(to bottom,  rgba(136,191,232,1) 0%,rgba(112,176,224,1) 100%)',
				'text-shadow' : '1px 1px 1px rgba(28, 28, 28, 1)'
		});        	
				$('#cc1').css({
				'color' : '#acacac',
				'background' : '#e5e5e5',
				'text-shadow' : ""
		});	
	});

		$('#dd1').on("click", function(){
			$('#dd1').css({
				'color' : 'white',
				'background' : 'linear-gradient(to bottom,  rgba(136,191,232,1) 0%,rgba(112,176,224,1) 100%)',
				'text-shadow' : '1px 1px 1px rgba(28, 28, 28, 1)'
		});        	
				$('#dd2').css({
				'color' : '#acacac',
				'background' : '#e5e5e5',
				'text-shadow' : " dfgdf"

		});	
	});


	$('#dd2').on("click", function(){
			$('#dd2').css({
				'color' : 'white',
				'background' : 'linear-gradient(to bottom,  rgba(136,191,232,1) 0%,rgba(112,176,224,1) 100%)',
				'text-shadow' : '1px 1px 1px rgba(28, 28, 28, 1)'
		});        	
				$('#dd1').css({
				'color' : '#acacac',
				'background' : '#e5e5e5',
				'text-shadow' : ""
		});	
	});





		var ans = [],
		 	fillOne = quest[1] + quest[2] + quest[3] + quest[4] ;
		$('#quest').text(fillOne);
		$('#end').hide();
		 } );
	var count = 4;
	var point = 0;
	ii = 0;
	ans = ['s','g', 'j', 'u'];
	var per = 0;
	$('#st').text("Завершено "+per+" %");
	per = 16,66,
	wd = 10;
	$('#next').on("click", function(){
		
		$('#st').text("Завершено "+Math.ceil(per)+" %");
		wd = wd+ 115;
		$('#line').css({
			'width' : wd +'px'
		});
		var fill = quest[1+count] + quest[2+count] + quest[3+count] + quest[4+count];
		$('#quest').text(fill);
		var rad1 = $( "input:radio[name=rad1]:checked" ).val(),
			rad2 = $( "input:radio[name=rad2]:checked" ).val(),
			rad3 = $( "input:radio[name=rad3]:checked" ).val(),
			rad4 = $( "input:radio[name=rad4]:checked" ).val();
		ans[ii + 0] = rad1;
		ans[ii + 1] = rad2;
		ans[ii + 2] = rad3;
		ans[ii + 3] = rad4;
		ii += 4;
		per = per + 16,66;
		console.log(ans);
			
		count = count + 4;
		if (count >= 24){
			$('#next').hide();
			$('#end').show();
		};


	})
	$('#end').on("click", function(){
		var rad1 = $( "input:radio[name=rad1]:checked" ).val(),
		rad2 = $( "input:radio[name=rad2]:checked" ).val(),
		rad3 = $( "input:radio[name=rad3]:checked" ).val(),
		rad4 = $( "input:radio[name=rad4]:checked" ).val(),
		point = 0;
		$('#st').text("Завершено "+100+" %");
				$('#line').css({
			'width' : 700 +'px'
		});
		ans[20] = rad1;
		ans[21] = rad2;
		ans[22] = rad3;
		ans[23] = rad4;
	if (ans[1] == "yes") {point += 1;};
	if (ans[5] == "yes") {point += 1};
	if (ans[6] == "yes") {point += 1};
	if (ans[7] == "yes") {point +=1};
	if (ans[13] == "yes") {point += 1};
	if (ans[15] == "yes") {point += 1};
	if (ans[17] == "yes") {point += 1};
	if (ans[18] == "yes") {point += 1};
	if (ans[20] == "yes") {point += 1};
	if (ans[21] == "yes") {point += 1};
	if (ans[0] == "no") {point += 1};
	if (ans[2] == "no") {point += 1};
	if (ans[3] == "no") {point += 1};
	if (ans[4] == "no") {point += 1};
	if (ans[8] == "no") {point += 1};
	if (ans[10] == "no") {point += 1};
	if (ans[11] == "no") {point += 1};
	if (ans[12] == "no") {point += 1};
	if (ans[14] == "no") {point += 1};
	if (ans[16] == "no") {point += 1};
	if (ans[19] == "no") {point += 1};
	$('#block').remove();

	if (point <= 11){
				$('#ress').text(low);
		$('#pic3').attr('src', 'apps/motiv/img/1.jpg');
			/*VK.init({
        apiId: 4936541 // id созданного вами приложения вконтакте 
    });
    
   
        VK.api("wall.post", {
             message : "Мой результат теста «Мотивация достижения», http://vk.com/app4936541 ",
            attachments: 'photo-94926910_368949377'
        }, function (data) {});*/

	};
	 if (point >= 12 && point <= 15){
		$('#ress').text(med);
		$('#pic3').attr('src', 'apps/motiv/img/2.jpg');
			/*VK.init({
        apiId: 4936541 // id созданного вами приложения вконтакте 
    });
    var mydata = "лололошечки";
   
        VK.api("wall.post", {
           owner_id: '',
            message : "Мой результат теста «Мотивация достижения», http://vk.com/app4936541 ",
            attachments: 'photo-94926910_368949379'
        }, function (data) {});*/
	};
	if (point >= 16 ){
		$('#ress').text(hei);
		$('#pic3').attr('src', 'apps/motiv/img/3.jpg');
					/*VK.init({
        apiId: 4936541 // id созданного вами приложения вконтакте 
    });
    
   
        VK.api("wall.post", {
            owner_id: '',
            message : "Мой результат теста «Мотивация достижения», http://vk.com/app4936541 ",
            attachments: 'photo-94926910_368949382'
        }, function (data) {});*/
	};
	$('#cont').show();
	$('#otc').show();
	$('#pic3').show();
	$('#oncdev').fadeTo(2300, 0.85);
	$('#otc').text(otc);
   
	console.log(point);
	});


})();