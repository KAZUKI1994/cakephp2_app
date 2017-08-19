<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/14/17
 * Time: 17:36
 */

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class UsersController extends AppController{

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout');
    }

    public function login(){
        if($this->request->is('post')){
            if($this->Auth->login()){
                $this->redirect($this->Auth->redirect());
            }else{
                $this->Flash->error(__('Invalid username or password, try again'));
            }
        }
    }

    public function logout(){
        $this->redirect($this->Auth->logout());
    }

    public function index(){
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null){
        $this->User->id = $id;
        if(!$this->User->exists()){
            throw new NotFoundException(__('Invalid User'));
        }
        $this->set('user', $this->User->findById($id));
    }

    public function add(){
        if($this->request->is('post')){
            debug($this->request->data);
            $this->User->create();
            if($this->User->saveAll($this->request->data)){
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('The user could not be saved. Please try again.'));
        }
    }

    public function edit($id = null){
        $this->User->id = $id;
        if(!$this->User->exists()){
            throw new NotFoundException(__('Invalud user'));
        }
        if($this->request->is('post') || $this->request->is('put')){
            if($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('The user could not be saved. Please try again.'));
        }else{
                $this->request->data = $this->User->findById($id);
                unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null){
        $email = new CakeEmail('default');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if(!$this->User->exists()){
            throw new NotFoundException(__('Invalid User'));
        }
        if($this->User->delete()) {

            // 削除完了メールの送信
            $arrVal = array(
                'id' => $id,
            );
            $email->template('user_delete')
                ->viewVars($arrVal)
                ->to('econoics0it0bem0116@gmail.com')
                ->subject('アカウントは正常に削除されました。')
                ->send();

            // 一覧画面への遷移
            $this->Flash->success(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }
}