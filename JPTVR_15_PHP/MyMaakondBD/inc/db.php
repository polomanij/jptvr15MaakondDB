<?php
class db {
	private $conn;
	private $host;
	private $user;
	private $password;
	private $baseName;
	private $debug;

    function __construct($params=array()) {
		$this->conn = false;
		$this->host = 'localhost'; //hostname
		$this->user = 'root'; //username
		$this->password = ''; //password
		$this->baseName = 'JPTVR15_eesti_linnad'; //name of your database
		$this->debug = true;
		$this->connect();
	}

	function __destruct() {
		$this->disconnect();
	}
	
	function connect() {
		if (!$this->conn) {
			try {
				$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->baseName.'', $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));  
			}
			catch (Exception $e) {
				die('Error : ' . $e->getMessage());
			}

			if (!$this->conn) {
				$this->status_fatal = true;
				echo 'Connection BDD failed';
				die();
			} 
			else {
				$this->status_fatal = false;
			}
		}

		return $this->conn;
	}

	function disconnect() {
		if ($this->conn) {
			$this->conn = null;
		}
	}
	
	function getOne($query) {
		$result = $this->conn->prepare($query);
		$ret = $result->execute();//PDOStatement::execute — Запускает подготовленный запрос на выполнение
		if (!$ret) {
		   echo 'PDO::errorInfo():';
		   echo '<br />';
		   echo $query;
		   //https://www.w3schools.com/php/func_misc_die.asp
		   die('- error SQL ');//die - псевдоним exit() синтаксис die(message)
		}
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$reponse = $result->fetch();
		
		return $reponse;
	}
	
	function getAll($query) {
		$result = $this->conn->prepare($query);
		$ret = $result->execute();//PDOStatement::execute — Запускает подготовленный запрос на выполнение 
		//http://php.net/manual/ru/pdostatement.execute.php
		if (!$ret) {
		   echo 'PDO::errorInfo():';
		   echo '<br />';
		   echo $query;
		   //die();
		   die('- error SQL ');//die - псевдоним exit() синтаксис die(message)
		}
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$reponse = $result->fetchAll();
		
		return $reponse;
	}
	//--------------------------------------------------------------------
	//http://php.net/manual/ru/pdo.exec.php
	//PDO::exec — Запускает SQL запрос на выполнение и возвращает количество строк, задействованных в ходе его выполнения
	//запросы действия INSERT   UPDATE    DELETE
	function executeRun($query) {
		if (!$response = $this->conn->exec($query)) {
			echo 'PDO::errorInfo():';
		   echo '<br />';
		   echo $query;
		   //die();
		   die('- error SQL ');//die - псевдоним exit() синтаксис die(message)
		}
		return $response;
	}
}