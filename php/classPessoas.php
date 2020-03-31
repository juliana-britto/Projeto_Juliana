<?php

class Pessoa
{
    public $codigo;
    public $nome;
    public $telefone;
    public $email;
	public $endereco;
	public $mensagem;
    
        //método construtor: inicializa propriedades
    function __construct($codigo, $nome, $telefone, $email, $endereco, $mensagem)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
		$this->endereco = $endereco;        
		$this->mensagem = $mensagem;        
    }//método destrutor:finaliza Objeto

    //Métodos SET's e GET's
	function setCodigo($codigo){
		$this->codigo = $codigo;	
	}	
	function getCodigo(){
		return($this->codigo);
	}
    
    
	function setNome($nome){
		$this->nome = $nome;
	}	
	function getNome(){
		return ($this->nome);
	}
    
    
	function setTelefone($telefone){
		$this->telefone = $telefone;
	}	
	function getTelefone(){
		return($this->telefone);
	}
    
    
	function setEmail($email){
		$this->email = $email;		
	}
	function getEmail(){
		return ($this->email);
	}
    

    function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	function getEndereco(){
		return ($this->endereco);
	}

	function setMensagem($mensagem){
		$this->mensagem = $mensagem;	
	}	
	function getMensagem(){
		return($this->mensagem);
	}

	
	function __destruct(){
		echo '<BR><BR>O Objeto <strong>' . $this->getNome() .'</strong> foi finalizado..... ';	
	}
	
	function imprimirDados(){
		echo '<strong>Código: </strong>'.$this->getCodigo();		
		echo '<br>';
		echo '<strong>Nome: </strong>'.$this->getNome();
		echo '<br>';
		echo '<strong>Telefone: </strong>'.$this->getTelefone(); 
		echo '<br>';
		echo '<strong>Email: </strong>' . $this->getEmail();
		echo "<br>";
		echo '<strong>Endereço: </strong>'.$this->getEndereco();
		echo "<br>";		
		echo '<strong>Mensagem: </strong>'.$this->getMensagem();
	}	
	
	function salvarPessoa(){
		$con = mysqli_connect("localhost", "root", "", "pet_juliana");

		//checar a conexao
		if (mysqli_connect_errno()){
			echo "Falha na coneção com o servidor MySQL: " . mysql_connect_error();
		}
		else {
			$query="INSERT INTO cadastro(nome, telefone, email, endereco, mensagem) VALUES ('$this->nome','$this->telefone','$this->email','$this->endereco','$this->mensagem')";

			mysqli_query ($con, $query);
		}
	}
	
}
/* echo '<h1>CADASTRO REALIZADO COM SUCESSO</h1>';
echo '<h2>Abaixo os dados cadastrados</h2>';
echo '<br>';		

$objeto = new Pessoa('001','Juliana', '467586786', 'email@gmail.com', "Ilha de itamaracá", "quero vacinar meu doginho");
$objeto-> imprimirDados(); */


?>