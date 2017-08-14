<?php

interface Logger
{
	public function logger($message)
	{
		return 'ok';
	}

}

class DatabaseLogger implements Logger
{
	public function __construct(DataBase $database)
	{
		$this->database = $database;
	}

	public function logger($message)
	{
		$this->database->insert(['message'=> $message]);
	}
}

class FileLogger implements Logger
{
	public function __contruct(FileManager $fileManager)
	{
		$this->fileManager = $fileManager;
	}
	public function logger($message)
	{
		$this->FileManager->create('error.log', $message);
	}
}