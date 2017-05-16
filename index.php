<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Zybo Wifi Robot</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {

      $('#up').mousedown(function(){

      var a= new XMLHttpRequest();

      a.open("GET", "up.php"); a.onreadystatechange=function(){

      if(a.readyState==4){ if(a.status ==200){

       } else alert ("http error"); } }

      a.send();

      });

      $('#up').mouseup(function(){

      var a= new XMLHttpRequest();

      a.open("GET", "stop.php"); a.onreadystatechange=function(){

      if(a.readyState==4){ if(a.status ==200){

       } else alert ("http error"); } }

      a.send();

      });

      $('#left').mousedown(function(){

      var a= new XMLHttpRequest();

      a.open("GET", "left.php"); a.onreadystatechange=function(){

      if(a.readyState==4){ if(a.status ==200){

       } else alert ("http error"); } }

      a.send();

      });

      $('#left').mouseup(function(){

      var a= new XMLHttpRequest();

      a.open("GET", "stop.php"); a.onreadystatechange=function(){

      if(a.readyState==4){ if(a.status ==200){

       } else alert ("http error"); } }

      a.send();

      });

      $('#stop').mousedown(function(){

      var a= new XMLHttpRequest();

      a.open("GET", "stop.php"); a.onreadystatechange=function(){

      if(a.readyState==4){ if(a.status ==200){

       } else alert ("http error"); } }

      a.send();

      });

      $('#stop').mouseup(function(){

      var a= new XMLHttpRequest();

      a.open("GET", "stop.php"); a.onreadystatechange=function(){

      if(a.readyState==4){ if(a.status ==200){

       } else alert ("http error"); } }

      a.send();

      });

      $('#right').mousedown(function(){

      var a= new XMLHttpRequest();

      a.open("GET", "right.php"); a.onreadystatechange=function(){

      if(a.readyState==4){ if(a.status ==200){

       } else alert ("http error"); } }

      a.send();

      });

      $('#right').mouseup(function(){

      var a= new XMLHttpRequest();

      a.open("GET", "stop.php"); a.onreadystatechange=function(){

      if(a.readyState==4){ if(a.status ==200){

       } else alert ("http error"); } }

      a.send();

      });

      $('#down').mousedown(function(){

      var a= new XMLHttpRequest();

      a.open("GET", "down.php"); a.onreadystatechange=function(){

      if(a.readyState==4){ if(a.status ==200){

       } else alert ("http error"); } }

      a.send();

      });

      $('#down').mouseup(function(){

      var a= new XMLHttpRequest();

      a.open("GET", "stop.php"); a.onreadystatechange=function(){

      if(a.readyState==4){ if(a.status ==200){

       } else alert ("http error"); } }

      a.send();

      });

      });
    </script>
  </head>
  <body>
    <div class="text-center"><h1>Zybo Control</h1></div>
    <div class="row">
        <div class="col-md-5 col-sm-4 col-xs-3"></div>
        <div class="col-md-2 col-sm-3 col-xs-6">
           <div class="text-center">
            <button id="up" type="button" class="btn btn-default">
             <span class="glyphicon glyphicon-arrow-up"></span>
            </button>
           </div>

           <br>

           <div class="text-center">
            <button id="left" type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-arrow-left"></span>
            </button>
            <button id="stop" type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-remove-circle"></span>
            </button>
            <button id="right" type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-arrow-right"></span>
            </button>
           </div>

           <br>

           <div class="text-center">
            <button id="down" type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-arrow-down"></span>
            </button>
           </div>

        </div>
        <div class="col-md-5 col-sm-5 col-xs-3"></div>
    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
