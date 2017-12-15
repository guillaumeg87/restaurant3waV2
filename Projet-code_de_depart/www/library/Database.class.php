<?php


class Database
{
	private $pdo;


	public function __construct()
	{
		$configuration = new Configuration();

		$this->pdo = new PDO
		(
			$configuration->get('database', 'dsn'),
			$configuration->get('database', 'user'),
			$configuration->get('database', 'password')
		);

		$this->pdo->exec('SET NAMES UTF8');
	}

	public function executeSql(string $sql, array $values = array())
	{
		$query = $this->pdo->prepare($sql);

		$query->execute($values);
// Permet de débogger plus facilement
		if ($query->errorCode() != '00000') {
			 throw new ErrorException($query->errorInfo()[2], $query->errorInfo()[1], 1, __FILE__, __LINE__);
		 }
		return $this->pdo->lastInsertId();
	}

    public function query(string $sql, array $criteria = array())
    {
        $query = $this->pdo->prepare($sql);

        $query->execute($criteria);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function queryOne(string $sql, array $criteria = array())
    {
        $query = $this->pdo->prepare($sql);

        $query->execute($criteria);

        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
