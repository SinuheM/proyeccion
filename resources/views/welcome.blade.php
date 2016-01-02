<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <form action="" method="POST" id="Form">
                    <input type="email" placeholder="email" name="email">
                    <input type="text" placeholder="first_name" name="nombre">
                    <input type="submit" value="Sendviar" id="SendEgoi">
                </form>
                6ca70e1eb38081180695d6698fae5eeccdd64d0e
            </div>
            <?php
                $params = array( 
                    'apikey'    => '6ca70e1eb38081180695d6698fae5eeccdd64d0e',
                    'listID' => '1',
                    'email' => 'username@zurvin.com',
                    'cellphone' => '351-123456789',
                    'first_name' => 'first_name',
                );
                // using Soap with SoapClient
                $client = new SoapClient('http://api.e-goi.com/v2/soap.php?wsdl');
                $result = $client->addSubscriber($params);
                var_dump($result);
            ?>
            <script>
                $("#SendEgoi").on("click", function(e){
                    e.preventDefault();
                    $params = array( 
                        'apikey'    => '6ca70e1eb38081180695d6698fae5eeccdd64d0e',
                        'listID' => '1',
                        'email' => 'username@zurvin.com',
                        'cellphone' => '351-123456789',
                        'first_name' => 'first_name',
                    );
                    $.ajax({
                        url: 'egoi.php',
                        dataType: 'json',
                        data: {$params},
                });
            </script>
        </div>
    </body>
</html>
