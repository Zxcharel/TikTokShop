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
                /*background-color: black;*/
                padding: 0px;
                position: relative;
                left: -77px;
                top: -74px;
                width: 30px;
                height: 30px;
            }

        </style>

    </head>

    <body>
        <section class="bg_image_1">
        <div>
            <img src="img/friend.png" id="shop_pg">
            <img src="img/phoneframe.png" alt="Phone Frame" id="phone-frame">
            <a href="friend_cart.php">
                <button type='button' class='nxtpg btn btn-link'></button>
            </a>
        </div>
        </section>
    </body>

</html>

<?php
    
?>
