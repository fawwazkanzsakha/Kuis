<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
    <h1><center>kualitas udara </center></h1>
    <h1><center>Kota Palembang, South Sumatera, Indonesia </center></h1>
    <h4><center>tanggal : 29 September 2023 </center></h4>
<body>
   <label for="kota">kota</label>
<form action="" method="post">
    <select name="kota">
        <option value="PLG">palembang</option>
        <option value="INR">indralaya</option>
        <option value="KA">kayu agung</option>
    </select>
    <button type="sbumit">pilih</button>
    </form>
    <?php
    $profile = getAPI("http://api.airvisual.com/v2/city?city=Palembang&state=South%20Sumatra&country=Indonesia&key=8c2641a9-fe61-4138-9a2a-12235712397a");

    $profile = json_decode(@profile,TRUE);
    echo "<pres>";
    print_r($profie);
    echo"</pres>";
    $country  =$profile['data']['country'];
    $locations = $profile['data'] ['location']['coordinates'];
    $current = $profile['data']['current']['poluttuion'];
    echo $country;
    echo"<br>";

echo $current ('ts');
echo "<br>";
echo$current ('aqius');
?>
</body>
</html>