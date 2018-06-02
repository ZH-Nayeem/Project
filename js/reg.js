$(document).ready(function(){
    $("#submit").click(function(e){
        
        e.preventDefault();
        var email = $("#email").val();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var password = $("#password").val();
        
        var valid = true;
        
        
        if(fisrtname==""){
            valid= false;
            $("#errorfirstname").html("First name cannot be empty");
        }
        else{
            $("#errorfirstname").html("");
        }
        
        
        if(lastname==""){
            valid= false;
            $("#errorlastname").html("Lastname name cannot be empty");
        }
        else{
            $("#errorlastname").html("");
        }
        
        
        if(email==""){
            valid= false;
            $("#erroremail").html("Email cannot be empty");
        }
        else{
            $("#erroremail").html("");
        }
        
        
        if(password==""){
            valid= false;
            $("#errorpassword").html("password cannot be empty");
        }
        else{
            $("#errorpassword").html("");
        }
    });
});