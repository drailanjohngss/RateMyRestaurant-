<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Admin Controller
 *
 * Display the Admin Page
 */
class AdminController extends AppController
{
        public function isAuthorized($user = null)
       {
           if ($user['role_id'] == PARENT::ADMIN) //admin privileges
               return true;
       }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->set('getUser', $this->loginUser);

    }

}
