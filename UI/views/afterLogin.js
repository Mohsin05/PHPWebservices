
  $(document).ready(function() {

    var payload = [];
    showButtonData();

    function addContent(content) {

      $('textarea').val(content);

    }

    function showButtonData () {
      //getting data
      $.post('../../Api/afterLogin/afterLogin.php', payload, function (data, status) {
        //Use the JavaScript function JSON.parse() to convert text into a JavaScript object:
        var dataReceived = JSON.parse(data);

        for (var key in dataReceived) {

          var date = dataReceived[key].created_at;

         // console.log(dataReceived[key].content)
          $('#dateButton').append(
            '<button type="button" id="' + key + '" class="btn btn-primary" style="margin: 2px">' + date + '</button> ');
        }

        $("#dateButton").click(function (event) {
          var content = dataReceived[event.target.id].content;
          addContent(content);
        });


        $("#logoutButton").click(function () {
          $.get("../../Api/logout.php", '', function (data, status) {
            $(location).attr("href", '../index.php');
          });

        })

      })
    }

    //sending data

    $("#submitContent").click(function(event){
      $("#dateButton").html("");
      showButtonData();
      event.preventDefault(); //preventing the default function of form submission

      var payload = $("form").serialize(); //getting all the form values signup and the sign in as an array in text form

      $.post('../../Api/afterLogin/afterLogin.php', payload, function(data,status) {
          $dataReceived = JSON.parse(data);

          // if ($dataReceived[$dataReceived.length-1].status == 'success'){
            $('.message').show();
          // }

      }).done(function() {
        setTimeout(function(){
          $("form").trigger("reset");
          $('.message').hide();
        },3000);

      })

    })

  })

