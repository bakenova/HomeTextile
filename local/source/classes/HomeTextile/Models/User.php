<?php

namespace HomeTextile\Models;

class User
{
	private int $id = 0;
	private string $login = "";
	private string $password = "";
	private string $email = "";
	private string $phoneNumber = "";
	private string $name = "";
	private string $address = "";

	public function __construct(array $user = [])
	{
		if (isset($user['ID']))
		{
			$this->setId($user['ID']);
		}
		if (isset($user['LOGIN']))
		{
			$this->setLogin($user['LOGIN']);
		}
		if (isset($user['PASSWORD']))
		{
			$this->setPassword($user['PASSWORD']);
		}
		if (isset($user['EMAIL']))
		{
			$this->setEmail($user['EMAIL']);
		}
		if (isset($user['PHONE_NUMBER']))
		{
			$this->setPhoneNumber($user['PHONE_NUMBER']);
		}
		if (isset($user['NAME']))
		{
			$this->setName($user['NAME']);
		}
		if (isset($user['ADDRESS']))
		{
			$this->setAddress($user['ADDRESS']);
		}
	}

	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	private function setId(int $id): void
	{
		$this->id = $id;
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
	public function setName(string $name): void
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getAddress(): string
	{
		return $this->address;
	}

	/**
	 * @param string $address
	 */
	public function setAddress(string $address): void
	{
		$this->address = $address;
	}
}