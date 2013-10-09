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
class TutorController extends AppController {

    public $uses = array('Tutor', 'User', 'TuitionDetail', 'Request', 'TutorJob');
    public $helpers = array('Html','Form','Session', 'GoogleMap');
    public $components = array('Session', 'Paginator');

    public $paginate = array(
        'Request' => array(
                'limit' => 25,
                'order' => array(
                                    'Request.id' => 'asc'
                                )
                )
    );

    public function profile() {
        if ($this->request->is('post')) {
            if($this->request->is('ajax')) {
                $this->Tutor->id = $this->Session->read('Tutor.id');
                $field = $_POST['name'];
                $val = $_POST['value'];
                $this->Tutor->save(array($field=>$val));
            } else {

            }
        }else{

        }

        $tutor = $this->Tutor->getTutor($this->Session->read('Tutor.username'));
        $this->Session->write('Tutor.id', $tutor['id']);
        $this->set('tutor', $tutor);
    }

    public function assignment(){
        $this->Paginator->settings = array(
            'Request' => array(
                'limit' => 20,
                'order' => array('start_date' => 'desc'),
                'conditions' => '`Request`.`id` NOT IN (select `tutor_job`.`request_id` as `id` from `tutor_job` '.
                                    'where `tutor_job`.`tutor_id` = '.$this->Session->read('Tutor.id').')'
            )
        );
        $data = $this->Paginator->paginate('Request');
        $this->set('data', $data);

        if ($this->request->is('post')) {

        }else{
        }
    }

    public function pending(){
        $this->Paginator->settings = array(
            'Request' => array(
                'limit' => 20,
                'order' => array('start_date' => 'desc'),
                'conditions' => '`Request`.`id` IN (select `tutor_job`.`request_id` as `id` from `tutor_job` '.
                'where `tutor_job`.`status` = "pending" AND `tutor_job`.`tutor_id` = '.$this->Session->read('Tutor.id').')'
            )
        );
        $data = $this->Paginator->paginate('Request');
        $this->set('data', $data);

        if ($this->request->is('post')) {

        }else{
        }
    }

    public function confirmed(){
        $this->Paginator->settings = array(
            'Request' => array(
                'limit' => 20,
                'order' => array('start_date' => 'desc'),
                'conditions' => '`Request`.`id` IN (select `tutor_job`.`request_id` as `id` from `tutor_job` '.
                'where `tutor_job`.`status` = "confirmed" AND `tutor_job`.`tutor_id` = '.$this->Session->read('Tutor.id').')'
            )
        );
        $data = $this->Paginator->paginate('Request');
        $this->set('data', $data);

        if ($this->request->is('post')) {

        }else{
        }
    }

    public function applyAssignment(){
        $this->layout = 'ajax';
        $tutorJob = array('tutor_id'=>$this->Session->read('Tutor.id'),
                          'request_id'=>$_POST['id']);
        $this->TutorJob->save($tutorJob);
        $this->autoRender = false;
    }
}
