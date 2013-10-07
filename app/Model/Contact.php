<?php
/*
@OPENEMIS LICENSE LAST UPDATED ON 2013-05-16

OpenEMIS
Open Education Management Information System

Copyright © 2013 UNECSO.  This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by the Free Software Foundation
, either version 3 of the License, or any later version.  This program is distributed in the hope
that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
or FITNESS FOR A PARTICULAR PURPOSE.See the GNU General Public License for more details. You should
have received a copy of the GNU General Public License along with this program.  If not, see
<http://www.gnu.org/licenses/>.  For more information please wire to contact@openemis.org.
*/

App::uses('AppModel', 'Model');

class Contact extends AppModel {
    public $useTable = false;
    public $validate = array(
        'name' => array(
            'message'    => 'Please enter your name',
            'allowEmpty' => false
        ),
        'subject' => array(
            'message'    => 'Please enter your subject',
            'allowEmpty' => false
        ),
        'email'=> array(
            'please enter your email'=>array(
                'rule'=>'notEmpty',
                'message'=>'Please Enter your email'
            ),
            'email does not correct format' => array(
                'rule'=>array('email','true'),
                'message'=>'Email is not correct format'
            )
        ),
        'message' => array(
            'message'    => 'Please enter your message',
            'allowEmpty' => false
        )
    );
}