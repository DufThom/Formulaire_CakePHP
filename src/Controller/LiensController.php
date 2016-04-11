<?php

namespace App\Controller;

class LiensController extends AppController{

    public function index(){

        $liens = $this->Liens->find('all');
        $this->set('liens', $liens);
    }

    public function details($id){

        $lien = $this->Liens->get($id);
        $this->set('lien', $lien);
    }

    public function ajouter(){

        if ($this->request->is('post')){
            $lien = $this->Liens->newEntity();
            $lien = $this->Liens->patchEntity($lien, $this->request->data);
            if ($this->Liens->save($lien)){
                $this->Flash->success('Votre requête a été sauvegardée.');
                $this->redirect("/liens/index");
            }
            else{
                $this->Flash->error('Impossible d\'ajouter votre lien.');
            }
        }
    }

    public function modif($id){ //GET POST

        $lien = $this->Liens->get($id);
        if($this->request->is('post')){
            $this->Liens->patchEntity($lien, $this->request->data);
            if($this->Liens->save($lien)){
                $this->Flash->success('Modification enregistrée');
                $this->redirect("/liens/index/");
            }
            else{
                $this->Flash->error('Erreur de Modification');
            }
        }
        $this->set('lien', $lien);

    }

    public function supprim($id){

        $lien = $this->Liens->get($id);
        if($this->request->is('post')){
            $this->Liens->delete($lien, $this->request->data);
            if($this->Liens->save($lien)){
                $this->Flash->success('Suppression effectuée.');
                $this->redirect("/liens/index/");
            }
            else{
                $this->Flash->error('Erreur de suppression.');
            }
        }

        $this->set('lien', $lien);
    }

}


















