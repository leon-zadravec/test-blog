<?php
declare(strict_types=1);

namespace App\Entity;

use DateTime;

/**
 * Class BlogArticles
 * @package App\Entities
 */
class BlogArticles {
	private static $tableName = 'blog_articles';

	/**
	 * @var int
	 */
	private int $id = 0;

	/**
	 * @var string
	 */
	private string $headline = '';

	/**
	 * @var string
	 */
	private string $excerpt = '';

	/**
	 * @var string
	 */
	private string $fullText = '';

	/**
	 * @var string
	 */
	private string $image = '';

	/**
	 * @var string
	 */
	private string $slug = '';

	/**
	 * @var Authors
	 */
	private Authors $author;

	/**
	 * @var DateTime
	 */
	private DateTime $updatedAt;

	/**
	 * @var DateTime
	 */
	private DateTime $createdAt;

	public function mapFromDb($data) {

	}

	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId(int $id): void {
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getHeadline(): string {
		return $this->headline;
	}

	/**
	 * @param string $headline
	 */
	public function setHeadline(string $headline): void {
		$this->headline = $headline;
	}

	/**
	 * @return string
	 */
	public function getExcerpt(): string {
		return $this->excerpt;
	}

	/**
	 * @param string $excerpt
	 */
	public function setExcerpt(string $excerpt): void {
		$this->excerpt = $excerpt;
	}

	/**
	 * @return string
	 */
	public function getFullText(): string {
		return $this->fullText;
	}

	/**
	 * @param string $fullText
	 */
	public function setFullText(string $fullText): void {
		$this->fullText = $fullText;
	}

	/**
	 * @return string
	 */
	public function getImage(): string {
		return $this->image;
	}

	/**
	 * @param string $image
	 */
	public function setImage(string $image): void {
		$this->image = $image;
	}

	/**
	 * @return string
	 */
	public function getSlug(): string {
		return $this->slug;
	}

	/**
	 * @param string $slug
	 */
	public function setSlug(string $slug): void {
		$this->slug = $slug;
	}

	/**
	 * @return Authors
	 */
	public function getAuthor(): Authors {
		return $this->author;
	}

	/**
	 * @param Authors $author
	 */
	public function setAuthor(Authors $author): void {
		$this->author = $author;
	}

	/**
	 * @return DateTime
	 */
	public function getUpdatedAt(): DateTime {
		return $this->updatedAt;
	}

	/**
	 * @param DateTime $updatedAt
	 */
	public function setUpdatedAt(DateTime $updatedAt): void {
		$this->updatedAt = $updatedAt;
	}

	/**
	 * @return DateTime
	 */
	public function getCreatedAt(): DateTime {
		return $this->createdAt;
	}

	/**
	 * @param DateTime $createdAt
	 */
	public function setCreatedAt(DateTime $createdAt): void {
		$this->createdAt = $createdAt;
	}

}