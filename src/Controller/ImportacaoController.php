<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;
use Cake\Filesystem\File;
use Cake\Utility\Xml;
use Cake\Validation\Validator;
use Symfony\Component\Config\Definition\Exception\Exception;
Use App\Lib\Atividade;

/**
 * Importa Controller
 *
 * @property \App\Model\Table\ImportacaoTable $Importa
 */
class ImportacaoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        if ($this->request->is(['post'])) {
            $validator = new Validator();
            $validator
            ->notEmpty('files','Envie ao menos 1 arquivo xml do MS Project')
            ->requirePresence('files','Envie ao menos 1 arquivo');
//            ->add('files', [
//                    'files' => [
//                        'rule' => ['mimeType', 'text/xml'],
//                        'message' => 'Envie apenas arquivo xml',
//                    ]
//                ]);
            $errors = $validator->errors($this->request->data());
            if (empty($errors)) {
                try{
                    $file = $this->request->data['files'][0];
                    //print_r($file);
                    $arquivo = new File($file['tmp_name'],false,0755);
                    $this->set('mime',$arquivo->mime());
                    //$this->set('conteudo', $arquivo->read(false,'rb',true));
                    $conteudo = simplexml_load_file($file['tmp_name']);
                    //$host=$conteudo->Server->Host;
                    //$this->set('conteudo', $conteudo->Servers->Server);
                    //$this->set('conteudo', $conteudo->asXML());

//                    foreach($conteudo->Servers->Server as $server){
//                        $host[] = $server->host;
//                        $this->set('conteudo',$server->host);
//                        //print($server);
//                    }

                    foreach($conteudo->Resources->Resource as $recurso){
                        if(!is_null($recurso->Name)){
                            $nomeRecurso = $recurso->Name;
//                            $this->set('conteudo',$nomeRecurso);
                        }
                        print_r($recurso);
                    }

                    foreach($conteudo->Tasks->Task as $atividade){
                        if(!is_null($atividade->Name)){
                            $nomeAtividade = $recurso->Name;
//                            $this->set('conteudo',$nomeRecurso);
                        }
                        print_r($recurso);
                    }

                    foreach($conteudo->Assignments->Assignment as $atribuicao){
                        if(!is_null($atribuicao->Name)){
                            $nomeAtribuicao = $atribuicao->Name;
//                            $this->set('conteudo',$nomeRecurso);
                        }
                        print_r($atribuicao);
                    }


                }
                catch (Exception $e){
                    print $e->getMessage();
                }
            }
            else{
                $this->Flash->error($validator->errors($this->request->data()));
            }
        }
    }

    /**
     * View method
     *
     * @param string|null $id Importum id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
//        $importum = $this->Importa->get($id, [
//            'contain' => []
//        ]);
//        $this->set('importum', $importum);
//        $this->set('_serialize', ['importum']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {


    }

    /**
     * Edit method
     *
     * @param string|null $id Importum id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
//        $importum = $this->Importa->get($id, [
//            'contain' => []
//        ]);
//        if ($this->request->is(['patch', 'post', 'put'])) {
//            $importum = $this->Importa->patchEntity($importum, $this->request->data);
//            if ($this->Importa->save($importum)) {
//                $this->Flash->success(__('The importum has been saved.'));
//                return $this->redirect(['action' => 'index']);
//            } else {
//                $this->Flash->error(__('The importum could not be saved. Please, try again.'));
//            }
//        }
//        $this->set(compact('importum'));
//        $this->set('_serialize', ['importum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Importum id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
//        $this->request->allowMethod(['post', 'delete']);
//        $importum = $this->Importa->get($id);
//        if ($this->Importa->delete($importum)) {
//            $this->Flash->success(__('The importum has been deleted.'));
//        } else {
//            $this->Flash->error(__('The importum could not be deleted. Please, try again.'));
//        }
//        return $this->redirect(['action' => 'index']);
    }
}
