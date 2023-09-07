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

            #star {
                padding: 0px;
                position: relative;
                width: 15px;
                top: -236px;
                left: 167px;
            }

            div {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .nxtpg {
                padding: 0px;
                /*background-color: black;*/
                position: relative;
                left: -13px;
                top: 185px;
                width: 261px;
                height: 60px;
            }

            .prevpg {
                padding: 0px;
                /*background-color: black;*/
                position: relative;
                left: -261px;
                top: -236px;
                width: 15px;
                height: 15px;
            }

        </style>

    </head>

    <body>
        <section>
        <div>
            <img src="img/shop_item.png" id="shop_pg">
            <img src="img/phoneframe.png" alt="Phone Frame" id="phone-frame">
            <a href="cart.php">
                <button type='button' class='btn btn-link'>
                    <img src="img/black_star.PNG" id="star">
                </button>
            </a>
            <a href="item_size.php">
                <button type='button' class='nxtpg btn btn-link'></button>
            </a>
            <a href="mainpage.php">
                <button type='button' class='prevpg btn btn-link'></button>
            </a>
        </div>
        </section>
    </body>

</html>

<?php

?>
