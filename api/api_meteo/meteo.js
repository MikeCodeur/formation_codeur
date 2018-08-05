

	var callBackGetSuccess = function(data) {
		console.log("data recu : ",data);
	  	alert("Meteo temp  : "  + data.main.temp);
	  	var element = document.getElementById("zone_meteo");
	  	element.innerHTML  = "La temperature est " + data.main.temp;
	  	//alert("Sucess : GET de taille : "  + data.length + " last ID "+lastId);
  	};

  	

	function buttonClickGET() {
                var queryLoc = document.getElementById('queryLoc').value;
		var url = "https://api.openweathermap.org/data/2.5/weather?q="+queryLoc+"&appid=c21a75b667d6f7abb81f118dcf8d4611&units=metric";
	
		//callRestApi : cette fonction est dans le JS fixTripAjaxRestApiUtils-0.0.1.js
		//callRestApi('GET', null, url, callBackGetSuccess, callBackError,getHttpHeaderJson());

		$.get(url, callBackGetSuccess).done(function() {
		    //alert( "second success" );
		  })
		  .fail(function() {
		    alert( "error" );
		  })
		  .always(function() {
		    //alert( "finished" );
		  });
	}





