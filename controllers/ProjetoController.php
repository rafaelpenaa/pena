<?php
require_once 'model/Projeto.php';

class ProjetoController {
    public function all() {
        $obj = new Projeto();
        $projetos = $obj->all();
        require_once 'view/Projeto_all.php';
    }

    public function create() {
        $obj = new Projeto();
        if (isset($_POST['nome']) && isset($_POST['duracao'])) {
            $obj->setNome($_POST['nome']);
            $obj->setDuracao($_POST['duracao']);
            $obj->create();
            $projeto = $obj->read();
            $projeto = (object) [
            'id' => null,
            'nome' => '',
            'duracao' => '',
            ];
        }
        require_once 'view/Projeto_create.php';
    }
        public function read() {
            $obj = new Projeto();
            $obj->setId($_GET['id']);
            $projeto = $obj->read();
            require_once 'view/Projeto_read.php';
        }
        
        public function update() {
            $obj = new Projeto();
            $obj->setId($_GET['id']);
            if (isset($_POST['nome'])) {
                $obj->setNome($_POST['nome']);
            } else {
                $obj->setDuracao($_POST['duracao']);
            }
            $obj->update();
            $projeto = $obj->read();
            require_once 'view/Projeto_update.php';
        }
        
        public function delete() {
            $obj = new Projeto();
            $obj->setId($_GET['id']);
            if ($obj->delete()) {
                header("Location: ./");
            }
        }
    }
