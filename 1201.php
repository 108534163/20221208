<html>
<title>農村地方美食小吃特色料理</title>
<body>

<?php
// Read entire file into string "https://data.gov.tw/dataset/6037"
$xml資料 = file_get_contents("https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx?FOTT=Xml");

// Convert xml string into an object
$xml物件 = simplexml_load_string($xml資料);

// Convert into json
$JSON物件 = json_encode($xml物件);
// Convert into associative array
$o = json_decode($JSON物件, true);

//print_r($o );
foreach($o["row"]as $g){
    echo "名稱:";
    echo $g["Name"];
    echo "<br/>";

}
  
?>

</body>
</html>