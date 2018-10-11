<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Libraries Controller
 *
 * @property \App\Model\Table\LibrariesTable $Libraries
 *
 * @method \App\Model\Entity\Library[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LibrariesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
           // 'contain' => ['Adresses', 'Users']
        ];
        $libraries = $this->paginate($this->Libraries);

        $this->set(compact('libraries'));
    }

    /**
     * View method
     *
     * @param string|null $id Library id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $library = $this->Libraries->get($id, [
          //  'contain' => ['Adresses', 'Users']
        ]);

        $this->set('library', $library);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $library = $this->Libraries->newEntity();
        if ($this->request->is('post')) {
            $library = $this->Libraries->patchEntity($library, $this->request->getData());
            if ($this->Libraries->save($library)) {
                $this->Flash->success(__('The library has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The library could not be saved. Please, try again.'));
        }
        $adresses = $this->Libraries->Adresses->find('list', ['limit' => 200]);
        $users = $this->Libraries->Users->find('list', ['limit' => 200]);
        $this->set(compact('library', 'adresses', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Library id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $library = $this->Libraries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $library = $this->Libraries->patchEntity($library, $this->request->getData());
            if ($this->Libraries->save($library)) {
                $this->Flash->success(__('The library has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The library could not be saved. Please, try again.'));
        }
        $adresses = $this->Libraries->Adresses->find('list', ['limit' => 200]);
        $users = $this->Libraries->Users->find('list', ['limit' => 200]);
        $this->set(compact('library', 'adresses', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Library id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $library = $this->Libraries->get($id);
        if ($this->Libraries->delete($library)) {
            $this->Flash->success(__('The library has been deleted.'));
        } else {
            $this->Flash->error(__('The library could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
