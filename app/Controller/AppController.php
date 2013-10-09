<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
App::uses('Controller', 'Controller');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $theme = "Cakestrap";
    public $helpers = array('Html','GoogleMap', 'Form', 'Session', 'Js' => array('Jquery'), 'Session', 'Utility');
    public $components = array(
        'Session',
        'Paginator',
        //'DebugKit.Toolbar',
        'Utility',
        'Auth' => array(
        'loginAction' => array(
            'controller' => 'User',
            'action' => 'login'
        ),
        'authenticate' => array(
            'form' => array('userModel' => 'User')
        )
    )
    );

    public function beforeFilter() {
        $this->Auth->allow('index', 'request', 'rates', 'testimonial', 'tutor_login', 'information', 'signup', 'why_signup', 'legal', 'contact', 'faq', 'about', 'tuition_rate', 'captcha', 'getJSConfig');
        $this->Session->write('Page.url', $this->curPageURL());
        $this->Session->write('Page.rootUrl', $this->getRootURL());
        if($this->Auth->user()){
            $this->set('authUser', $this->Auth->user());
        }
    }

    function curPageURL() {
        $pageURL = 'http';
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }
        return $pageURL;
    }

    public function getRootURL() {
        $protocol = $_SERVER['SERVER_PROTOCOL'];
        $host = $_SERVER['HTTP_HOST'];
        $protocol = strtolower(substr($protocol, 0, strpos($protocol, '/'))) . '://';
        $url = $protocol . $host . $this->webroot;
        return $url;
    }
}
