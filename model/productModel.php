<?php
class CProducts
{
	// Объект класса PDO
	private $db;

	public function __construct()
	{
		//Файл dbinfo.php возвращает массив для подключение к БД
		$dbinfo = require(__DIR__ . '/../dbinfo.php');
		//Подключение
		$this->db = new PDO('mysql:host=' . $dbinfo['host'] . ';dbname=' . $dbinfo['dbname'], $dbinfo['login'], $dbinfo['password']);
	}

	public function query($sql, $options = [])
	{
		$stmt = $this->db->prepare($sql);

		if ( !empty($options) ) {
			foreach ($options as $key => $value) {
				$stmt->bindValue(":$key", $value);
			}
		}
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getProducts($count = '', $options = [])
	{
		$sql = '';
		if ( !empty($count) && is_numeric($count)) {
			$sql = 'LIMIT' . ' ' . $count;
		}
		return $this->query("SELECT * FROM `products` WHERE `PRODUCT_HIDDEN` = 0 ORDER BY `DATE_CREATE` DESC" . $sql, $options);
	}

	public function hideProduct($product)
	{
		return $this->query("UPDATE `products` SET `PRODUCT_HIDDEN` = 1 WHERE `PRODUCT_ID` = " . $product);
	}

	public function changeQuantity($quantity, $product)
	{
		return $this->query("UPDATE `products` SET `PRODUCT_QUANTITY` = " . $quantity . " WHERE `PRODUCT_ID` = " . $product);
	}
}
