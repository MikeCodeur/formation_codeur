function buttonClickSms() {
    const messageAenvoyer = document.getElementById("messageAenvoyer").value;
    const message = encodeURI(messageAenvoyer);

    const numTelToElement = document.getElementById("numTelToElement").value;
    const numTelTo = encodeURI(numTelToElement);

    //var url = "https://api.twilio.com/2010-04-01/Accounts/AC76ccb6cc98916acb5cd12eea3fefe79a/Messages.json?To%3D0033622722615&From%3D%2B33644608592&Body%3Dtest%20gros"
    const url = "https://api.twilio.com/2010-04-01/Accounts/AC76ccb6cc98916acb5cd12eea3fefe79a/Messages.json";
    const auth = "AC76ccb6cc98916acb5cd12eea3fefe79a:71ea8a3055def72c3716ab0c0105f012";
  
    const myHeaders = new Headers({
        'Authorization': 'Basic '+ btoa(auth), 
        'Content-Type': 'application/x-www-form-urlencoded'
      });
    
    const myInit = { method: 'POST',
               headers: myHeaders,
               mode: 'cors',
               cache: 'default',
               body:  "To="+numTelTo+"&From=%2B33644608592&Body="+message
            };

    fetch(url, myInit)
        .then(reponse => console.log(reponse))
        .catch(error => console.log("error api " , error))
        .finally(end => console.log("fin"));
  
   
  }