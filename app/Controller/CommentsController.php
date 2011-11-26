<?php
class CommentssController extends AppController{
    public $helpers = array('Html','Form');

    public function add($event_id = null){
        if($this->request->is('post')){
            if($this->Post->save($this->request->data)){
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action'=>'index'));
            }
        }
    }

    public function edit($id = null){
        $this->Post->id = $id;
        if($this->request->is('get')){
            $this->request->data = $this->Post->read();
           // $this->set('post',$this->Post->read());
        }else{
            if($this->Post->save($this->request->data)){
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action'=>'index'));
            }
        }
    }

    public function delete($id){
        if(!$this->request->is('post')){
            throw new MethodNotAllowedExeption();
        }
        if($this->Post->delete($id)){
            $this->Session->setFlash('The post with id: '.$id.' has been deleted.');
            $this->redirect(array('action'=>'index'));
        }
    }
}
