<?php 

class Model_Find extends Orm\Model
{
    protected static $_table_name = 'find';

    protected static $_primary_key = array('id_user','id_maps_place');
    protected static $_properties = array(
        'id', // both validation & typing observers will ignore the PK
        

    );

    protected static $_has_many = array(
        'users' => array(
            'key_from' => 'id',
            'model_to' => 'Model_Places',
            'key_to' => 'id_maps',
            'cascade_save' => false,
            'cascade_delete' => false,
        )
    );
}