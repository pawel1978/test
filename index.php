<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <title>Pawel App</title>

    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

    <script type="text/javascript" charset="utf-8" src="cordova.js"></script>
    <script type="text/javascript" charset="utf-8">

    // Wait for device API libraries to load
    //
    document.addEventListener("deviceready", onDeviceReady, false);

    //////////////////////////////////////////////////
     // device APIs are available
    //

        function checkConnection() {
            var networkState = navigator.connection.type;

            var states = {};
            states[Connection.UNKNOWN] = 'Unknown connection';
            states[Connection.ETHERNET] = 'Ethernet connection';
            states[Connection.WIFI] = 'WiFi connection';
            states[Connection.CELL_2G] = 'Cell 2G connection';
            states[Connection.CELL_3G] = 'Cell 3G connection';
            states[Connection.CELL_4G] = 'Cell 4G connection';
            states[Connection.CELL] = 'Cell generic connection';
            states[Connection.NONE] = 'No network connection';
          

           if(states[networkState]== 'No network connection' || states[networkState] == 'Cell generic connection'
           || states[networkState] == 'Unknown connection' ){
             //jesli nie ma polaczenia
           //  alert(states[networkState]);
             window.location="no_conection.html";
            }else{
            
             alert(states[networkState]);	
            
             //jesli jest polaczenie
           //  window.location.href = 'http://www.pawelj.cal.pl';
            }
            
         ///////////////////////////////////
        }
        

        
     function onDeviceReady() {
        checkConnection();
        
    }

    </script>



    <script src="jquery.xdomainajax.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		   $("#page1").click(function(){
		   	$('#result').load('page1.html');
		     //alert("Thanks for visiting!");
		   }); 
		 });
	 </script>
<style type="text/css">
#result img{
width:200px;
height:auto;
}
</style>


  </head>
  <body>

	 
<a href="http://design78.net" class="ajaxtrigger">zaladuj design 78</a>
<div id="target"></div>


	<ul>
	<li><a id="page1" href="#">About</a></li>
</ul>
tu bedzie page1.html albo design78.net
<hr />
<div id="result" style="clear:both;"></div>
  </body>
</html>
