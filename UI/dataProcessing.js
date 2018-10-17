

$(document).ready(function(){


//Registration Operation

  $("#registerButton").click(function(event){

    event.preventDefault(); //preventing the default function of form submission

    var payload = $("form").serialize(); //getting all the form values signup and the sign in as an array in text form


    $.post('../Api/register/register.php', payload, function(data,status) {
      $( "#registrationMessage" ).removeClass( 'alert alert-warning' );
      $('#registrationMessage').addClass("alert alert-success");

      $('#registrationMessage').show();
      $("#registrationMessage").html('Successfully registered</br> You will be redirected to Login!');

    }).done(function() {

      setTimeout(function(){
        $("form").trigger("reset");
        $("#registrationMessage").html('');
        $('#registrationMessage').hide();
        $(location).attr("href", '#tologin');

      },2000);

    }) .fail(function(jqxhr, settings, errorMessage) {

        $('#registrationMessage').addClass("alert alert-warning");
        $('#registrationMessage').show();
        $("#registrationMessage").html(errorMessage);

    });
  });



//Login Operation

  $("#loginButton").click(function(event){

    event.preventDefault(); //preventing the default function of form submission

    var payload = $("form").serialize(); //getting all the form values signup and the sign in as an array in text form

    $.post('../Api/login/login.php', payload, function(data,status) {
      $( "#loginMessage" ).removeClass( 'alert alert-warning' );
      $('#loginMessage').addClass("alert alert-success");

      $('#loginMessage').show();
      $("#loginMessage").html('Successful</br> You will be redirected shortly');

    }).done(function() {
      setTimeout(function(){
        $("form").trigger("reset");
        $("#loginMessage").html('');
        $('#loginMessage').hide();
        $(location).attr("href", 'views/afterLogin.php');

      },2000);

    }) .fail(function(jqxhr, settings, errorMessage) {

      $('#loginMessage').addClass("alert alert-warning");
      $('#loginMessage').show();
      $("#loginMessage").html(errorMessage);

    });
  });

});

