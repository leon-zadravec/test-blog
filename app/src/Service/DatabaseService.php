<?php
declare(strict_types=1);

namespace App\Service;

use PDO;
use PDOException;

class DatabaseService {
	/**
	 * @var PDO
	 */
	private PDO $databaseInstance;

	public function getInstance(): PDO {
		if (!isset($this->databaseInstance)) {
			try {
				$host = getenv('MYSQL_DATABASE_HOST');
				$database = getenv('MYSQL_DATABASE');
				$user = getenv('MYSQL_USER');
				$password = getenv('MYSQL_PASSWORD');

				$this->databaseInstance = new PDO('mysql:host='.$host.';dbname='.$database, $user, $password);
				return $this->databaseInstance;
			} catch (PDOException $exception) {
				print('Error: '.$exception->getMessage());
				die();
			}
		} else {
			return $this->databaseInstance;
		}
	}
}