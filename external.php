<!DOCTYPE html>

<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>External content</title>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>

<style type="text/css">
#external{
 text-align: center;
 height: 500px;
}

#button1{
	background-color: #444444;
	color: #fff;
	float: left;
	margin: 5px;
}

#button1 a{
	width:120px;
	height:60px;
	color: #fff;
	padding-top:40px;
	text-decoration: none;
	float: left;
}
#button{
	position: absolute;
	left: 20px;
	bottom:10px;
	z-index: 999;
	width:120px;
	color: #fff;
	padding:20px;
	text-decoration: none;
	background-color: #444444;
	border:none;
}

#clear{
	clear: both;
	width: 90%;
}

</style>

    <script type="text/javascript">
        $(document).ready(function(){

           $("#page1").click(function(){
          //  $('#result').load('./page1.html');
             alert("Thanks for visiting!");
           }); 

    var externalH  = ($("#external").height())-30;
   // $('#button').css('top',externalH );


    var height = ($("html").height());
	$("#external").css("height",height);
   //  $("#button1 a").css("color","#f00");

         });
     </script>

</head>
<body>

</body>
</html>


<div id="external">
<h1>External Page 1</h1>
<div id="button1"><a href="external2.php">external page</a></div>
<div id="button1"><a href="#">test 2</a></div>
<div id="button1"><a id="page1" href="#" >Back</a></div>
<div id="clear"></div>
<hr />

<?php echo "test php";?>


<FORM><INPUT id="button" Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>



</div>