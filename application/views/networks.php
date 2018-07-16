<?php 
echo '<div> <h1>Remote Addr</h1>'.$_SERVER['REMOTE_ADDR'].' '.$_SERVER['SERVER_ADDR'].'</div>';
 $ipconfig =   shell_exec ("ipconfig/all");  
 // display those informations   
 echo '<div> <h1>IPCONFIG ALL</h1>'.$ipconfig.'</div>';
$ipconfig2 =   shell_exec ("ipconfig");  
 echo '<div> <h1>IPCONFIG</h1>'.$ipconfig2.'</div>';
$client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP)){
            $ip = $client;
        }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
            $ip = $forward;
        }else{
            $ip = $remote;
        }
        //$ip;
 echo '<div> <h1>HTTP_CLIENT_IP</h1>'.$ip.'</div>';

ob_start();  
//Get the ipconfig details using system commond  
system('ipconfig /all');  
// Capture the output into a variable  
$mycomsys=ob_get_contents();  
// Clean (erase) the output buffer  
ob_clean();  
$find_mac = "Physical"; 
//find the "Physical" & Find the position of Physical text  
$pmac = strpos($mycomsys, $find_mac);  
// Get Physical Address  
$macaddress=substr($mycomsys,($pmac+36),17);  
//Display Mac Address  
 echo '<div> <h1>MAC ADDRESS</h1>'.$macaddress.'</div>';


$ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
 echo '<div> <h1>IP ADDRESS</h1>'.$ipaddress.'</div>';

echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));

echo'<br/><br/><br/><br/><br/><br/><br/><br/>';
function ipInfo($ip) {
	if(isset($ip)) {
      $data = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
	   if($data['geoplugin_status'] == '200') {
	   	return $data;
	   } else {
	   	echo "Bad request!, Error code is ".$data['geoplugin_status']; 
	   }
	} else {
		echo "IP is not set!"; 
	}
}
var_dump(ipInfo('180.151.74.202'));
echo'<br/><br/><br/><br/><br/><br/><br/><br/>';
$data = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.'105.230.24.26'));
echo $data['geoplugin_countryName'].'<br/>';
echo $data['geoplugin_city'].'<br/>';
echo $data['geoplugin_regionName'].'<br/>';
echo 'Longitude: '.$data['geoplugin_longitude'].'<br/>';
echo 'Latitude: '.$data['geoplugin_latitude'].'<br/>';
$lng=$data['geoplugin_longitude'];
$lat=$data['geoplugin_latitude'];
echo'<br/><br/><br/><br/><br/><br/><br/><br/>';

 $location = file_get_contents('http://freegeoip.net/json/105.230.24.26');
 print_r($location);


echo'<br/><br/><br/><br/><br/><br/><br/><br/>';

 //$ipAddress = "IP_ADDRESS";
    $ip_key = "AIzaSyB4exKjWiw5q43SkvNr4emoRvE7N8NQBk0";

    $query = "http://api.ipinfodb.com/v3/ip-city/?key=" . $ip_key . "&ip=" . $ipaddress . "&format=json";
    $json = file_get_contents($query);
    $data = json_decode($json, true);

    if ($data['statusCode'] == "OK") {
        echo '<pre>';
        echo "IP Address: " . $ipAddress;
        echo "Country: " . $data['countryName'];
        echo "Region: " . $data['regionName'];
        echo "City: " . $data['cityName'];
        echo "Latitude: " . $data['latitude'];
        echo "Longitude: " . $data['longitude'];
        echo '</pre>';
    } else {
        echo $data['statusCode']." ".$data['statusMessage'];
    }
?>
<!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(''+<?php echo $lat; ?>+'',''+<?php echo $lng; ?>+''),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>-->
<div id="map" style="width: 300px; height: 300px;"></div>
<script type="text/javascript">
  $(function() {
    $("#map").googleMap();
    $("#map").addMarker({
      coords: [<?php echo $lng; ?>,<?php echo $lat; ?>], // GPS coords
      url: 'http://www.tiloweb.com', // Link to redirect onclick (optional)
      id: 'marker1' // Unique ID for your marker
    });
  })
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4exKjWiw5q43SkvNr4emoRvE7N8NQBk0&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>