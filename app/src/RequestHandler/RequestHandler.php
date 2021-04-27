<?php
declare(strict_types=1);

namespace App\RequestHandler;

use App\Controller\BlogController;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class RequestHandler {
	private BlogController $blogController;

	public function __construct() {
		$this->blogController = new BlogController();
	}

	public function handleRequest(): string {
		$urlParts = $this->getCurrentUrlParsed();
		$path = explode('/', $urlParts['path']);

		if($path[1] === 'blog-page') {
			return $this->blogController->detail($path[1]);
		}

		return $this->blogController->index();
	}

	#[Pure]
	#[ArrayShape(["scheme" => "string", "host" => "string", "port" => "int", "user" => "string", "pass" => "string", "query" => "string", "path" => "string", "fragment" => "string"])]
	private function getCurrentUrlParsed(): bool|int|array|string|null {
		$pageURL = 'http';
		if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
			$pageURL .= "s";
		}
		$pageURL .= "://";
		if (isset($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}

		return parse_url($pageURL);
	}

}