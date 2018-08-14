
function buttonClickSms() {
  var queryLoc = document.getElementById("queryLoc").value;
  var message = encodeURI(queryLoc);
  //var url = "https://api.twilio.com/2010-04-01/Accounts/AC76ccb6cc98916acb5cd12eea3fefe79a/Messages.json?To%3D0033622722615&From%3D%2B33644608592&Body%3Dtest%20gros"
  var url = "https://api.twilio.com/2010-04-01/Accounts/AC76ccb6cc98916acb5cd12eea3fefe79a/Messages.json";
  var auth = "AC76ccb6cc98916acb5cd12eea3fefe79a:71ea8a3055def72c3716ab0c0105f012";
 /* $.post(url, callBackPostSuccess).done(function() {
      //alert( "second success" );
    })
    .fail(function() {
      alert( "error" );
    })
    .always(function() {
      //alert( "finished" );
    });*/

    $.ajax({
      url: url,
      method: "GET",
      dataType: "json",
      crossDomain: true,
      contentType: "application/json; charset=utf-8",
      data: {"To":"0033622722615","From":"+33644608592","Body":message },
      cache: false,
      beforeSend: function (xhr) {
          /* Authorization header */
          xhr.setRequestHeader("Authorization", "Basic " + btoa(auth));
          //xhr.setRequestHeader("X-Mobile", "false");
      },
      success: function (data) {
        console.log("sucess sms api", data)
        alert("SMS envoyé");
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("error sms", textStatus)
        alert("SMS ERROR "+textStatus);
      }
  });
}