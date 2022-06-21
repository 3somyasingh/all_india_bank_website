<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="style.css" rel="stylesheet">

	<title>Balance | All India Bank</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500");
        body{
		background-color: #fff;
	}
* {
  margin: 0;
  box-sizing: border-box;
}

html {
  --card-color: #7b7272;
  --text-color: #000000;
}

body {
  font-family: "Roboto", sans-serif;
}

.tips {
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 30px;
  background: #f1f1f1;
  line-height: 30px;
  font-size: 14px;
  padding: 2px 15px;
}

.container {
  position: absolute;
  display: flex;
  flex-direction: row;
  align-items: center;
  margin: auto;
  top: 35;
  bottom: 0;
  left: 0;
  right: 190;
  width: 680px;
}
.container .col1 {
  perspective: 1000;
  transform-style: preserve-3d;
}
.container .col1 .card {
  position: relative;
  width: 420px;
  height: 250px;
  margin-bottom: 85px;
  margin-right: 10px;
  border-radius: 17px;
  box-shadow: 0 5px 20px -5px rgba(0, 0, 0, 0.1);
  transition: all 1s;
  transform-style: preserve-3d;
}
.container .col1 .card .front {
  position: absolute;
  background: var(--card-color);
  border-radius: 17px;
  padding: 50px;
  width: 100%;
  height: 100%;
  transform: translateZ(1px);
  -webkit-transform: translateZ(1px);
  transition: background 0.3s;
  z-index: 50;
  background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), -webkit-linear-gradient(-245deg, rgba(255, 255, 255, 0) 40%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.container .col1 .card .front .type {
  position: absolute;
  width: 75px;
  height: 45px;
  top: 20px;
  right: 20px;
}
.container .col1 .card .front .type img {
  width: 100%;
  float: right;
}
.container .col1 .card .front .card_number {
  position: absolute;
  font-size: 26px;
  font-weight: 500;
  letter-spacing: -1px;
  top: 110px;
  color: var(--text-color);
  word-spacing: 3px;
  transition: color 0.5s;
}
.container .col1 .card .front .date {
  position: absolute;
  bottom: 40px;
  right: 55px;
  width: 90px;
  height: 35px;
  color: var(--text-color);
  transition: color 0.5s;
}
.container .col1 .card .front .date .date_value {
  font-size: 12px;
  position: absolute;
  margin-left: 22px;
  margin-top: 12px;
  color: var(--text-color);
  font-weight: 500;
  transition: color 0.5s;
}
.container .col1 .card .front .date:after {
  content: "MONTH / YEAR";
  position: absolute;
  display: block;
  font-size: 7px;
  margin-left: 20px;
}
.container .col1 .card .front .date:before {
  content: "valid \athru";
  position: absolute;
  display: block;
  font-size: 8px;
  white-space: pre;
  margin-top: 8px;
}
.container .col1 .card .front .fullname {
  position: absolute;
  font-size: 20px;
  bottom: 40px;
  color: var(--text-color);
  transition: color 0.5s;
}
.container .col1 .card .back {
  position: absolute;
  width: 100%;
  border-radius: 17px;
  height: 100%;
  background: var(--card-color);
  transform: rotateY(180deg);
}
.container .col1 .card .back .magnetic {
  position: absolute;
  width: 100%;
  height: 50px;
  background: rgba(0, 0, 0, 0.7);
  margin-top: 25px;
}
.container .col1 .card .back .bar {
  position: absolute;
  width: 80%;
  height: 37px;
  background: rgba(255, 255, 255, 0.7);
  left: 10px;
  margin-top: 100px;
}
.container .col1 .card .back .seccode {
  font-size: 13px;
  color: var(--text-color);
  font-weight: 500;
  position: absolute;
  top: 100px;
  right: 40px;
}
.container .col1 .card .back .chip {
  bottom: 45px;
  left: 10px;
}
.container .col1 .card .back .disclaimer {
  position: absolute;
  width: 65%;
  left: 80px;
  color: #f1f1f1;
  font-size: 8px;
  bottom: 55px;
}
.container .col2 input {
  display: block;
  width: 260px;
  height: 30px;
  padding-left: 10px;
  padding-top: 3px;
  padding-bottom: 3px;
  margin: 7px;
  font-size: 17px;
  border-radius: 20px;
  background: rgba(0, 0, 0, 0.05);
  border: none;
  transition: background 0.5s;
}
.container .col2 input:focus {
  outline-width: 0;
  background: rgba(31, 134, 252, 0.15);
  transition: background 0.5s;
}
.container .col2 label {
  padding-left: 8px;
  font-size: 15px;
  color: #444;
}
.container .col2 .ccv {
  width: 40%;
}
.container .col2 .buy {
  width: 260px;
  height: 50px;
  position: relative;
  display: block;
  margin: 20px auto;
  border-radius: 10px;
  border: none;
  background: #42C2DF;
  color: white;
  font-size: 20px;
  transition: background 0.4s;
  cursor: pointer;
}
.container .col2 .buy i {
  font-size: 20px;
}
.container .col2 .buy:hover {
  background: #3594A9;
  transition: background 0.4s;
}

.chip {
  position: absolute;
  width: 55px;
  height: 40px;
  background: #bbb;
  border-radius: 7px;
}
.chip:after {
  content: "";
  display: block;
  width: 35px;
  height: 25px;
  border-radius: 4px;
  position: absolute;
  top: 0;
  bottom: 0;
  margin: auto;
  background: #ddd;
}
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="index.php" style="font-size:22px ; font-family:times new roman;">All India Bank</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="customer.php"><i class="far fa-address-book"></i>Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transfer.php"><i class="far fa-clone"></i>Transfer Money</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transactions.php"><i class="far fa-calendar-alt"></i>Transactions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="balance.php"><i class="far fa-copy"></i>Balance</a>
                </li>
            </ul>
        </div>
    </nav>
   
    <h1  style="text-align :center; color:black; font-family:'Times New Roman', Times, serif; font-size: 50px;"> Check Account Balance </h1>


	<div class="tips">
Payment card number: (4) VISA, (51 -> 55) MasterCard, (36-38-39) DinersClub, (34-37) American Express, (65) Discover, (5019) dankort
</div>


         

                     
<br>
<br><br>
<br>
<br>
<br><br>
<br>

<div class="container">
  <div class="col1">
    <div class="card">
      <div class="front">
        <div class="type">
          <img class="bankid"/>
        </div>
        <span class="chip"></span>
        <span class="card_number">&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; </span>
        <div class="date"><span class="date_value">MM / YYYY</span></div>
        <span class="fullname">FULL NAME</span>
      </div>
      <div class="back">
        <div class="magnetic"></div>
        <div class="bar"></div>
        <span class="seccode">&#x25CF;&#x25CF;&#x25CF;</span>
        <span class="chip"></span><span class="disclaimer">This card is the property of All India Bank to whom it must be returned <br> upon request, or if found. The use of this card is subject to the terms and <br> conditions governing All India Bank's card usage. If found, please return to <br> the nearest branch of All India bank. </span>
      </div>
    </div>
  </div>
 
  <div class="col2">
  <form action="balance.php" method="post">
    <label>Card Number</label>
    <input class="number" type="text" name="accno" id="" ng-model="ncard" maxlength="19" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <label>Cardholder name</label>
    <input class="inputname" type="text" placeholder=""/>
    <label>Expiry date</label>
    <input class="expire" type="text" placeholder="MM / YYYY"/>
    <label>Security Number</label>
    <input class="ccv" type="text" placeholder="CVC" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <button class="buy"><i class="material-icons">lock</i> check </button>  
  </form>
    <p>Don't remember your account number? check <a href="customer.php">here</a>        </p>

  </div>
</div>


<?php

$server_name="localhost:3307";
$username="root";
$password="";
$database_name="all_india_bank";  

    $conn = mysqli_connect($server_name, $username, $password, $database_name);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $accno = $_POST['accno'];
    
    $sql = "SELECT blc FROM users where accno='$accno'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<br><br><br><br><br><br><br><br><br><br><br><center><div class="alert alert-success align-items-center text-center" style="width:25%;" role="alert">
         <h2> Balance :  <i class="fas fa-rupee-sign" aria-hidden="true"> </i>'.mysqli_fetch_assoc($result)['blc'].'</h2></div></center>';
    }else{
        echo '<div class="alert alert-danger align-items-center text-center" style="width:34%;" role="alert">
        <div><h2>
        <i class="fas fa-times-circle"></i>
        Something went wrong!</h2>
        </div>
      </div>';
    }
}
}
?>

</body>
</html>






<script>
    function test(){
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();
	$(".hori-selector").css({
		"top":itemPosNewAnimTop.top + "px", 
		"left":itemPosNewAnimLeft.left + "px",
		"height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click","li",function(e){
		$('#navbarSupportedContent ul li').removeClass("active");
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		$(".hori-selector").css({
			"top":itemPosNewAnimTop.top + "px", 
			"left":itemPosNewAnimLeft.left + "px",
			"height": activeWidthNewAnimHeight + "px",
			"width": activeWidthNewAnimWidth + "px"
		});
	});
}
$(document).ready(function(){
	setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
	setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
	$(".navbar-collapse").slideToggle(300);
	setTimeout(function(){ test(); });
});



// --------------add active class-on another-page move----------
jQuery(document).ready(function($){
	// Get current path and find target link
	var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
	if ( path == '' ) {
		path = 'index.html';
	}

	var target = $('#navbarSupportedContent ul li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');
});




// Add active class on another page linked
// ==========================================
// $(window).on('load',function () {
//     var current = location.pathname;
//     console.log(current);
//     $('#navbarSupportedContent ul li a').each(function(){
//         var $this = $(this);
//         // if the current path is like this link, make it active
//         if($this.attr('href').indexOf(current) !== -1){
//             $this.parent().addClass('active');
//             $this.parents('.menu-submenu').addClass('show-dropdown');
//             $this.parents('.menu-submenu').parent().addClass('active');
//         }else{
//             $this.parent().removeClass('active');
//         }
//     })
// });
</script>





<script>
// 4: VISA, 51 -> 55: MasterCard, 36-38-39: DinersClub, 34-37: American Express, 65: Discover, 5019: dankort


$(function(){
  
  var cards = [{
    nome: "mastercard",
    colore: "#0061A8",
    src: "https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png"
  }, {
    nome: "visa",
    colore: "#E2CB38",
    src: "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/2000px-Visa_Inc._logo.svg.png"
  }, {
    nome: "dinersclub",
    colore: "#888",
    src: "http://www.worldsultimatetravels.com/wp-content/uploads/2016/07/Diners-Club-Logo-1920x512.png"
  }, {
    nome: "americanExpress",
    colore: "#108168",
    src: "https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/American_Express_logo.svg/600px-American_Express_logo.svg.png"
  }, {
    nome: "discover",
    colore: "#86B8CF",
    src: "https://lendedu.com/wp-content/uploads/2016/03/discover-it-for-students-credit-card.jpg"
  }, {
    nome: "dankort",
    colore: "#0061A8",
    src: "https://upload.wikimedia.org/wikipedia/commons/5/51/Dankort_logo.png"
  }];
  
  var month = 0;
  var html = document.getElementsByTagName('html')[0];
  var number = "";
  
  var selected_card = -1;
  
  $(document).click(function(e){
    if(!$(e.target).is(".ccv") || !$(e.target).closest(".ccv").length){
      $(".card").css("transform", "rotatey(0deg)");
      $(".seccode").css("color", "var(--text-color)");
    }
    if(!$(e.target).is(".expire") || !$(e.target).closest(".expire").length){
      $(".date_value").css("color", "var(--text-color)");
    }
    if(!$(e.target).is(".number") || !$(e.target).closest(".number").length){
      $(".card_number").css("color", "var(--text-color)");
    }
    if(!$(e.target).is(".inputname") || !$(e.target).closest(".inputname").length){
      $(".fullname").css("color", "var(--text-color)");
    }
  });
  
  
  //Card number input
  $(".number").keyup(function(event){
    $(".card_number").text($(this).val());
    number = $(this).val();
    
    if(parseInt(number.substring(0, 2)) > 50 && parseInt(number.substring(0, 2)) < 56){
      selected_card = 0;
    }else if(parseInt(number.substring(0, 1)) == 4){
      selected_card = 1;  
    }else if(parseInt(number.substring(0, 2)) == 36 || parseInt(number.substring(0, 2)) == 38 || parseInt(number.substring(0, 2)) == 39){
      selected_card = 2;     
    }else if(parseInt(number.substring(0, 2)) == 34 || parseInt(number.substring(0, 2)) == 37){
      selected_card = 3; 
    }else if(parseInt(number.substring(0, 2)) == 65){
      selected_card = 4; 
    }else if(parseInt(number.substring(0, 4)) == 5019){
      selected_card = 5; 
    }else{
      selected_card = -1; 
    }
    
    if(selected_card != -1){
      html.setAttribute("style", "--card-color: " + cards[selected_card].colore);  
      $(".bankid").attr("src", cards[selected_card].src).show();
    }else{
      html.setAttribute("style", "--card-color: #cecece");
      $(".bankid").attr("src", "").hide();
    }
    
    if($(".card_number").text().length === 0){
      $(".card_number").html("&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF;");
    }

  }).focus(function(){
    $(".card_number").css("color", "white");
  }).on("keydown input", function(){
    
    $(".card_number").text($(this).val());
    
    if(event.key >= 0 && event.key <= 9){
      if($(this).val().length === 4 || $(this).val().length === 9 || $(this).val().length === 14){
        $(this).val($(this).val() +  " ");
      }
    }
  })
  
  //Name Input
  $(".inputname").keyup(function(){  
    $(".fullname").text($(this).val());  
    if($(".inputname").val().length === 0){
        $(".fullname").text("FULL NAME");
    }
    return event.charCode;
  }).focus(function(){
    $(".fullname").css("color", "white");
  });
  
  //Security code Input
  $(".ccv").focus(function(){
    $(".card").css("transform", "rotatey(180deg)");
    $(".seccode").css("color", "white");
  }).keyup(function(){
    $(".seccode").text($(this).val());
    if($(this).val().length === 0){
      $(".seccode").html("&#x25CF;&#x25CF;&#x25CF;");
    }
  }).focusout(function() {
      $(".card").css("transform", "rotatey(0deg)");
      $(".seccode").css("color", "var(--text-color)");
  });
    
  
  //Date expire input
  $(".expire").keypress(function(event){
    if(event.charCode >= 48 && event.charCode <= 57){
      if($(this).val().length === 1){
          $(this).val($(this).val() + event.key + " / ");
      }else if($(this).val().length === 0){
        if(event.key == 1 || event.key == 0){
          month = event.key;
          return event.charCode;
        }else{
          $(this).val(0 + event.key + " / ");
        }
      }else if($(this).val().length > 2 && $(this).val().length < 9){
        return event.charCode;
      }
    }
    return false;
  }).keyup(function(event){
    $(".date_value").html($(this).val());
    if(event.keyCode == 8 && $(".expire").val().length == 4){
      $(this).val(month);
    }
    
    if($(this).val().length === 0){
      $(".date_value").text("MM / YYYY");
    }
  }).keydown(function(){
    $(".date_value").html($(this).val());
  }).focus(function(){
    $(".date_value").css("color", "white");
  });
});

</script>