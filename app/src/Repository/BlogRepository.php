<?php
declare(strict_types=1);

namespace App\Repository;

use App\Service\DatabaseService;
use PDO;

class BlogRepository {
	private PDO $database;

	public function __construct() {
		$databaseService = new DatabaseService();
		$this->database = $databaseService->getInstance();
	}

	public function getById(int $id) {

	}

	public function getBySlug(string $slug) {

	}

	public function getAll($offset = 0, $limit = 10, $sorting = 'created_at DESC') {

	}

	public function create($data) {

	}

	public function update($id, $data) {

	}

	public function delete($id) {

	}
}