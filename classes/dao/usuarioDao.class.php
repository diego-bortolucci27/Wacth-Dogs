<?php
// DAOs (DATA ACCESS OBJECT) - Modelo de persistencia para criar sistemas em orientados em obrjetos.Responsivel por manter os metodos de INSERT, SELECT, DELETE e UPDATE

class usuarioDAO extends conexao{ 
	public $con;

	public function __construct(){ 
		$this->con = new conexao();
	}
	public function login ($usuario){ 
		$sql = $this->con->conectar()->prepare("SELECT * FROM usuario WHERE nomeUsuario = :nome AND senhaUsuario = :senha");
		$sql->bindValue(":nome",$usuario->getNome());
		$sql->bindValue(":senha", $usuario->getSenha());
// bindValue - Vincula um valor a um espaço reservado
		$sql->execute();

		if($sql->rowCount() ==1){ 
			return true;
		}
	}

	public function inserir($usuario){
		$sql = $this->con->conexao()->prepare("INSERT INTO usuario(nomeUsuario,senhaUsuario) VALUES (?,?)");
		$sql->bindValue (1,$usuario->getNome());
		$sql->bindValue (2,$usuario->getSenha());
		$sql->execute();
	}

	public function busca(){
		$sql = $this->con->conexao()->prepare("SELECT * FROM usuario");
		$sql->execute();
		return $sql;
	}

	public function excluir($usuario){
	$sql = $this->con->conexao()->prepare("DELETE FROM usuario WHERE idUsuario = :id");
	$sql->bindValue(":id", $usuario->getId());
	$sql-> execute();
}

public function alterar($usuario){
	$sql = $this->con->conexao()->prepare("UPDATE usuario SET nomeUsuario = :nome, senhaUsuario = :senha WHERE idUsuario = :id");
	$sql->bindValue(":nome", $usuario->getNome());
	$sql->bindValue(":senha", $usuario->getSenha());
	$sql->bindValue(":id", $usuario->getId());
	$sql->execute();
}

}

?>