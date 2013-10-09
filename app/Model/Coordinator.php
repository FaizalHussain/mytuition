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

class Coordinator extends AppModel {
    public $useTable = "coordinator";
    public $validate = array(
        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please enter your name'
            )
        ),
        'contact' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please enter your Contact'
            )
        ),
        'email' => array(
            'email_not_blank' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter your email'
            ),
            'email_not_valid' => array(
                'rule' => 'email',
                'message' => 'Please provide a valid email address.'
            ),
            'unique' => array(
                'rule'    => 'isUnique',
                'message' => 'This email has already been used.'
            )
        ),
        'password' => array(
            'password_not_blank' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter your password'
            ),
            'password_length_valid' => array(
                'rule' => array('minLength', 6),
                'message' => 'Password must be at least 6 characters long.',
            )
        ),
        'cPassword' => array(
            'password_not_blank' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter your Re-Enter password'
            ),
            'password_match_valid' => array(
                'rule' => 'checkPasswords',
                'message'=>'Password & Re-Enter Password must be match.'
            )
        )
    );

    public function checkPasswords()     // to check pasword and confirm password
    {
        if(strcmp($this->data['Coordinator']['password'],$this->data['Coordinator']['cPassword']) == 0 )
        {
            return true;
        }
        return false;
    }
}