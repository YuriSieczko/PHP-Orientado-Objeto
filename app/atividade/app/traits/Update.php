<?php

    namespace app\traits;

    trait Update {

        public function update(array $dados) {

                $id = $dados['id'];
                $nome = $dados['nome'];
                $turma = $dados['turma'];
    
                $sql = "UPDATE students SET nome='$nome', turma='$turma' WHERE id=$id";
    
                $stmt = $this->connection->prepare($sql);
                $stmt->execute(); 

        }
    }