<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\BlogArticles;
use App\Service\TwigService;
use Twig\Environment;

/**
 * Class BlogController
 * @package App\Controller
 */
class BlogController {
	/**
	 * @var Environment
	 */
	private Environment $twig;

	/**
	 * @var BlogArticles
	 */
	private BlogArticles $blogArticles;

	public function __construct() {
		$twigService = new TwigService();
		$this->twig = $twigService->getTwig();
	}

	public function index() {
		echo 'index';
		return 'index';
	}

	public function detail($slug) {
		echo 'detail';
		return 'detail';
	}

	public function create() {

	}

	public function edit() {

	}

	public function delete() {

	}
}