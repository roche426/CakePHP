<?php

class Note extends AppModel
{
    public $validate = array(
        'discipline' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Ce champs ne doit pas être vide'
        ))
    );
}
