<?php

namespace HomeTextile\Models;

class User
{
	private int $id;
	private string $login;
	private string $password;
	private string $email;
	private string $phoneNumber;
	private string $name;

	public function __construct(int $id, string $login, string $password, string $email, string $phoneNumber, string $name)
	{
		$this->id = $id;
		$this->login = $login;
		$this->password = $password;
		$this->email = $email;
		$this->phoneNumber = $phoneNumber;
		$this->name = $name;
	}

	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getLogin(): string
	{
		return $this->login;
	}

	/**
	 * @param string $login
	 */
	public function setLogin(string $login): void
	{
		$this->login = $login;
	}

	/**
	 * @return string
	 */
	public function getPassword(): string
	{
		return $this->password;
	}

	/**
	 * @param string $password
	 */
	public function setPassword(string $password): void
	{
		$this->password = $password;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail(string $email): void
	{
		$this->email = $email;
	}	

	/**
	 * @return string
	 */
	public function getPhoneNumber(): string
	{
		return $this->phoneNumber;
	}

	/**
	 * @param string $phoneNumber
	 */
	public function setPhoneNumber(string $phoneNumber): void
	{
		$this->phoneNumber = $phoneNumber;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $login): void
	{
		$this->name = $name;
	}
}