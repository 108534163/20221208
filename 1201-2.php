<html>
<title>雲林縣綠色商店</title>
<body>

<?php
// Read entire file into string "https://data.gov.tw/DATASET/32205"
$xml資料 = file_get_contents("https://ws.yunlin.gov.tw/001/Upload/539/opendata/15369/792/3a610b9f-12e0-4e7f-b9e9-7c14577999da.xml");

// Convert xml string into an object
$xml物件 = simplexml_load_string($xml資料);

// Convert into json
$JSON物件 = json_encode($xml物件);
// Convert into associative array
$o = json_decode($JSON物件, true);

//print_r($o );
foreach($o["Data"]as $g){
    echo "商店名稱:";
    echo $g["綠色商店名稱"];
    echo "地址:";
    echo $g["聯絡地址"];
    echo "<br/><br/>";

}
  
?>

</body>
</html>