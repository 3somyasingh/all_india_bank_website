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
    
    <title>Transactions | All India Bank</title>
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

<style>
    body{
		background-color: #fff;
	}
#t2{
  text-align: center;
  background-color:slategray;
  font-size: 17px;
}
</style>

     <center>
     <h1  style="text-align :center; color:black; font-family:'Times New Roman', Times, serif; font-size: 50px;">Transactions</h1>
     <br>   

            <div
                style="width:80%; background-color:teal; padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
            <?php

$server_name="localhost:3307";
$username="root";
$password="";
$database_name="all_india_bank";  

    $conn = mysqli_connect($server_name, $username, $password, $database_name);
    if(!$conn){
        die("Connection not established: ".mysqli_connect_error());
    }else{
    
        $sql = "SELECT * FROM `transactions`";
        $result = mysqli_query($conn, $sql);
?>
            <table id="t2" class="table table-dark" style="margin-top: 30px;">
                <thead>
                    <tr>
                        <th scope="col">Sender</th>
                        <th scope="col">Reciever</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>

                <style>
                    .mybtn {

                        box-shadow: 2px 2px 10px black;
                        border-radius: 30px;
                        font-weight: bold;
                        background-color: lightgreen;
                        color: green;
                    }

                    .mybtn:active {
                        background-color: green;
                        color: lightgreen;
                    }
                </style>
                <?php
echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)){
        if(!(empty($row['sender']) && empty($row['receiver']) && empty($row['amount'])))
            {echo    '
            <tr>
              <td>'.$row['sender'].'</td>
              <td>'.$row['receiver'].'</td>
              <td>'.$row['amount'].'</td>
              <td>'; ?> <?php if($row['status'] == "succeed"){echo '<b><p style="color:green;">Succeed</p></b>';}else{echo '<b><p style="color:red;">Failed</p></b>';} ?>
              <?php echo '</td>
              </tr>';}
    }
    
    }
    echo "</tbody>";
?>
        </div>
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