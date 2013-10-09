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
App::uses('CakeEmail', 'Network/Email');

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
    public $uses = array('Tutor', 'User', 'Contact', 'Signup', 'Request', 'TuitionDetail', 'StudentInfo');
    public $helpers = array('Html','Form','Session', 'Captcha');
    public $components = array( 'Session',
                                'Captcha'=>
                                        array('captchaType'=>'image',
                                            'jquerylib'=>true,
                                            'modelName'=>'Signup',
                                            'fieldName'=>'captcha')
                                        ); //load it

    public function captcha()	{
        $this->autoRender = false;
        $this->layout='ajax';
        if(!isset($this->Captcha))	{ //if Component was not loaded throug $components array()
            $this->Captcha = $this->Components->load('Captcha', array(
                'width' => 150,
                'height' => 50,
                'theme' => 'random', //possible values : default, random ; No value means 'default'
            )); //load it
        }
        $this->Captcha->create();
    }

    public function getJSConfig() {
        $this->autoLayout = false;
        $protocol = $_SERVER['SERVER_PROTOCOL'];
        $host = $_SERVER['HTTP_HOST'];
        $protocol = strtolower(substr($protocol, 0, strpos($protocol, '/'))) . '://';
        $url = $protocol . $host . $this->webroot;
        $this->set('rootURL', $url);
        $this->render('config');
    }

    public function index() {
        if ($this->request->is('post')) {

        }else{
        }
    }

    public function tutor_login(){
        if ($this->request->is('post')) {

        }else{
        }
    }

    public function request() {
        if ($this->request->is('post')) {
            $data =$this->request->data['Request'];
            if($data['agreement']>0){
                $request = array('name'=>$data['name'],
                                 'contact'=>$data['contact'],
                                 'email'=>$data['email'],
                                 'contact_preferrence'=>$data['contact_preferrence'],
                                );
                if($this->Request->save($request)){
                    $id = $this->Request->id;
                    // Send email
                    $Email = new CakeEmail('gmail');
                    $Email->template('welcome', 'custom')
                        ->emailFormat('html')
                        ->to('faizal@ibizwerkz.com')
                        ->from(array($request['email']=> $request['name']))
                        ->subject('New Tutor Request')
                        ->send($request);

                    $mydate = $data['start_date']['day'].'/'.$data['start_date']['month'].'/'.$data['start_date']['year'];
                    $mydate = date("Y-m-d H:i:s",strtotime($mydate));
                    $tuition = array('request_id'=>$id ,
                        'lesson_per_week'=>$data['lesson_per_week'],
                        'session_length'=>$data['session_length'],
                        'budget'=>$data['budget'],
                        'other_request'=>$data['other_request'],
                        'tutor_preferrence'=>$data['tutor_preferrence'],
                        'available_timeslot'=>$data['available_timeslot'],
                        'start_date'=>$mydate
                    );

                    $student = array('request_id'=>$id ,
                        'level'=>$data['level'],
                        'options'=>implode(",",$data['options']),
                        'block'=>$data['block'],
                        'street'=>$data['street'],
                        'unit_no'=>$data['unit_no'],
                        'postal_code'=>$data['postal_code'],
                        'address'=>$data['address']
                    );

                    // Save the additional data
                    $this->TuitionDetail->save($tuition);
                    $this->StudentInfo->save($student);

                    $this->Utility->alert("Your request has been submitted. Thank you.", array('type' => 'info', 'dismissOnClick' => true));
                }else{
                    $this->Utility->alert("Please correct the form errors.", array('type' => 'error', 'dismissOnClick' => true));
                }
            }else{
                $this->Utility->alert("Please read and accept our legal terms and conditions in order to request a tutor.", array('type' => 'error', 'dismissOnClick' => true));
            }
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

    public function why_signup() {
        if ($this->request->is('post')) {

        }else{
        }
    }

    public function signup() {
        $this->Captcha = $this->Components->load('Captcha', array('captchaType'=>'image', 'jquerylib'=>true, 'modelName'=>'Signup', 'fieldName'=>'captcha')); //load it
        if ($this->request->is('post')) {
            $tutor = $this->request->data['Tutor'];
            $myuser = array('username'=>$tutor['email'], 'password'=>$tutor['password'],'role'=>'tutor');
            unset($tutor['captcha']);
            if ($this->Tutor->save($tutor) && $this->User->save($myuser)) {
                $this->Signup->setCaptcha($this->Captcha->getVerCode()); //getting from component and passing to model to make proper validation check
                $this->Signup->set($this->request->data);
                if($this->Signup->validates())	{ //as usual data save call
                    // set success message
                    $this->Utility->alert("You have successfully signed up as tutor.", array('type' => 'info', 'dismissOnClick' => true));
                }	else	{ //or
                    $this->Utility->alert("Please correct the form errors.", array('type' => 'error', 'dismissOnClick' => true));
                }

            } else {
                $this->Utility->alert("Please correct the form errors.", array('type' => 'error', 'dismissOnClick' => true));
            }
        }else{
        }
    }

    public function legal() {
        if ($this->request->is('post')) {

        }else{
        }
    }

    public function contact() {
        if ($this->request->is('post')) {
            $user =$this->request->data['Contact'];
            $this->Contact->set($user);
            if($this->Contact->validates()){
                // Send email
                $Email = new CakeEmail('gmail');
                $Email->template('welcome', 'custom')
                    ->emailFormat('html')
                    ->to('faizal@ibizwerkz.com')
                    ->from(array($user['email']=> $user['name']))
                    ->subject($user['subject'])
                    ->send($user);

                $this->Utility->alert("Your message has been sent to us. Please allow us some time to get back to you, Thank you.", array('type' => 'info', 'dismissOnClick' => true));
            }else{
                $this->Utility->alert("Please correct the form errors.", array('type' => 'error', 'dismissOnClick' => true));
            }
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
