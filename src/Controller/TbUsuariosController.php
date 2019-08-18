<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbUsuarios Controller
 *
 * @property \App\Model\Table\TbUsuariosTable $TbUsuarios
 *
 * @method \App\Model\Entity\TbUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TbUsuariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tbUsuarios = $this->paginate($this->TbUsuarios);

        $this->set(compact('tbUsuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Tb Usuario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbUsuario = $this->TbUsuarios->get($id, [
            'contain' => []
        ]);

        $this->set('tbUsuario', $tbUsuario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbUsuario = $this->TbUsuarios->newEntity();
        if ($this->request->is('post')) {
            $tbUsuario = $this->TbUsuarios->patchEntity($tbUsuario, $this->request->getData());
            if ($this->TbUsuarios->save($tbUsuario)) {
                $this->Flash->success(__('The tb usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('tbUsuario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbUsuario = $this->TbUsuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbUsuario = $this->TbUsuarios->patchEntity($tbUsuario, $this->request->getData());
            if ($this->TbUsuarios->save($tbUsuario)) {
                $this->Flash->success(__('The tb usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('tbUsuario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbUsuario = $this->TbUsuarios->get($id);
        if ($this->TbUsuarios->delete($tbUsuario)) {
            $this->Flash->success(__('The tb usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The tb usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
