<?php
	require __DIR__ . '/SourceQuery/SourceQuery.class.php';
	
	// Edit this ->
	define( 'SQ_SERVER_ADDR', 'localhost' );
	define( 'SQ_SERVER_PORT', 27015 );
	define( 'SQ_TIMEOUT',     1 );
	define( 'SQ_ENGINE',      SourceQuery :: SOURCE );
	// Edit this <-
	
	$Timer = MicroTime( true );
	
	$Query = new SourceQuery( );
	
	$Info    = Array( );
	$Rules   = Array( );
	$Players = Array( );
	
	try
	{
		$Query->Connect( SQ_SERVER_ADDR, SQ_SERVER_PORT, SQ_TIMEOUT, SQ_ENGINE );
		
		$Info    = $Query->GetInfo( );
		$Players = $Query->GetPlayers( );
		$Rules   = $Query->GetRules( );
	}
	catch( Exception $e )
	{
		$Exception = $e;
	}
	
	$Query->Disconnect( );
	
	$Timer = Number_Format( MicroTime( true ) - $Timer, 4, '.', '' );
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Source Query PHP Class</title>
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css">
	<style type="text/css">
		.jumbotron {
			margin-top: 30px;
			border-radius: 0;
		}
		
		.table thead th {
			background-color: #428BCA;
			border-color: #428BCA !important;
			color: #FFF;
		}
	</style>
</head>

<body>
    <div class="container">
		<div class="jumbotron">
			<h1>Source Query PHP Class</h1>
			
			<p>This class was created to query game server which use the Source query protocol, this includes all source games, half-life 1 engine games and Call of Duty: Modern Warfare 3</p>
			
			<p>
				<a class="btn btn-large btn-primary" href="http://xpaw.ru">Made by xPaw</a>
				<a class="btn btn-large btn-primary" href="https://github.com/xPaw/PHP-Source-Query-Class">View on GitHub</a>
				<a class="btn btn-large btn-danger" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">CC BY-NC-SA 3.0</a>
			</p>
		</div>
		
<?php if( isset( $Exception ) ): ?>
		<div class="panel panel-primary">
			<div class="panel-heading"><?php echo Get_Class( $Exception ); ?> at line <?php echo $Exception->getLine( ); ?></div>
			<p><b><?php echo htmlspecialchars( $Exception->getMessage( ) ); ?></b></p>
			<p><?php echo nl2br( $e->getTraceAsString(), false ); ?></p>
		</div>
<?php else: ?>
		<div class="row">
			<div class="col-sm-6">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th colspan="2">Server Info <em>(queried in <?php echo $Timer; ?>s)</em></th>
						</tr>
					</thead>
					<tbody>
<?php if( Is_Array( $Info ) ): ?>
<?php foreach( $Info as $InfoKey => $InfoValue ): ?>
						<tr>
							<td><?php echo htmlspecialchars( $InfoKey ); ?></td>
							<td><?php
	if( Is_Array( $InfoValue ) )
	{
		echo "<pre>";
		print_r( $InfoValue );
		echo "</pre>";
	}
	else
	{
		echo htmlspecialchars( $InfoValue );
	}
?></td>
						</tr>
<?php endforeach; ?>
<?php else: ?>
						<tr>
							<td colspan="2">No information received</td>
						</tr>
<?php endif; ?>
					</tbody>
				</table>
			</div>
			<div class="col-sm-6">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Players</th>
						</tr>
					</thead>
					<tbody>
<?php if( Is_Array( $Players ) ): ?>
<?php foreach( $Players as $Player ): ?>
						<tr>
							<td><?php echo htmlspecialchars( $Player[ 'Name' ] ); ?></td>
						</tr>
<?php endforeach; ?>
<?php else: ?>
						<tr>
							<td>No players in da house</td>
						</tr>
<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th colspan="2">Rules</th>
						</tr>
					</thead>
					<tbody>
<?php if( Is_Array( $Rules ) ): ?>
<?php foreach( $Rules as $Rule => $Value ): ?>
						<tr>
							<td><?php echo htmlspecialchars( $Rule ); ?></td>
							<td><?php echo htmlspecialchars( $Value ); ?></td>
						</tr>
<?php endforeach; ?>
<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
<?php endif; ?>
	</div>
</body>
</html>
