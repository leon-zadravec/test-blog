<?php

namespace App\Controller;

use App\Entities\BlogArticles;
use App\Services\TwigService;
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

	}

	public function detail() {

	}

	public function create() {

	}

	public function edit() {

	}

	public function delete() {

	}
}