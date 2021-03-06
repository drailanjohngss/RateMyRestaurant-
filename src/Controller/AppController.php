<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Routing\Router;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    const ADMIN = 1;


    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
          'authenticate' => [
              'Form' => [
                  'fields' => [
                      'username' => 'email',
                      'password' => 'password'
                  ]
              ]
          ],
          'loginAction' => [
              'controller' => 'Users',
              'action' => 'login'
          ],
           //use isAuthorized in Controllers
          'authorize' => ['Controller'],
           // If unauthorized, return them to page they were just on
          'unauthorizedRedirect' => ['controller' => 'Home', 'action' => 'restricted']

      ]);

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        $csrf = $this->request->getCookie('csrfToken');
        $this->set('csrf', $csrf);
        $getUser = $this->Auth->user();
        if($getUser) {
            $this->loginUser = $getUser;
            $this->set('loginUser', $this->loginUser );
        }

        $getAction = Router::url($this->here);
        $this->set('getAction', $getAction);
        $this->session = $this->request->session();


    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->loadModel('Restaurants');
        $this->loadModel('Uploads');

    }

}
