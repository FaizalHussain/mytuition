<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class UserController extends AppController {

    public $uses = array('Tutor', 'User');
    public $helpers = array('Html','Form','Session');
    public $components = array('Session');

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $user = $this->Auth->user();
                switch($user['role']){
                    case 'tutor':
                        $tutor = $this->request->data['User'];
                        $this->Session->write('Tutor.username', $tutor['username']);
                        $this->redirect(array('controller' => 'Tutor', 'action' => 'profile'));
                        break;
                    case 'coordinator':
                        $coordinator = $this->request->data['User'];
                        $this->Session->write('Coordinator.username', $coordinator['username']);
                        $this->redirect(array('controller' => 'Coordinator', 'action' => 'create'));
                        break;
                    case 'admin':
                        pr('admin');
                        die;
                        break;
                }
            }else{
                $this->Utility->alert("Invalid username or password, try again", array('type' => 'error', 'dismissOnClick' => true));
            }
        }
    }

    public function logout() {
        $this->Session->destroy();
        $this->Utility->alert("You have successfully signed out", array('type' => 'success', 'dismissOnClick' => true));
        return $this->redirect($this->Auth->logout());
    }
}
