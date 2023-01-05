<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $name = utf8_decode($_POST['name']);
        $password = utf8_decode($_POST['password']);
        //$password = md5($_POST['password']);



        $last_year_sales = [$name, 2589, 2589, 1478, 2587, 7852, 9632];    
        $current_year_sales = [$password, 1250, 1480, 1156, 3589, 7521, 9632];
        $respuesta["last_year_sales"] = $last_year_sales;
        $respuesta["current_year_sales"] = $current_year_sales;

        //echo json_encode($respuesta);
    }
?>

<?php

$curl = curl_init();

//$bcdjcd = (string)$name;

$udu = "1";
//page=.$udu

curl_setopt_array($curl, [
    CURLOPT_URL => "https://amazon24.p.rapidapi.com/api/product?categoryID=digital-music&keyword=5%20Seconds%20Of%20Summer&country=US&page=".$name,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: amazon24.p.rapidapi.com",
        "X-RapidAPI-Key: a1cbe0a720mshe35a1882df6a91cp1aa153jsn7097f42168db"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

//echo "cbhjcbdjcbdjh";


if ($err) {
    echo "cURL Error #:" . $err;
} else {
    //echo $response;

    $array_3 = json_decode($response, true);
    //print_r("<br>cbhjcbdjcbdjh<br>");

    //print_r("cbbcmn cbncbxj");
    //print_r($array_3{"docs"}{"0"}{"product_title"});
    //print_r($array_3{"docs"}{"0"}{"product_main_image_url"});
    //print_r($array_3{"docs"}{"0"}{"isBestSeller"});
    //print_r($array_3{"videos"}{"items"}{"0"}{"url"});

    //print_r("<br><br><br>");
}

    $last_year_sales_1 = $array_3; // $response
    $respuesta["last_year_sales_1"] = $last_year_sales_1;
    echo json_encode($respuesta);

?>