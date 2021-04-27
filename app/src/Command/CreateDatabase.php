<?php
declare(strict_types=1);

namespace App\Command;

use App\Service\DatabaseService;
use PDO;

class CreateDatabase {
	private PDO $database;

	public function __construct() {
		$databaseService = new DatabaseService();
		$this->database = $databaseService->getInstance();
	}

	public function createTables() {
		$this->database->beginTransaction();
		$sth = $this->database->exec('
			CREATE TABLE IF NOT EXISTS authors (
			    id 			INT AUTO_INCREMENT PRIMARY KEY,
			    username 	VARCHAR(255)	DEFAULT ""	NOT NULL,
			    email 		VARCHAR(255)	DEFAULT ""	NOT NULL,
			    password	VARCHAR(255)	DEFAULT ""	NOT NULL,
			    created_at 	DATETIME 		DEFAULT CURRENT_TIMESTAMP 	NULL,
				updated_at 	DATETIME 		DEFAULT CURRENT_TIMESTAMP 	NULL ON UPDATE CURRENT_TIMESTAMP,
				constraint id
				unique (id)
			);
		');

		$sth = $this->database->exec('
			CREATE TABLE IF NOT EXISTS blog_articles (
			    id 			INT AUTO_INCREMENT PRIMARY KEY,
			    headline 	VARCHAR(255)	DEFAULT ""	NOT NULL,
			    excerpt 	TEXT			NULL,
			    full_text	TEXT			NULL,
			    image		VARCHAR(255)	NULL,
			    slug		VARCHAR(255)	NULL,
			    author		INT				NULL,
			    created_at 	DATETIME 		DEFAULT CURRENT_TIMESTAMP 	NULL,
				updated_at 	DATETIME 		DEFAULT CURRENT_TIMESTAMP 	NULL ON UPDATE CURRENT_TIMESTAMP,
				constraint id
					unique (id),
			    constraint blog_articles_author
    				FOREIGN KEY (author)
    				REFERENCES authors (id)
    				ON DELETE CASCADE
			);
		');
		$this->database->commit();
	}
}