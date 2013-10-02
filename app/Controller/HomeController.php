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
class HomeController extends AppController {

    /**
     * This controller does not use a model
     *
     * @var array
     */
    public $uses = array('Tutor');
    public $helpers = array('Html', 'Form', 'Captcha');
    public $components = array('Captcha'=>
                                        array('captchaType'=>'image',
                                            'jquerylib'=>true,
                                            'modelName'=>'Signup',
                                            'fieldName'=>'captcha')
                                        ); //load it

    public function index() {
        if ($this->request->is('post')) {

        }else{
        }
    }

    public function request() {
        if ($this->request->is('post')) {

        }else{
        }
    }

    public function rates() {
        if ($this->request->is('post')) {

        }else{
        }
    }

    public function testimonial() {
        if ($this->request->is('post')) {

        }else{
        }
    }

    public function login() {
        if ($this->request->is('post')) {

        }else{
        }
    }

    public function information() {
        if ($this->request->is('post')) {

        }else{
        }
    }

    public function signup() {
        if ($this->request->is('post')) {
            $tutor = $this->request->data;
            unset($tutor['password2']);
            unset($tutor['captcha']);
            if ($this->Tutor->save($tutor['Signup'])) {
                // set success message
                $this->Utility->alert("You have successfully signed up as tutor.", array('type' => 'info', 'dismissOnClick' => true));
            } else {
                $this->Utility->alert("Please correct the form errors.", array('type' => 'error', 'dismissOnClick' => true));
            }
        }else{
        }
    }

    public function contact() {
        if ($this->request->is('post')) {

        }else{
        }
    }

    public function faq() {
        if ($this->request->is('post')) {

        }else{
        }
    }

    public function about() {
        if ($this->request->is('post')) {

        }else{
        }
    }

    public function tuition_rate() {
        if ($this->request->is('post')) {

        }else{
        }
    }
}
