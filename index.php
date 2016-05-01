<?php
function turnon() {
$link = "https://api.lifx.com/v1/lights/all/state";
$authToken = "c3b3660c2ea0f36b428c99ed7d12dc7b401f56bb2af122fd43bb197894449370";
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array('Authorization: Bearer ' . $authToken);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
$data = "power=on";
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
}
function turnoff() {
$link = "https://api.lifx.com/v1/lights/all/state";
$authToken = "c3b3660c2ea0f36b428c99ed7d12dc7b401f56bb2af122fd43bb197894449370";
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array('Authorization: Bearer ' . $authToken);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
$data = "power=off";
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
}
function green(){
    $data='color=green';
$link = "https://api.lifx.com/v1/lights/all/state";
$authToken = "c3b3660c2ea0f36b428c99ed7d12dc7b401f56bb2af122fd43bb197894449370";
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array('Authorization: Bearer ' . $authToken);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
}
function purple(){
    $data='color=purple';
$link = "https://api.lifx.com/v1/lights/all/state";
$authToken = "c3b3660c2ea0f36b428c99ed7d12dc7b401f56bb2af122fd43bb197894449370";
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array('Authorization: Bearer ' . $authToken);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
}
function white(){
    $data='color=white';
$link = "https://api.lifx.com/v1/lights/all/state";
$authToken = "c3b3660c2ea0f36b428c99ed7d12dc7b401f56bb2af122fd43bb197894449370";
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array('Authorization: Bearer ' . $authToken);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
}
function brightness($value){
      
    $data='brightness=' ;
    $data .= $value/100;
  echo $data;
$link = "https://api.lifx.com/v1/lights/all/state";
$authToken = "c3b3660c2ea0f36b428c99ed7d12dc7b401f56bb2af122fd43bb197894449370";
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array('Authorization: Bearer ' . $authToken);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
}
function blue(){
    $data='color=blue';
$link = "https://api.lifx.com/v1/lights/all/state";
$authToken = "c3b3660c2ea0f36b428c99ed7d12dc7b401f56bb2af122fd43bb197894449370";
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array('Authorization: Bearer ' . $authToken);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
}
function red(){
    $data='color=red';
$link = "https://api.lifx.com/v1/lights/all/state";
$authToken = "c3b3660c2ea0f36b428c99ed7d12dc7b401f56bb2af122fd43bb197894449370";
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = array('Authorization: Bearer ' . $authToken);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
}
 
function strobe()
{
$link = "https://api.lifx.com/v1/lights/all/effects/pulse";
$authToken = "c3b3660c2ea0f36b428c99ed7d12dc7b401f56bb2af122fd43bb197894449370";
 
$headers = array('Authorization: Bearer ' . $authToken);
$data = 'period=2&cycles=30&color=blue';
 
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_POST, true);
$response = curl_exec($ch);
 
 
}
if(isset($_POST['on']))
{
   turnon();
} 
if(isset($_POST['off']))
{
   turnoff();
} 
if(isset($_POST['red']))
{
   red();
} 
if(isset($_POST['green']))
{
   green();
} 
if(isset($_POST['blue']))
{
   blue();
} 
if(isset($_POST['brightness']))
{
    $val2 = htmlentities($_POST['points']);
    //then you can use them in a PHP function. 
    //echo $val2;
    brightness($val2);
} 
function weather($lat,$lon){
    $request = 'http://api.openweathermap.org/data/2.5/weather?lat=';
    $request .= $lat;
    $request .= '&lon=';
    $request .= $lon;
    $request .= '&APPID=817d53cd1109ef70b134b2f3460134f2';
   // echo $request;
   $response  = file_get_contents($request);
   $jsonobj  = json_decode($response);
   //print_r($jsonobj);
  $temp = $jsonobj->weather[0]->main;
  #echo $temp;
  echo strcmp($temp, 'Clouds');
   // echo strcmp($temp, 'Clear');
   // echo  strcmp($temp, 'Rain');
   if (strcmp($temp, 'Clear') == 0)
   {
       echo $temp;
       white();

   }
   //elseif  (strpos($temp, 'Clouds'))

   if (strcmp($temp, 'Clouds') == 0)
   {
       purple();
        echo $temp;
       // strobe();
   }
   if(strcmp($temp, 'Rain') == 0)
   {
       echo $temp;
       //purple();
       strobe();
   }
}
if(isset($_POST['save']))
{
    $lat=htmlentities($_POST['lat']);
    $lon=htmlentities($_POST['lon']);
    weather($lat,$lon);
 
}
?>
 
<html>
  <head>
    <title>LIFX API Test</title>
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  </head>
  <body>
    <h1>LIFX API Test</h1>
       
<div data-role="page" id="pageone">
    <div data-role="panel" id="myPanel"> 
    <h2>Panel Header..</h2>
    <p>Some text in the panel..</p>
        <a href="#pagethree" data-rel="close" class="ui-btn ui-btn-inline">Colors</a>
        <a href="#pagefour" data-rel="close" class="ui-btn ui-btn-inline">Brightness</a>
        <a href="#pagefive" data-rel="close" class="ui-btn ui-btn-inline">Settings</a>
  </div> 
  <div data-role="header">
    <h1>Welcome To My Homepage</h1>
  </div>
 
  <div data-role="main" class="ui-content">
    
      <p>
      <a href="#myPanel" class="ui-btn ui-btn-inline">Open Panel</a>
      </p>
       <form method="post" action="index.php">
    <input type="submit" value="on" name="on"> 
      <input type="submit" value="off" name="off"> 
   
 
</form>
    
  </div>
 
  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div> 
      
  <div data-role="page" id="pagethree">
  <div data-role="header">
    <h1>Welcome To My Homepage</h1>
  </div>
 
  <div data-role="main" class="ui-content">
    
        <form method="post" action="index.php">
      <input type="submit" value="red" name="red"> 
      <input type="submit" value="blue" name="blue"> 
      <input type="submit" value="green" name="green">
 
</form>
    
    <a href="#pageone">Go to Page One</a>
  </div>
 
  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
      </div>
      
  <div data-role="page" id="pagefour">
  <div data-role="header">
    <h1>Welcome To My Homepage</h1>
  </div>
 
  <div data-role="main" class="ui-content">
    
        <form method="post" action="index.php">
       <label for="points">Points:</label>
  <input type="range" name="points" id="points" value="50" min="0" max="100"> 
      <input type="submit" value="brightness" name="brightness"> 
            
</form>
    
    <a href="#pageone">Go to Page One</a>
  </div>
 
  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
      </div>
      <script>
          function getLocation() {
              if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(showPosition);
              } else {
 
              }
          }
 
          function showPosition(position) {
 
              var lat = position.coords.latitude;
              var log = position.coords.longitude;
              $('input[id=lat]').val(lat.toString());
              $('input[id=lon]').val(log.toString());
          }
</script>
              
  <div data-role="page" id="pagefive">
  <div data-role="header">
    <h1>Welcome To My Homepage</h1>
  </div>
 
  <div data-role="main" class="ui-content">
    
        <form method="post" action="index.php">
    
  <fieldset data-role="controlgroup">
    <legend>Select your setting:</legend>
      <label for="alert">Weather Alerts within one hour</label>
      <input  onclick="getLocation()" type="radio" name="light" id="alert" value="alert">
      <label  onclick="getLocation()" for="info">Current Weather</label>
      <input type="radio" name="light" id="info" value="info"> 
  </fieldset>
            <input type="submit" name="save" id="save" value="save">
 
            <input type="text"  name="lat" id="lat" placeholder="Latitude">
            <input type="text"  name="lon" id="lon" placeholder="Longitude">
</form>
    
    
  </div>
 
  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
      </div>
    <pre><?php
    
    if(curl_errno($ch))
    {
        echo 'Curl error: ' . curl_error($ch);
    } else {
        echo var_dump(json_decode($response, true));
    }
    
    ?></pre>
  </body>
</html>
<?php
curl_close($ch);
?>