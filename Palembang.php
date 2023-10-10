<?php
require("function.php");
profile = https_request("https://airvisual.com/v2/city?city=PalembangstateSouthSumatra")
$profile = json_decode(@profile,TRUE);
echo "<pres>";
print_r($profie);
echo"</pres>";
$country  =$profile['data']['indonesia'];
$locations = $profile['data'] ['palembang']['104.7754307,-2.9760735'];
$current = $profile['data']['current']['poluttuion  "ts": "2023-10-10T06:00:00.000Z",
                "aqius": 162,
                "mainus": "p2",
                "aqicn": 101,
                "maincn": "p2"'];
echo $country;
echo"<br>";
$country  =$profile['data']['country'];
$locations = $profile['data'] ['location']['coordinates'];
$current = $profile['data']['current']['poluttuion'];
echo $country;
foreach ($location as loc){
    echo $loc;
    echo "<br>";
}
echo $current ('ts');
echo "<br>";
echo$current ('aqius');
?>