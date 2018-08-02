<?php

class Student extends AppModel
{
    public $hasMany = 'Note';

    public $validate = array(
        'first_name' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Ce champs ne doit pas être vide'
        )),
        'last_name' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Ce champs ne doit pas être vide'
        )),
        'birtday' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Ce champs ne doit pas être vide'
        )));
}
