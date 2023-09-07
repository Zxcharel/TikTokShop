<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


        <title>TikTok</title>

        <style>
            body {
                /*background-color: lightblue;*/
                display: flex;
                justify-content: center;
                align-items: center;
                height: 150vh;
            }
        
        /* Style the phone frame */
            #phone-frame {
                position: absolute;
                max-width: 300px; /* Adjust the size as needed */
            }

            #shop_pg {
                position: absolute;
                border-radius: 20px;
                width: 260px;
                height: 562px;
            }

            div {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .nxtpg {
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 11px;
                padding: 0px;
                background-color: rgb(238, 29, 82);
                position: relative;
                left: 123px;
                top: 195px;
                width: 238px;
                height: 30px;
                text-align: center;
            }

            .prevpg {
                padding: 0px;
                /*background-color: black;*/
                position: relative;
                left: -126px;
                top: -206px;
                width: 262px;
                height: 155px;
            }

            .exit {
                padding: 0px;
                /*background-color: black;*/
                position: relative;
                left: 361px;
                top: -111px;
                width: 15px;
                height: 15px;
            }

        </style>

    </head>

    <body>
        <section class="bg_image_1">
        <div>
            <img src="img/shop_size.PNG" id="shop_pg">
            <img src="img/phoneframe.png" alt="Phone Frame" id="phone-frame">
            <a href="item.php">
                <button type='button' class='exit btn btn-link'></button>
            </a>
            <a href="cart.php">
                <button type='button' class='nxtpg btn btn-dark'>
                    Add to wishlist
                </button>
            </a>
            <a href="item.php">
                <button type='button' class='prevpg btn btn-link'></button>
            </a>
        </div>
        </section>
    </body>

</html>

<?php

?>
