<?php
namespace App;


class Pessoa
{
    public $Codigo;
    public $Nome;
    public $Telefone;
    public $Email;
    public $Endereco;
    
        //método construtor: inicializa propriedades
    function __construct($Codigo, $Nome, $Telefone, $Email, $Endereco)
    {
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Telefone = $Telefone;
        $this->Email = $Email;
        $this->Endereco = $Endereco;
        
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
    	
	function __construct ($codigo,$nome,$telefone,$email,$endereco){
				
		$this->setCodigo($codigo);
		$this->setNome($nome);
		$this->setAltura($telefone);
		$this->setIdade($email);
		$this->setNascimento($endereco);
		
		
		echo '<h1>CADASTRO REALIZADO COM SUCESSO</h1>';
		echo '<h2>Abaixo os dados cadastrados</h2>';
		echo '<br>';		
				
		$this->imprimirDados();
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
		echo '<strong>Endereço em : </strong>'.$this->getEndereço();
		echo "<br>";		
	}	
	
	
}

?>