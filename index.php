<?php
error_reporting(0);
?>
<html>

<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> ｃｈｅｃｋｅｒ </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }

    td {
      text-align: center;
    }
	option {
    background-color: #32325d;
}
  </style>
</head>

<body style="background-image: linear-gradient(to bottom, #2325d, #32325d);">
  <div class="container-fluid">
    <div class="text-center">
      <h1 style="margin-top: 100px"> ＢＯＢＯ ＫＡＢＡ？ ＢＡＷＡＬ ＳＡＢＩＴ ＥＨ！！！ </h1>
    <div class="text-center">
      <h1 style="margin-top: 10px"> ｐｉｋｏ </h1>
    </div>
    <div class="row">
      <div style="margin-bottom: 10px;margin-top: 30px;" class="col-sm-12">
        <div class="card border-primary mb-12">
          <div class="card-header success"></div>
          <div class="card-body text-center">
            <div class="row col-lg-12 text-center">
              <div class="col-md-12 text-center">
                <p>Cards</p>
                <textarea class="form-control h-50" id="cardz" rows="3" cols="50" placeholder="XXXXXXXXXXXXXXXX|XX|XXXX|XXX"></textarea><br>
              </div>
              <div class="col-lg-12 text-center">
			  <table class="table">
              				<tbody id="tblInformations">
              								<tr align="center">
              								<th><h6 style="font-weight: bold" class="card-title">Live <span id="lives2" class="badge badge-success">0</span></h6></th>
              								<th><h6 style="font-weight: bold" class="card-title">Dead <span id="deads2" class="badge badge-danger">0</span></h6></th>
              								<th><h6 style="font-weight: bold" class="card-title">Checked <span id="checked2" class="badge badge-info">0</span></h6></th>
              								<th><h6 style="font-weight: bold" class="card-title">Total <span id="total2" class="badge badge-neutral">0</span></h6></th>
              								</tr>
              				</tbody>
              </table>
               
			   <button class="btn btn-default btn-block" onclick="start()">Start</button>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
      <div style="padding-bottom: 30px;" class="col-sm-12">
        <div class="col-sm-12">
<div class="card">
  <div style="position: absolute;
        top: 0;
        right: 10;"><br>
</div><br>
  <div class="card-body" style="color: silver">
    <h6 class="text-left col-sm-6">Approved</h6>
    <br>
	<div id="lives" align="center">
    </div>
  </div>
</div>
      </div>
    </div>
	
      <div style="padding-bottom: 30px;" class="col-sm-12">
        <div class="col-sm-12">
<div class="card">
  <div style="position: absolute;
        top: 0;
        right: 10;"><br>
</div><br>
  <div class="card-body" style="color: silver">
    <h6 class="text-LEFT col-sm-6">Declined</h6>
    <br>
	<div id="deads" align="center">
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
<script>
	window.onbeforeunload = function (e) {
    e = e || window.event;
    if (e) {
        e.returnValue = 'Sure?';
    }

    return 'Sure?';
	};
</script>
<script>
  function start() {
    var linha = $("#cardz").val();
    var linhaenviar = linha.split("\n");
	var total = linhaenviar.length;
    var ap = 0;
    var rp = 0;
    var key = $("#sk_key").val();
    linhaenviar.forEach(function(value, index) {
      setTimeout(
        function() {
              $.ajax({
                url: 'chk.php?lista=' + value,
                type: 'GET',
                async: true,
                success: function(resultado) {
              if (resultado.match("#APPROVED")) {
                removelinha();
				ap++;
        APPROVED(resultado, value);
              } else {
                removelinha();
				rp++;
        DECLINE(resultado, value);
              }
			  $('#total2').html(total);
              var fila = parseInt(ap) + parseInt(rp);
              $('#checked2').html(fila);
              $('#lives2').html(ap);
              $('#deads2').html(rp);
            }
          });
        }, 500 * index);
    });
  }

  function APPROVED(str, card) {
    $("#lives").append(str);
  }
  
  function ccn(str, card) {
    $("#ccn").append(str);
  }

  function DECLINE(str, card) {
    $("#deads").append(str);
  }

  function removelinha() {
    var lines = $("#cardz").val().split('\n');
    lines.splice(0, 1);
    $("#cardz").val(lines.join("\n"));
  }
  
  function hideLivecc() {
    var x = document.getElementById("hideLive");
    if(x.style.display == "none"){
    				x.style.display == "block";
    }else{
    				x.style.display == "none";
    }
  }
  
  function hideDeadcc() {
    var x = document.getElementById("hideDead");
    if(x.style.display == "none"){
    				x.style.display == "block";
    }else{
    				x.style.display == "none";
    }
  }
</script>

</html>
















