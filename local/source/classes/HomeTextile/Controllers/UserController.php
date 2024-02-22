<?php

namespace HomeTextile\Controllers;

use HomeTextile\Base\DB;
use HomeTextile\Models\User;

class UserController
{
	public static function getUserById(int $userId): ?User
	{
		$sql = "SELECT * FROM `users` WHERE `ID` = ?";
		$userData = DB::getInstance()->query($sql, [$userId]);

		if ($userData) {
			return new User(
				$userData[0]['ID'],
				$userData[0]['LOGIN'],
				$userData[0]['PASSWORD'],
				$userData[0]['EMAIL'],         
				$userData[0]['PHONENUMBER'],   
				$userData[0]['NAME']    
			);
		}
	
		return null;
	}

	public static function getUserByLogin(string $login): ?User
	{
		$sql = "SELECT * FROM `users` WHERE `LOGIN` = ? LIMIT 1";
		$userData = DB::getInstance()->query($sql, [$login]);

		if ($userData) {
			return new User(
				$userData[0]['ID'],
				$userData[0]['LOGIN'],
				$userData[0]['PASSWORD'],
				$userData[0]['EMAIL'],
				$userData[0]['PHONENUMBER'],
				$userData[0]['NAME']
			);
		}
		return null;
	}


	public static function addUser(User $user): bool
	{
		$hashedPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);

		$sql = "INSERT INTO `users` (`LOGIN`, `PASSWORD`, `EMAIL`, `PHONENUMBER`, `NAME`) VALUES (?, ?, ?, ?, ?)";
		$params = [$user->getLogin(), $hashedPassword, $user->getEmail(), $user->getPhoneNumber(), $user->getName() ];

		$result = DB::getInstance()->query($sql, $params);

		return $result !== null;
	}

	public static function updateUser(User $user): bool
	{
		$existingUser = self::getUserById($user->getId());

		if ($user->getPassword() !== $existingUser->getPassword())
		{
			$hashedPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);
			$user->setPassword($hashedPassword);
		}

		$sql = "UPDATE `users` SET `LOGIN` = ?, `PASSWORD` = ? WHERE `ID` = ?";
		$params = [$user->getLogin(), $user->getPassword(), $user->getId()];

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