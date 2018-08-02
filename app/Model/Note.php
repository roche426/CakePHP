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
        )),
        'note' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Ce champs ne doit pas être vide'),
            'between' => array(
                'rule' => array('range', -1, 21),
                'message' => 'Merci d\'entrer un nombre entre 0 et 20'
        ))
    );
}
