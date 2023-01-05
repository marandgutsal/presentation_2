<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head> 

    <body>
        <div id="product_list">
            
        </div>

        <img id="cdnsjkkc" style='
        height:100px; cursor: pointer;
        z-index: 1;'
        src='https://w7.pngwing.com/pngs/287/50/png-transparent-ok-logo-computer-icons-desktop-ok-button-black-word-ok-icon-miscellaneous-trademark-logo.png' data-id3='1'
        alt=''>
    </body>

</html>
<script>
    $("#cdnsjkkc")
    .click(function () {
        var id = $(this).data('id3');
        alert("id: "+id);
        vfvfd(id);

        id++;
        $(this).data('id3', id);
        alert("@@@ "+id);
    });

    function vfvfd(id)
    {
        var dataString = 'name=' + id + '&password=' + 145;

        $.ajax({
            type: 'POST',
            url: 'test.php',
            data: dataString,
            datatype: 'text'
        }).done(function (response)
        {
            resultado = JSON.parse(response);
            //alert("@#¢ 1: "+resultado["last_year_sales"]);
            //alert("@#¢ 2: "+resultado["current_year_sales"]);
            //alert("@#¢ 3: "+resultado["last_year_sales_1"]);
            //alert("@#¢ 4: "+resultado["last_year_sales_1"]["docs"]["0"]["product_main_image_url"]);
            console.log(resultado["last_year_sales"]);
            console.log(resultado["current_year_sales"]);
            console.log(resultado["last_year_sales_1"]);

            //var nxj = 0;
            //alert("inicio: " + inicio + " ... fin: " + fin);

            for(i=0; i<16; i++) {
                var item = id*16-16+i;

                if (resultado["last_year_sales_1"]["docs"][i]["product_main_image_url"])
                {
                    var ncx = resultado["last_year_sales_1"]["docs"][i]["product_main_image_url"];

                    var addProduct_btn = document.createElement("img");
                    addProduct_btn.id = "addProduct_btn" + item;
                    addProduct_btn.src = resultado["last_year_sales_1"]["docs"][i]["product_main_image_url"];
                    addProduct_btn.alt = "_";

                    document.getElementById("product_list").appendChild(addProduct_btn);
                }
                //nxj++;
            }

        });
    }
</script>