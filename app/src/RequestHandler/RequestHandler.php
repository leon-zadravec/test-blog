<?php
declare(strict_types=1);

namespace App\RequestHandler;

use App\Services\DatabaseService;

class RequestHandler {
	public function handleRequest() {
		$databaseService = new DatabaseService();
		$database = $databaseService->getInstance();

		echo 'YES FINALLY';
	}
}