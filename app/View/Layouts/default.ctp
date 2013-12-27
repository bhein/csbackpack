<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __('CSBackpack');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('custom-strap');

		echo $this->fetch('meta');
		echo $this->fetch('script');
	?>

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

</head>
<body>



        <nav id="navbar-example" class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/"><span style="color:#c48621">CS</span><span style="color: white">BACKPACK</span></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#" class="eligible-for-glow">Home</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
                <!--<div class="collapse navbar-collapse bs-js-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Action</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Another action</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Dropdown 2 <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Action</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Another action</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>-->

                    <ul class="nav navbar-nav navbar-right">
                        <li>

                        </li>
                        <li id="fat-menu" class="dropdown">
                            <?php if(!$this->Session->check('User.steamid')){ ?>
                                <a href="/users/login"><img src="http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_small.png"></a>
                            <?php } else { ?>
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><img height="24" width="24" src="<?php echo $this->Session->read("User.avatar"); ?>" style="border-color: #FFF; border-width: medium;"> <?php if($this->Session->read("User.rank") >= 3){ echo "♕"; } ?> <?php echo $this->Session->read("User.name"); ?> <i class="icon-white icon-caret-down"></i></a>
                            <?php } ?>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="/dashboard"><i class="icon-dashboard"></i> Dashboard</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="/users/signout"><i class="icon-signout"></i> Sign out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </nav>



        <div class="container">
            <div class="span12">

                <?php echo $this->fetch('content'); ?>
            </div>

        </div>




	<?php echo $this->element('sql_dump'); ?>




    <div class="footer">
        <div class="container">
            <p class="text-muted credit">
                <div class="pull-left" style="padding-bottom: 10px">
                    Copyright &copy; 2013 Craftbans LLC.<br>
                    Powered by <a href="http://steampowered.com">Steam</a>, <a href="http://getbootstrap.com">Twitter Bootstrap</a>, and <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>.
                </div>
                <div class="pull-right" style="padding-bottom: 10px">

                    <a href="http://cakephp.org/"><img src="http://cakephp.org/img/logo/powered_by_cake_logo_25.png"></a>
                </div>
            </p>

        </div>
    </div>



        <script src="http://twitter.github.com/hogan.js/builds/2.0.0/hogan-2.0.0.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('.typeahead').bind('typeahead:selected', function(obj, datum) {
                    console.log(datum);
                    window.location.href = datum.link;
                });
                $('.typeahead').typeahead(
                    {
                        name: 'items',
                        prefetch: '/search/items/',
                        remote: '/search/items/%QUERY',
                        header: '<h3 class="search-header">Items</h3>',
                        template: [
                            '<div class="row">',
                            '<div class="col-md-2"><img style="max-height: 2em; width: auto;" src="{{image}}"></div>',
                            '<div class="col-md-7"><strong>{{name}}</strong></div>',
                            '<div class="col-md-3"><span class="label label-default">{{price}}</span></div>',
                            '</div>'
                        ].join(''),
                        engine: Hogan
                    },
                    {
                        name: 'people',
                        prefetch: '/search/players/',
                        remote: '/search/players/%QUERY',
                        header: '<h3 class="search-header">People</h3>',
                        template: [
                            '<a href="{{link}}"><p class="person-name">{{name}}</p></a>',
                        ].join(''),
                        engine: Hogan
                    }
                );
            });
        </script>
        <?php
        echo $this->Html->script('typeahead.min');
        ?>
</body>
</html>
