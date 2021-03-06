<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Ratings Controller
 *
 * @property \App\Model\Table\RatingsTable $Ratings
 *
 * @method \App\Model\Entity\Rating[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RatingsController extends AppController
{
    public function isAuthorized($user = null)
    {
       if($this->loginUser['role_id'] == PARENT::ADMIN) {
           return true;
       } else if ($this->request->getParam('action') == 'add'){
           return true;
       }
    }

    public function initialize()
    {
        parent::initialize();
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        if ($this->request->is('ajax')) {
            $this->layout = 'ajax';
        }

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Restaurants']
        ];
        $ratings = $this->paginate($this->Ratings);

        $this->set(compact('ratings'));
    }

    /**
     * View method
     *
     * @param string|null $id Rating id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rating = $this->Ratings->get($id, [
            'contain' => ['Users', 'Res']
        ]);

        $this->set('rating', $rating);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if ($this->request->is('ajax')) {
             $this->autoRender = false;
        }
        if ($this->request->is('post')) {
            $rating = $this->Ratings->newEntity();
            $rating->rating = $this->request->getData('ratings');
            $rating->user_id = $this->loginUser['id'];
            $rating->restaurant_id = $this->request->getData('restaurant_id');

            if ($this->Ratings->save($rating)) {
                echo 'Success';
            }
        }
        // $rating = $this->Ratings->newEntity();
        // if ($this->request->is('post')) {
        //     $rating = $this->Ratings->patchEntity($rating, $this->request->getData());
        //     if ($this->Ratings->save($rating)) {
        //         $this->Flash->success(__('The rating has been saved.'));
        //
        //         return $this->redirect(['action' => 'index']);
        //     }
        //     $this->Flash->error(__('The rating could not be saved. Please, try again.'));
        // }
        // $users = $this->Ratings->Users->find('list', ['limit' => 200]);
        // $res = $this->Ratings->Restaurants->find('list', ['limit' => 200]);
        // $this->set(compact('rating', 'users', 'res'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rating id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rating = $this->Ratings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rating = $this->Ratings->patchEntity($rating, $this->request->getData());
            if ($this->Ratings->save($rating)) {
                $this->Flash->success(__('The rating has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rating could not be saved. Please, try again.'));
        }
        $users = $this->Ratings->Users->find('list', ['limit' => 200]);
        $res = $this->Ratings->Restaurants->find('list', ['limit' => 200]);
        $this->set(compact('rating', 'users', 'res'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rating id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rating = $this->Ratings->get($id);
        if ($this->Ratings->delete($rating)) {
            $this->Flash->success(__('The rating has been deleted.'));
        } else {
            $this->Flash->error(__('The rating could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
