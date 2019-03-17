<?php
	class Database{
		private static $cont = null;
		public function__construct(){
			die('Init function id not allowed');
		}

		public static function connect(){
			//One connection through whole application
			if ( null == self::$cont ){
				try{
					self::$cont = new PDO ( "mysql:host=localhost; dbaname=cadastro_vendas", "root", "1234");
				}
				catch(PDOException $e){
					die($e->getMessage());
				}
			}
			return self::$cont;
		}
		public static function disconnect(){
			self::$cont = null;
		}
	}
?>