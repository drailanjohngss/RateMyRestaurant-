<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ratings Controller
 *
 * Display the Home Page
 */
class HomeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('home');
        $getUser = NULL;
        if($this->loginUser) {
            $getUser = $this->loginUser;
        } else {
            $getUser = NULL;
        }

        $this->set(compact('getUser'));
    }

}
