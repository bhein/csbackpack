<?php require "./query/SourceQuery/SourceQuery.class.php"; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

        <title>Rare Clan Server Status</title>

        <!-- Bootstrap core CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->



        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    </head>

    <body>



    <div class="container">

        <h1>Rare clan server status</h1>
        <p class="lead">This page serves to show the status and addresses of all servers and<br>mirrors on our network.</p>



        <table class="table table-hover">

            <thead>
            <tr>
                <th>ID</th>
                <th>Mod</th>
                <th>Hostname</th>
                <th>Map</th>
                <th>Location</th>
                <th>IP</th>
                <th>Type</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                $q = query_source("162.243.92.203");

                ?>
                <td>1</td>
                <td><?php   ?></td>
                <td><?php  ?></td>
                <td>sg_island_beta_v3</td>
                <td>Texas, United States</td>
                <td><a class="btn btn-info btn-xs" href="steam://connect/208.115.242.123:27015"><i class="fa fa-link"></i> Join</a> 208.115.242.123:27015</td>
                <td>Server</td>
                <td><?php echo getStatus($q); ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Server 1 Mirror (NY, US)</td>
                <td>sg_island_beta_v3</td>
                <td>New York, United States</td>
                <td><a class="btn btn-info btn-xs" href="steam://connect/162.243.92.203:27015"><i class="fa fa-link"></i> Join</a> 162.243.92.203:27015</td>
                <td>Mirror</td>
                <td><?php echo getStatus("162.243.92.203","27015"); ?></td>
            </tr>
            <tr>
                <td><i class="fa fa-share"></i></td>
                <td>Server 1 Mirror (CA, US)</td>
                <td>sg_island_beta_v3</td>
                <td>San Francisco, United States</td>
                <td><a class="btn btn-info btn-xs" href="steam://connect/208.115.242.123:27015"><i class="fa fa-link"></i> Join</a> 123.123.123.123:27015</td>
                <td>Mirror</td>
                <td><?php echo getStatus("208.115.242.123","27015"); ?></td>
            </tr>
            <tr>
                <td><i class="fa fa-share"></i></td>
                <td>Server 1 Mirror (AM, NL)</td>
                <td>sg_island_beta_v3</td>
                <td>Amsterdam, Netherlands</td>
                <td><a class="btn btn-info btn-xs" href="steam://connect/208.115.242.123:27015"><i class="fa fa-link"></i> Join</a> 123.123.123.123:27015</td>
                <td>Mirror</td>
                <td><?php echo getStatus("208.115.242.123","27015"); ?></td>
            </tr>
            </tbody>


        </table>



    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
    </html>
<?php
function getStatus($q){

    if($q === FALSE) return '<span style="color:red"><i class="fa fa-ban"></i> Offline</span>';
    else return '<span style="color:green"><i class="fa fa-check"></i> Online</span>';
}

function query_source($address)
{
    define( 'SQ_SERVER_ADDR', $address );
    define( 'SQ_SERVER_PORT', 27015 );
    define( 'SQ_TIMEOUT', 1 );
    define( 'SQ_ENGINE', SourceQuery::SOURCE );


    $Query = new SourceQuery( );

    try
    {
        $Query->Connect( SQ_SERVER_ADDR, SQ_SERVER_PORT, SQ_TIMEOUT, SQ_ENGINE );
        var_dump($Query->GetInfo());
        return $Query;
    }
    catch( Exception $e )
    {
        echo $e->getMessage( );
    }

    $Query->Disconnect( );
}



?>