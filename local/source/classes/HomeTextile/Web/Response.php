<?php

namespace HomeTextile\Web;

class Response
{
	private array $data = [];
	private array $errors = [];
	private int $status;

	/**
	 * @return bool
	 */
	public function isSuccess(): bool
	{
		return count($this->getErrors()) === 0;
	}

	/**
	 * @return array
	 */
	public function getData(): array
	{
		return $this->data;
	}

	/**
	 * @param array $data
	 */
	public function setData(array $data): void
	{
		$this->data = $data;
	}

	/**
	 * @return array
	 */
	public function getErrors(): array
	{
		return $this->errors;
	}

	/**
	 * @param array $errors
	 */
	public function setErrors(array $errors): void
	{
		$this->errors = $errors;
	}

	/**
	 * @param string $message
	 * @return void
	 */
	public function addError(string $message): void
	{
		$this->errors[] = $message;
	}

	/**
	 * @return int
	 */
	public function getStatus(): int
	{
		return $this->status;
	}

	/**
	 * @param int $status
	 */
	public function setStatus(int $status): void
	{
		$this->status = $status;
		http_response_code($status);
	}

	/**
	 * @return void
	 */
	public function printJson(): void
	{
		$data = [
			'isSuccess' => $this->isSuccess(),
			'data' => $this->getData(),
			'errors' => $this->getErrors(),
		];
		$json = json_encode($data, JSON_UNESCAPED_UNICODE);

		header('Content-Type: application/json');
		header('Content-Length: '.strlen($json));

		echo $json;
	}
}