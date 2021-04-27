<?php
declare(strict_types=1);

namespace App\Entity;

use DateTime;

/**
 * Class Authors
 * @package App\Entities
 */
class Authors {
	/**
	 * @var int
	 */
	private int $id = 0;

	/**
	 * @var string
	 */
	private string $name = '';

	/**
	 * @var string
	 */
	private string $email = '';

	/**
	 * @var string
	 */
	private string $password = '';

	/**
	 * @var DateTime
	 */
	private DateTime $updatedAt;

	/**
	 * @var DateTime
	 */
	private DateTime $createdAt;

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
	public function getName(): string {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name): void {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string {
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail(string $email): void {
		$this->email = $email;
	}

	/**
	 * @return string
	 */
	public function getPassword(): string {
		return $this->password;
	}

	/**
	 * @param string $password
	 */
	public function setPassword(string $password): void {
		$this->password = $password;
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