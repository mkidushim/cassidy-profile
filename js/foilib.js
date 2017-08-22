class foilibClass{

	debug(formData){
		var string = '';
		for(var pair of formData.entries()){
			string += '&'+pair[0]+'='+pair[1];
		}
		console.log(string);
	}

	addCommas(nStr){
		nStr += '';
		var x = nStr.split('.');
		var x1 = x[0];
		var x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}
		return x1 + x2;
	}

};

var foilib = new foilibClass();