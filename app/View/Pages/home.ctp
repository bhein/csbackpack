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
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                MCTI Top 4
            </div>
            <div class="panel-body">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            CS:GO Weapon Case
                        </div>
                        <div class="panel-body">
                            <img src="http://cdn.steamcommunity.com/economy/image/gcXF0Nt-WBI_-VjNW3nTljmJD2GfDlZS6zeL17-fmzFIzvIrgmIeAJ8gRDN9GY8YIY5UJpYRVlbtPIzFvomMO0eM9SGUdwMLpG1GL3VFwQsjnA90-lcYU_g2vYe_1YwyHsfkdZc0CFTKOBQ6JQKMDmSZTieUFkANumHb16Lf2WYZkLslkykcC5w=/62fx62f">
                        </div>
                        <div class="panel-footer">
                            $0.00
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            eSports 2013 Case
                        </div>
                        <div class="panel-body">
                            <img src="http://cdn.steamcommunity.com/economy/image/OKW3LY8yojBqzk_hJ_hZzYDpfZzLQqxwvgCc-8MeEWrxroDW1i7kIsoXUx8BmAVDmO4m28JdrHS4C5vpwggGYP7sh9zAO_kp8VpRAwnES1Ca_H2JrgjwbbQWgemyX1U-o-2TjJQooiSeWwVJXIBRB9H7a42VWLIkv1bH_tVdVDepp8SMxC2gcpwLHgAC0A==/62fx62f">
                        </div>
                        <div class="panel-footer">
                            $0.00
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Operation Bravo Case
                        </div>
                        <div class="panel-body">
                            <img src="http://cdn.steamcommunity.com/economy/image/EqJy7AOc8l9HaH-0hkK9qaruuF1H7Pwfk6asrmKk9Q7bqUUXWoC0TeexY0qgIuEnsunjGk7z_BuVrau8Y7LiBNTrQh1MlalG3PxhVqh-rzSw-7hIIqyjF4SjsaYjud4C0-oCHB-DohDhqjIS_j3jYKas-xxLoeVDxPKj-y-xuA6J9QZAHYf1GeKpLlWjag==/62fx62f">
                        </div>
                        <div class="panel-footer">
                            $0.00
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            AUG | Wings (Minimal Wear)
                        </div>
                        <div class="panel-body">
                            <img src="http://cdn.steamcommunity.com/economy/image/zaphNZu0u2-fdGdkxTGmx3Xmq4TfxLUvS7q0fiHX7mAEoVbOwqj9fT-te5rjUfpJbeHww9bbtStNsbNsIMH5agvjQsTTrPp0L9x_kOAb6Vhp97vbko77MkGwgn56w8VtHJNAxNS5530p8EeU-xnEVXT1t4DL3P5zSOvveTfGqz1Q_R_CgK_uLzqyKcG-HasKJaHult3d-yZL7-gvaYrqawI=/62fx62f">
                        </div>
                        <div class="panel-footer">
                            $0.00
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
