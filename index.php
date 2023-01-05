<?php

    if (isset($_POST['keyword_1'])) {
        $pcbcx_1 = $_POST['keyword_1'];
    } else {
        $pcbcx_1 = '';
    }

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://youtube-media-downloader.p.rapidapi.com/v2/video/details?videoId=".$pcbcx_1,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: youtube-media-downloader.p.rapidapi.com",
        "X-RapidAPI-Key: 605d371445mshd875f497644331bp11e473jsn3ada82dad33e"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    // echo $response;

    $array_3 = json_decode($response, true);
    //print_r($array_3{"videos"}{"items"}{"0"}{"url"});

    //print_r("<br><br><br>");

}

/*https://rapidapi.com/DataFanatic/api/youtube-media-downloader/

GET Get Video Details

*/

?>


<?php

    if (isset($_POST['keyword_2'])) {
        $pcbcx_2 = $_POST['keyword_2'];
    } else {
        $pcbcx_2 = '';
    }

$curl = curl_init();

$bcx = "sweetheart%thomas%rhett";

curl_setopt_array($curl, [
    CURLOPT_URL => "https://youtube-search-and-download.p.rapidapi.com/search?query=".$pcbcx_2."&sort=v",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: youtube-search-and-download.p.rapidapi.com",
        "X-RapidAPI-Key: 605d371445mshd875f497644331bp11e473jsn3ada82dad33e"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    //echo "cURL Error #:" . $err;
} else {
    // echo $response;

    $array_2 = json_decode($response, true);
    //print_r($array_2);
    //print_r($array_2{"contents"});

/*
    print_r("<br><br><br><br><br>");
    print_r($array_2{"contents"}{"0"});
    print_r("<br><br><br><br><br>");
    print_r($array_2{"contents"}{"0"}{"video"});
    print_r("<br><br><br><br><br>");
    print_r($array_2{"contents"}{"0"}{"video"}{"videoId"});
    print_r($array_2{"contents"}{"0"}{"video"}{"thumbnails"}{"0"}{"url"});
    print_r("<br><br><br><br><br>");
    print_r($array_2{"contents"}{"1"}{"video"}{"videoId"});
    print_r($array_2{"contents"}{"1"}{"video"}{"thumbnails"}{"0"}{"url"});
    print_r("<br><br><br><br><br>");
    print_r($array_2{"contents"}{"2"}{"video"}{"videoId"});
    print_r($array_2{"contents"}{"2"}{"video"}{"thumbnails"}{"0"}{"url"});
    print_r("<br><br><br><br><br>");
    print_r($array_2{"contents"}{"3"}{"video"}{"videoId"});
    print_r($array_2{"contents"}{"3"}{"video"}{"thumbnails"}{"0"}{"url"});
    print_r("<br><br><br><br><br>");
    print_r($array_2{"contents"}{"4"}{"video"}{"videoId"});
    print_r($array_2{"contents"}{"4"}{"video"}{"thumbnails"}{"0"}{"url"});
    print_r("<br><br><br><br><br>");
*/
}

/*https://rapidapi.com/h0p3rwe/api/youtube-search-and-download/pricing*/

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="PTJmEJtZHVFFDsYa6v5h401LBzTGws9ehqdVm-IrCiY" />
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>

        <div id="my_video_environment" style="z-index: 1; position: absolute; width: 100%; height: 100%; background-color: black;">
            <video height="100%" muted='true' autoplay="true" controls loop>
                <source src="<?php print_r($array_3{"videos"}{"items"}{"0"}{"url"}); ?>" type="video/mp4">
            </video>
        </div> <!--videos/Luke1.mp4-->

        <div style="background-color: transparent; width: 70%; height: 70%; top: 0px; right: 0px; z-index: 1; position: absolute;">
            <iframe src="index_2.php" style="background-color: transparent; width: 100%; height: 100%; top: 0px; right: 0px; z-index: 1; position: absolute;">
            </iframe>
        </div>





        <div id="searchEngineMachine_environment" style="z-index: 2; position: relative;">
            <form action="" method="post"> <!--formget.php-->
                <input type="text" id="searchEngineMachine" placeholder="JBSB92" name="keyword_2"/>
                <input type="submit" value="OK">
            </form>
        </div>

        <div style="z-index: 2; position: absolute; width: 200px; bottom: 40px; top: 70px; background-color: red; overflow-y: scroll;">

            <form action="" method="post"> <!--formget.php-->
                <input type="text" id="searchEngineMachine_1" placeholder="JBSB92" name="keyword_1" value="Mupz-fqBzAA"/>
                <img style='
                height:100px; width: 100px; cursor: pointer;
                z-index: 3;'
                src='images/1.PNG'
                alt=''>
                <input type="submit" value="keyword_1">
            </form>


            <form action="" method="post"> <!--formget.php-->
                <input type="text" id="searchEngineMachine_1" placeholder="JBSB92" name="keyword_1" value="8JnfIa84TnU"/>
                <img style='
                height:100px; width: 100px; cursor: pointer;
                z-index: 3;'
                src='images/1.PNG'
                alt=''>
                <input type="submit" value="keyword_1">
            </form>


            <form action="" method="post"> <!--formget.php-->
                <input type="text" id="searchEngineMachine_1" placeholder="JBSB92" name="keyword_1" value="Lv5DFKceFac"/>
                <img style='
                height:100px; width: 100px; cursor: pointer;
                z-index: 3;'
                src='images/1.PNG'
                alt=''>
                <input type="submit" value="keyword_1">
            </form>



            <?php
                $w = 0;
                while(isset($array_2{"contents"}{"$w"}{"video"}{"thumbnails"}{"0"}{"url"})) {
            ?>

                <form action="" method="post"> <!--formget.php-->
                    <input type="text" id="searchEngineMachine_1" placeholder="JBSB92" name="keyword_1" 
                    value='<?php echo $array_2{"contents"}{"$w"}{"video"}{"videoId"} ?>'/>
                    <img style='
                    height:100px; width: 100px; cursor: pointer;
                    z-index: 3;'
                    src='<?php echo $array_2{"contents"}{"$w"}{"video"}{"thumbnails"}{"0"}{"url"} ?>'
                    alt=''>
                    <input type="submit" value="keyword_1">
                </form>

            <?php 
                $w++;
                }
            ?>





        </div>

        <script type='application/ld+json'>
        {
          "@context": "http://www.schema.org",
          "@type": "Corporation",
          "name": "5 Seconds of Summer",
          "url": "http://bcxc6w.42web.io/images/5sos5.jpeg",
          "sameAs": [
             "http://bcxc6w.42web.io/images/5sos5.jpeg",
             ""
          ],
          "logo": "http://bcxc6w.42web.io/images/5sos5.jpeg",
          "image": "http://bcxc6w.42web.io/images/5sos5.jpeg",
          "description": "5 Seconds of Summer",
          "address": {
             "@type": "PostalAddress",
             "streetAddress": "calle 68 b sur # 77 n 78",
             "postOfficeBoxNumber": "110741",
             "addressLocality": "bogota",
             "addressRegion": "Distrito Capital de Bogotá",
             "postalCode": "110741",
             "addressCountry": "Colombia"
          },
          "geo": {
             "@type": "GeoCoordinates",
             "latitude": "4.602359182498761",
             "longitude": "-74.18707781515741"
          },
          "hasMap": "https://goo.gl/maps/3qcKtyM9eU1hPMVEA",
           "openingHours": "Mo 07:30-17:00 Tu 07:30-17:00 We 07:30-17:00 Th 07:30-17:00 Fr 07:30-17:00 Sa 08:00-12:00 Su 08:00-12:00"
        }
        </script>

    </body>
</html>