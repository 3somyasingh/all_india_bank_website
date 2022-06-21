<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="style.css" rel="stylesheet">

	
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="nav.js"></script>
    
    <title>Money Transfer | All India Bank</title>


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

<br>
<br>

    <center>
     <h1  style="text-align :center; color:black; font-family:'Times New Roman', Times, serif; font-size: 50px;">Transfer Money</h1>
     <br>  

     <style>
        .formin {
            border-radius: 20px;
            width: 380px;
            height: 50px;
            padding: 5px 5px 5px 15px;
            background-color:lightgrey;
        }

           td {
            padding-top: 10px;
            padding-bottom: 10px;
        }


:root {
  --background: #ffffff;
  --left-side: #5de2a3;
  --card: #c7ffbc;
  --card-line: #80ea69;
  --button-color-3: #26850e;
  --button-color-2: #379e1f;
  --button-color-1: #56be3e;
  --post: #dddde0;
  --numbers: #838183;
  --numbers-2: #aaa9ab;
  --post-line: #757375;
  --post-line2: #545354;
  --dollar: #4b953b;
}

html {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
}

body {
  min-height: 100vh;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  width: 100%;
  background: var(--background);
}

.container {
  background-color: #ffffff;
  display: flex;
  width: 370px;
  height: 120px;
  position: relative;
  border-radius: 6px;
  transition: 0.3s ease-in-out;
}
.container:before {
  width: 200vw;
  position: absolute;
  top: 0;
  left: -100vw;
  height: 100%;
  content: "";
}
.container:hover {
  transform: scale(1.03);
  width: 220px;
}
.container:hover .left-side {
  width: 100%;
}

.left-side {
  background-color: var(--left-side);
  width: 165px;
  height: 120px;
  border-radius: 4px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  transition: 0.3s;
  flex-shrink: 0;
  overflow: hidden;
}

.right-side {
  background-color:rgba(102, 255, 0, 0.675);
  width: calc(100% - 130px);
  display: flex;
  align-items: center;
  overflow: hidden;
  cursor: pointer;
  justify-content: space-between;
  white-space: nowrap;
  transition: 0.3s;
}
.right-side:hover {
  background-color: #f9f7f9;
}

.new {
  font-size: 23px;
  font-family: "Lexend Deca", sans-serif;
  margin-left: 20px;
}

.card {
  width: 70px;
  height: 46px;
  background-color: var(--card);
  border-radius: 6px;
  position: absolute;
  display: flex;
  z-index: 10;
  flex-direction: column;
  align-items: center;
  -webkit-box-shadow: 9px 9px 9px -2px rgba(77, 200, 143, 0.72);
  -moz-box-shadow: 9px 9px 9px -2px rgba(77, 200, 143, 0.72);
  -webkit-box-shadow: 9px 9px 9px -2px rgba(77, 200, 143, 0.72);
}

.card-line {
  width: 65px;
  height: 13px;
  background-color: var(--card-line);
  border-radius: 2px;
  margin-top: 7px;
}

@media only screen and (max-width: 480px) {
  .container {
    transform: scale(0.7);
  }
  .container:hover {
    transform: scale(0.74);
  }

  .new {
    font-size: 18px;
  }
}
.buttons {
  width: 8px;
  height: 8px;
  background-color: var(--button-color-2);
  box-shadow: 0 -10px 0 0 var(--button-color-3), 0 10px 0 0 var(--button-color-1);
  border-radius: 50%;
  margin-top: 5px;
  transform: rotate(90deg);
  margin: 10px 0 0 -30px;
}

.container:hover .card {
  animation: slide-top 1.2s cubic-bezier(0.645, 0.045, 0.355, 1) both;
}

.container:hover .post {
  animation: slide-post 1s cubic-bezier(0.165, 0.84, 0.44, 1) both;
}

@keyframes slide-top {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
  50% {
    -webkit-transform: translateY(-70px) rotate(90deg);
    transform: translateY(-70px) rotate(90deg);
  }
  60% {
    -webkit-transform: translateY(-70px) rotate(90deg);
    transform: translateY(-70px) rotate(90deg);
  }
  100% {
    -webkit-transform: translateY(-8px) rotate(90deg);
    transform: translateY(-8px) rotate(90deg);
  }
}
.post {
  width: 63px;
  height: 75px;
  background-color: var(--post);
  position: absolute;
  z-index: 11;
  bottom: 10px;
  top: 120px;
  border-radius: 6px;
  overflow: hidden;
}

.post-line {
  width: 47px;
  height: 9px;
  background-color: var(--post-line2);
  position: absolute;
  border-radius: 0px 0px 3px 3px;
  right: 8px;
  top: 8px;
}
.post-line:before {
  content: "";
  position: absolute;
  width: 47px;
  height: 9px;
  background-color: var(--post-line);
  top: -8px;
}

.screen {
  width: 47px;
  height: 23px;
  background-color: #ffffff;
  position: absolute;
  top: 22px;
  right: 8px;
  border-radius: 3px;
}

.numbers {
  width: 12px;
  height: 12px;
  background-color: var(--numbers);
  box-shadow: 0 -18px 0 0 var(--numbers), 0 18px 0 0 var(--numbers);
  border-radius: 2px;
  position: absolute;
  transform: rotate(90deg);
  left: 25px;
  top: 52px;
}

.numbers-line2 {
  width: 12px;
  height: 12px;
  background-color: var(--numbers-2);
  box-shadow: 0 -18px 0 0 var(--numbers-2), 0 18px 0 0 var(--numbers-2);
  border-radius: 2px;
  position: absolute;
  transform: rotate(90deg);
  left: 25px;
  top: 68px;
}

@keyframes slide-post {
  50% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-70px);
    transform: translateY(-70px);
  }
}
.dollar {
  position: absolute;
  font-size: 16px;
  font-family: "Lexend Deca", sans-serif;
  width: 100%;
  left: 0;
  top: 0;
  color: var(--dollar);
  text-align: center;
}

.container:hover .dollar {
  animation: fade-in-fwd 0.3s 1s backwards;
}

@keyframes fade-in-fwd {
  0% {
    opacity: 0;
    transform: translateY(-5px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}


    </style>
            <br>
            <div class="" style=" backdrop-filter: blur(5px);  border-radius:5px;  ">
                <form action="transfer.php" method="post">
                    <table>
                        <tr>
                            <td><input type="text" class="formin form-control" name="accno1" id=""
                                    placeholder="Sender's Account Number"
                                    value="<?php if(isset($_GET['reads'])){echo $_GET['reads'];} ?>"></td>
                        <tr>
                        <tr>
                            <td><input type="number" class="formin form-control" name="amount" id=""
                                    placeholder="Amount to Transfer"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="formin form-control" name="accno2" id=""
                                    placeholder="Reciever's Account Number"></td>
                        </tr>
                    </table>
                    <div class="container">
                      <div class="left-side">
                        <div class="card">
                          <div class="card-line"></div>
                          <div class="buttons"></div>
                        </div>
                        <div class="post">
                          <div class="post-line"></div>
                          <div class="screen">
                            <div class="dollar">$</div>
                          </div>
                          <div class="numbers"></div>
                          <div class="numbers-line2"></div>
                        </div>
                     </div>
                     <div class="right-side">
                       <div class="new">Transfer</div> 
                     </div>
                    </div>
                    <br><input style="background-color:darkcyan; " class="btn mybtn btn-outline-light" type="submit" value="Transfer"><br><br>
                </form>
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

    
    $sender = $_POST['accno1'];
    $amount = $_POST['amount'];
    $reciever = $_POST['accno2'];
   
    
    $checkblcquery = "SELECT blc FROM users where accno='$sender'";
    $checkblc = mysqli_query($conn, $checkblcquery);
    $ava_blc = mysqli_fetch_assoc($checkblc)['blc'];

    if($ava_blc >= $amount){
    $sql1 = "UPDATE users SET blc= blc-$amount WHERE accno='$sender'";
    $sql2 = "UPDATE users SET blc= blc+$amount WHERE accno='$reciever'";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    if($result1 && $result2){
        echo '<div class="alert alert-success align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-check-circle"></i>
          Amount Transfered Successfully!</h2></div>
        </div>
      </div>';

      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'succeed')";
      $sqltransact = mysqli_query($conn, $sqltran);
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops! Something went wrong!
        </div>
      </div>';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
      $sqltransact = mysqli_query($conn, $sqltran);
    }
}else{
    echo '<div class="alert alert-danger align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-times-circle"></i>
        Not Sufficient Balance in Account!</h2></div>
        </div>
      </div>
      ';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
      $sqltransact = mysqli_query($conn, $sqltran);
}
}
}
?>
    </center>




    
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