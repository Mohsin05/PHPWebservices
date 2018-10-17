

  $(document).ready(function() {

    var payload = [];
    var check = false;

    function addContent(content) {

      $('textarea').val(content);

    }

    function showButtons(dataReceived)
    {
      var dataReceived = JSON.parse(dataReceived)

      for (var key in dataReceived) {
        var date = dataReceived[key].created_at;
        $('#dateButton').append(
          '<button type="button" id="' + key + '" data-content ="'+dataReceived[key].content+'" class="btn btn-primary activeb" style="margin: 2px">' + date + '</button> ');
      }

    }


    //sending data

    $("#submitContent").click(function(event){

      event.preventDefault(); //preventing the default function of form submission

      var payload = $("form").serialize(); //getting all the form values signup and the sign in as an array in text form

      $.post('../../Api/afterLogin/afterLogin.php', payload, function(data,status) {

          var dataReceived = data;

          $("#dateButton").html("");

          showButtons(dataReceived);


        $(".activeb").click(function (event) {

          var content = $(this).data('content');

          addContent(content);
        });
          $('.message').show();

      }).done(function() {
        setTimeout(function(){
          $("form").trigger("reset");
          $('.message').hide();
        },3000);

      })

    })



   $.post('../../Api/afterLogin/afterLogin.php', payload, function (data, status) {

     //Use the JavaScript function JSON.parse() to convert text into a JavaScript object:
     var dataReceived = data;

     showButtons(dataReceived);

     $(".activeb").click(function (event) {

       var content = $(this).data('content');

       addContent(content);
     });

   })



    $("#logoutButton").click(function () {
      $.get("../../Api/logout.php", '', function (data, status) {
        $(location).attr("href", '../index.php');
      });

    })


  })

