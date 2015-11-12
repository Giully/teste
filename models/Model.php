<?php


    class Model extends CI_Model{ // Todo model tem que ser filho de ci-model
        public function insert(Usuario $usu){ //inserir no banco de dados ---  controller vai pegar usu q o usuario digitou
            $this->db->insert('Usuario',$usu);//nome tabela
        }
        public function searchAll(){
            $query = $this->db->query("Select * from Usuario");//seleciona todos da tabela usuario
            return $query->result(); //return manda o resultado da query para o controller
        }
        
        
      public function getUser($nome,$pass){
		$this->db->where('nome',$nome);
		$this->db->where('pass',$pass);
		$a = $this->db->get('Usuario');
		if ($a->num_rows()>0){
			if($a->row()->nome === "root"){
				return "admin";
			}else{
				return "comum";
			}
		}else{
			return false;
		}
	}
	
    }
    
    //variavel $a vai dar o resultado do banco de dados, o get funciona como select 