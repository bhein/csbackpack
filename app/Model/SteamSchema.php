<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Brenhein
 * Date: 10/12/13
 * Time: 6:47 PM
 * To change this template use File | Settings | File Templates.
 */

class Steamschema extends AppModel {
    public $useDbConfig = 'steam';
    public $useTable = 'steamschemas';

    function schema() {
        $this->_schema = array(
            'status' => array('type' => 'integer'),
            'items_game_url' => array('type' => 'String'),
        );
        return $this->_schema;
    }

}