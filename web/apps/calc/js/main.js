(function(){
	var valu = '0',
		iter = 0, //iterations
		zeroText = $('#zero').text(),
		oneText = $('#one').text(),
		twoText = $('#two').text(),
		thText = $('#thr').text(),
		frText = $('#fr').text(),
		fvText = $('#fv').text(),
		sixText = $('#six').text(),
		sevText = $('#sev').text(),
		eiText = $('#ei').text(),
		niText = $('#ni').text();

	$('#disp').text(valu);

(function(){

 	$('#one').on('click', function(){
		if ( iter === 0) {
			valu = $('#disp').text();
			if (valu !== "0"){
				valu = valu + oneText;
				$('#disp').text(valu);
			} else {
				$('#disp').text(oneText);
			};
		}
	    else if (iter !== 0){
			valu = valu + oneText;
			$('#disp').text(valu);
		};
	}
		); 

 	$('#two').on('click', function(){
		if ( iter === 0) {
			valu = $('#disp').text();
			if (valu !== "0"){
				valu = valu + twoText;
				$('#disp').text(valu);
			} else {
				$('#disp').text(twoText);
			};
		}
	    else if (iter !== 0){
			valu = valu + twoText;
			$('#disp').text(valu);
		};
	}
		); 

  	$('#thr').on('click', function(){
		if ( iter === 0) {
			valu = $('#disp').text();
			if (valu !== "0"){
				valu = valu + thText;
				$('#disp').text(valu);
			} else {
				$('#disp').text(thText);
			};
		}
	    else if (iter !== 0){
			valu = valu + thText;
			$('#disp').text(valu);
		};
	}
		); 

   	$('#fr').on('click', function(){
		if ( iter === 0) {
			valu = $('#disp').text();
			if (valu !== "0"){
				valu = valu + frText;
				$('#disp').text(valu);
			} else {
				$('#disp').text(frText);
			};
		}
	    else if (iter !== 0){
			valu = valu + frText;
			$('#disp').text(valu);
		};
	}
		); 

  	$('#fv').on('click', function(){
		if ( iter === 0) {
			valu = $('#disp').text();
			if (valu !== "0"){
				valu = valu + fvText;
				$('#disp').text(valu);
			} else {
				$('#disp').text(fvText);
			};
		}
	    else if (iter !== 0){
			valu = valu + fvText;
			$('#disp').text(valu);
		};
	}
		); 

  	$('#six').on('click', function(){
		if ( iter === 0) {
			valu = $('#disp').text();
			if (valu !== "0"){
				valu = valu + sixText;
				$('#disp').text(valu);
			} else {
				$('#disp').text(sixText);
			};
		}
	    else if (iter !== 0){
			valu = valu + sixText;
			$('#disp').text(valu);
		};
	}
		); 

  	$('#sev').on('click', function(){
		if ( iter === 0) {
			valu = $('#disp').text();
			if (valu !== "0"){
				valu = valu + sevText;
				$('#disp').text(valu);
			} else {
				$('#disp').text(sevText);
			};
		}
	    else if (iter !== 0){
			valu = valu + sevText;
			$('#disp').text(valu);
		};
	}
		); 

  	$('#ei').on('click', function(){
		if ( iter === 0) {
			valu = $('#disp').text();
			if (valu !== "0"){
				valu = valu + eiText;
				$('#disp').text(valu);
			} else {
				$('#disp').text(eiText);
			};
		}
	    else if (iter !== 0){
			valu = valu + eiText;
			$('#disp').text(valu);
		};
	}
		); 

  	$('#ni').on('click', function(){
		if ( iter === 0) {
			valu = $('#disp').text();
			if (valu !== "0"){
				valu = valu + niText;
				$('#disp').text(valu);
			} else {
				$('#disp').text(niText);
			};
		}
	    else if (iter !== 0){
			valu = valu + niText;
			$('#disp').text(valu);
		};
	}
		); 

  	$('#zero').on('click', function(){
		if ( iter === 0) {
			valu = $('#disp').text();
			if (valu != "0"){
				valu = valu + zeroText;
				$('#disp').text(valu);
			} else {
				$('#disp').text(zeroText);
			};
		}
	    else if (iter !== 0){
			valu = valu + zeroText;
			$('#disp').text(valu);
		};
	}
		); 
 
   	$('#plus').on('click', function(){
		if ( iter !== "/" && iter !== "*" && iter !== "+" && iter !== "-") {
			valu = $('#disp').text();
			iter = "+";
			valu = valu + "+";
			$('#disp').text(valu);
		
		}
	    else if (iter === "+"){
			console.log('повторное сложение');
		};
	}
		); 

   	$('#min').on('click', function(){
		if ( iter !== "/" && iter !== "*" && iter !== "+" && iter !== "-") {
			valu = $('#disp').text();
			iter = "-";
			valu = valu + "-";
			$('#disp').text(valu);
		
		}
	    else if (iter === "-"){
			console.log('повторное сложение');
		};
	}
		); 

   	$('#mul').on('click', function(){
		if ( iter !== "/" && iter !== "*" && iter !== "+" && iter !== "-") {
			valu = $('#disp').text();
			iter = "*";
			valu = valu + "*";
			$('#disp').text(valu);
		
		}
	    else if (iter === "*"){
			console.log('повторное сложение');
		};
	}
		); 

   	$('#del').on('click', function(){
		if ( iter !== "/" && iter !== "*" && iter !== "+" && iter !== "-" ) {
			valu = $('#disp').text();
			iter = "/";
			valu = valu + "/";
			$('#disp').text(valu);
		
		}
	    else if (iter === "/"){
			console.log('повторное сложение');
		};
	}
		); 


   	$('#cc').on('click', function(){
			valu = "0";
			$('#disp').text(valu);
		
	}
		); 

 	  	$('#result').on('click', function(){
		if ( iter !== 0) {
				valu = $('#disp').text();
				var aa = valu.length - 1;
				if (parseInt(valu[aa]) !== NaN){
				switch (iter) {
					case "+":
						valuo = valu.split("+");
						valu = parseInt(valuo[0])+parseInt(valuo[1]);
						$('#disp').text(valu);
						iter = 0;
						break;
					case "-":
						valuo = valu.split("-");
						valu = parseInt(valuo[0])-parseInt(valuo[1]);
						$('#disp').text(valu);
						iter = 0;
						break;
					case "*":
						valuo = valu.split("*");
						valu = parseInt(valuo[0])*parseInt(valuo[1]);
						$('#disp').text(valu);
						iter = 0;
						break;
					case "/":
						valuo = valu.split("/");
						valu = parseInt(valuo[0])/parseInt(valuo[1]);
						$('#disp').text(valu);
						iter = 0;
						break;
				};
			} else { valu = parseInt(valu[0]) };
			
		}
	    else if (iter === 0){
	    	return 0;
		};
	}
		);



})();

}
	)();