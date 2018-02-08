<?php 
namespace App;

abstract class Connect implements ModelInterface{
	public static $db;
	
	public static function find($condition = NULL){
		$sql = "SELECT * FROM `" . static::tableName() . "`";
		
		if($condition){
			$sql .= " WHERE " . $condition;
		}
		
		$results = self::$db->query($sql);
		
		if (!empty($results))
			return $results->fetchAll(\PDO::FETCH_ASSOC);
		else
			return false;
	}
	
	public static function findOne($condition){
		$results = static::find($condition);
		
		if (!empty($results))
			return $results[0];
		else 
			return false;
	}
	
	public static function insert($array){		
		$keys = array_keys($array);
		$vals = array_values($array);
		
		for ($i = 0; $i < count($keys); $i++){
			$keys[$i] = '`' . $keys[$i] . '`';
		}
		
		for ($i = 0; $i < count($vals); $i++){
			if ($vals[$i])
				$vals[$i] = "'" . $vals[$i] . "'";
			else
				return false;
		}
		
		if (!empty($array)){
			$sql = "INSERT INTO `" . static::tableName() . "`(" . implode(',', $keys) . ") VALUES (" . implode(',', $vals) . ")";
			
			self::$db->query($sql);
			
			return true;
		} else {
			return false;
		}
	}
} 