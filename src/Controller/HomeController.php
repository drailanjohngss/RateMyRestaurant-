<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ElasticSearch\IndexRegistry;

$users = IndexRegistry::get('Users');

/**
 * Home Controller
 *
 * Display the Home Page
 */
class HomeController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'restricted']);
        $this->loadModel('Users','Elastic');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('home');
        if($this->loginUser){
            if($this->loginUser['role_id'] == PARENT::ADMIN){
                return $this->redirect(['controller' => 'Admin', 'action' => 'index']);
            }
        }
         $users = $this->Users->find();
        

        $getUser = NULL;
        if($this->loginUser) {
            $getUser = $this->loginUser;
        } else {
            $getUser = NULL;
        }

        $this->set(compact('getUser', 'users'));
    }

    public function restricted() {
        $this->viewBuilder()->setLayout('restricted');
    }

}
