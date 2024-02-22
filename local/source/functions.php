<?php

// Функция для безопасного получения данных из массива $_GET или $_POST
function safeData(array $data): array
{
	$safeData = [];
	foreach ($data as $key => $value)
	{
		// Очистка и фильтрация данных из массива
		$safeData[$key] = htmlspecialchars(trim($value));
	}
	return $safeData;
}