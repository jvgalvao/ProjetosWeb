<?php 
session_start();

class Sql {

	public $conn;
/*Função para me conectar com meu banco de dado*/
	public function __construct(){

		return $this->conn = mysqli_connect("127.0.0.1", "root", "", "hcode_shop");

	}
/*Consultar meu banco*/
	public function query($string_query){

		return mysqli_query($this->conn, $string_query);

	}
	/*O select vai executar o método query, passando a string_query. ele já vai fazendo o laço do while, todo processo de validação e devolve os resultados para a gente. em poucas palavras "é como se a gente fizesse um robozinho para fazer as tarefas para gente"*/
	public function select($string_query){

		$result = $this->query($string_query);
		// Variavel utilizada para fazer uma array do php, função de tirar copia dos dados e jogar na memoria(array).
		$data = array();

		// Enquanto houver resultados, ele vai colocando cada linha que ele resultar nessa variavel row.
	    while ($row = mysqli_fetch_array($result)) {
	        
	        //Key é o nome da coluna, estou passando um for coluna por coluna. ele encontrou uma coluna, eu pego essa coluna faço o utf8_encode nela e devolvo ela para linha.
	    	foreach ($row as $key => $value) {
	    		$row[$key] = utf8_encode($value);
	    	}

	        array_push($data, $row);

	    }

	    unset($result);

	    return $data;

	}
	/*Função para feichminhaar conexão com meu banco de dado*/
	public function __destruct(){

		mysqli_close($this->conn);

	}

}

?>