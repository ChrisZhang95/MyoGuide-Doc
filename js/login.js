$(document).ready(function(){
      
	$('#login').click(function(){
		var username = $('#username').val();
		var password = $('#password').val();
		var dataString = 'username='+ username +'&password='+ password;
		// alert(dataString);
		$.ajax({
            type: "POST",
            url: "pages/login.php",
            data: dataString,
            cache: false,
                  success: function(result){
                        //alert(result);
                        var r = result.split(",");
                        var log = r[0];
                        //successfully login
                        if(log == '1'){
                              var username = r[1];
                              var dataString1 = "username1=" + username;
                                    
                              $.ajax({
                                    type: "POST",
                                    url: "pages/indexAdmin.php",
                                    data: dataString1,
                                    success: function(r){
                                          window.location.assign("pages/indexAdmin.php"); 
                                    }
                              });
                        }
                        //failed to login
                        else{
                              alert("Wrong username/password");
                        }
                  }
            });

	});
	
});