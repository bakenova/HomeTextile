<?php

namespace HomeTextile\Controllers;

use HomeTextile\Base\DB;
use HomeTextile\Models\User;

class UserController
{
	public static function getUserById(int $userId): ?User
	{
		$sql = "SELECT * FROM `users` WHERE `ID` = ? LIMIT 1";
		$userData = DB::getInstance()->query($sql, [$userId]);
		return !empty($userData) ? new User($userData[0]) : null;
	}

	public static function getUserByLogin(string $login): ?User
	{
		$sql = "SELECT * FROM `users` WHERE `LOGIN` = ? LIMIT 1";
		$userData = DB::getInstance()->query($sql, [$login]);
		return !empty($userData) ? new User($userData[0]) : null;
	}

	public static function addUser(User $user): bool
	{
		$hashedPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);

		$sql = "INSERT INTO `users` (`LOGIN`, `PASSWORD`, `EMAIL`, `PHONE_NUMBER`, `NAME`) VALUES (?, ?, ?, ?, ?)";
		$params = [
			$user->getLogin(),
			$hashedPassword,
			$user->getEmail(),
			$user->getPhoneNumber(),
			$user->getName(),
		];

		$result = DB::getInstance()->query($sql, $params);

		return $result !== null;
	}

	public static function updateUser(User $user): bool
	{
		$existingUser = self::getUserById($user->getId());

		$arValues = [];

		if ($user->getLogin() !== $existingUser->getLogin())
		{
			$arValues['LOGIN'] = $user->getLogin();
		}
		if ($user->getPassword() !== $existingUser->getPassword())
		{
			$hashedPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);
			$user->setPassword($hashedPassword);
			$arValues['PASSWORD'] = $hashedPassword;
		}
		if ($user->getEmail() !== $existingUser->getEmail())
		{
			$arValues['EMAIL'] = $user->getEmail();
		}
		if ($user->getPhoneNumber() !== $existingUser->getPhoneNumber())
		{
			$arValues['PHONE_NUMBER'] = $user->getPhoneNumber();
		}
		if ($user->getName() !== $existingUser->getName())
		{
			$arValues['NAME'] = $user->getName();
		}
		if ($user->getAddress() !== $existingUser->getAddress())
		{
			$arValues['ADDRESS'] = $user->getAddress();
		}

		$set = [];
		$params = [];
		foreach ($arValues as $key => $value)
		{
			$set[] = "`$key` = ?";
			$params[] = $value;
		}
		$set = implode(", ", $set);

		$sql = "UPDATE `users` SET $set WHERE `ID` = ?";
		$params[] = $user->getId();

		$result = DB::getInstance()->query($sql, $params);

		return $result !== null;
	}

	public static function deleteUser(int $userId): bool
	{
		$sql = "DELETE FROM `users` WHERE `ID` = ?";
		$params = [$userId];

		$result = DB::getInstance()->query($sql, $params);

		return $result !== null;
	}

	public static function authenticate(string $login, string $password): ?User
	{
		$user = static::getUserByLogin($login);

		if ($user instanceof User && password_verify($password, $user->getPassword()))
		{
			return $user;
		}

		return null;
	}
}