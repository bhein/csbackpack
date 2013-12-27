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
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<div class="lead jumbotron">
    <h1>Welcome to <span style="color:#c48621">CS</span>BACKPACK</h1>
    <p class="lead">counter-strike: global offensive player & market statistics</p>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Search
            </div>
            <div class="panel-body">
                <input class="typeahead" type="text" placeholder="Search Players/Items">

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Market Common Trade Index (MCTI)
            </div>
            <div class="panel-body">
                <p style="text-align: center; font-size: 48px;">0.00 <span class="label label-danger">&plusmn; 0.00%</span> </p>
                <p style="text-align: center; font-size: 24px;"><span class="label label-default">Noon 0.00</span> <span class="label label-default">Midnight 0.00</span></p>
                <a class="btn btn-default btn-block" href="#">MCTI Dashboard</a>
            </div>
        </div>
    </div>
</div>

