<?php
declare(strict_types=1);

namespace App\Service;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * Class TwigService
 */
class TwigService {
	/**
	 * @var Environment
	 */
	private Environment $twig;

	/**
	 * TwigService constructor.
	 */
	public function __construct() {
		$loader = new FilesystemLoader(dirname(__DIR__).'/../views/');
		$twig = new Environment($loader, [
			'cache' => dirname(__DIR__).'/../../cache/twig/',
		]);
		$this->twig = $twig;
	}

	/**
	 * @return Environment
	 */
	public function getTwig(): Environment {
		return $this->twig;
	}
}