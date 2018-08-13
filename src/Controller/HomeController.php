<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

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
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        if($this->loginUser){
            if($this->loginUser['role_id'] == PARENT::ADMIN){
                return $this->redirect(['controller' => 'Admin', 'action' => 'index']);
            }
        }
        $this->viewBuilder()->setLayout('home');
        $getUser = NULL;
        if($this->loginUser) {
            $getUser = $this->loginUser;
        } else {
            $getUser = NULL;
        }

        $this->set(compact('getUser'));
    }

    public function restricted() {
        $this->viewBuilder()->setLayout('restricted');
    }

}
