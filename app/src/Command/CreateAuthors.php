<?php
declare(strict_types=1);

namespace App\Command;

use App\Service\DatabaseService;
use PDO;

class CreateAuthors {
	private PDO $database;

	public function __construct() {
		$databaseService = new DatabaseService();
		$this->database = $databaseService->getInstance();
	}

	public function createAuthors($amount = 100) {
		for($i = 0; $i < $amount; $i++) {
			$username = $this->getRandomUsername('MaxMustermann');
			$user = [
				':username' => $username,
				':email' => $username.'@hotmail.com',
				':password' => password_hash($this->getRandomPassword(), PASSWORD_DEFAULT),
			];

			$insert = $this->database->prepare('
				INSERT INTO authors (username, password, email) VALUES (:username, :password, :email);
			');

			$insert->execute($user);
		}
	}

	private function getRandomUsername($username): string {
		$newName = $username.mt_rand(0, 10000);

		if($this->checkUserName($newName)) {
			return $newName;
		} else {
			return $this->getRandomUsername($newName);
		}
	}

	private function checkUserName($newName): bool {
		$select = $this->database->prepare('SELECT * FROM authors WHERE username=:username');
		$select->execute([
			':username' => $newName,
		]);

		if ($select->fetch(PDO::FETCH_ASSOC)) {
			return false;
		} else {
			return true;
		}
	}

	private function getRandomPassword(): string{
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = [];
		$alphaLength = strlen($alphabet) - 1;
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass);
	}
}