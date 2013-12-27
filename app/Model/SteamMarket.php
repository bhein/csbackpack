<?php
class Steammarket extends AppModel {
    public $useDbConfig = 'steam';
    function schema() {
        $this->_schema = array(
            'id' => array('type' => 'integer'),
            'original_id' => array('type' => 'integer'),
            'defindex' => array('type' => 'integer'),
            'level' => array('type' => 'integer'),
            'quality' => array('type' => 'integer'),
            'inventory' => array('type' => 'integer'),
            'quantity' => array('type' => 'integer'),
            'rarity' => array('type' => 'integer'),
        );
        return $this->_schema;
    }
}