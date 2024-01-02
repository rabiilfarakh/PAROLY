<?php

namespace App\Core;

use App\Core\Database;
use PDOException;

abstract class Model
{
    private $tableName;
    private $columns = [];
    private $dbh;

    public function __construct($tableName)
    {
        $this->dbh = Database::getInstance();
        $this->dbh = $this->dbh->connect();
        $this->tableName = $tableName;
    }
    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    protected function getAll()
    {
        try {
            $columns = implode(',', $this->columns);
            $stmt = $this->dbh->query("SELECT {$columns} FROM {$this->tableName}");
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("error in selecting" . $e->getMessage());
        }
    }
    protected function findByColumnName($columnName, $value)
    {
        try {
            $columns = implode(',', $this->columns);
            $stmt = $this->dbh->prepare("SELECT {$columns} from {$this->tableName} where {$columnName} = :value");
            $stmt->bindParam(':value', $value);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("error in finding by a column" . $e->getMessage());
        }
    }
    protected function add($data){
        try{
            $columns = implode(',', array_keys($data));
            $placeholders = implode(',', array_fill(0, count($data), '?'));

            $stmt = $this->dbh->prepare("INSERT INTO {$this->tableName} ({$columns}) values ($placeholders)");
            $stmt->execute(array_values($data));
        }catch(PDOException $e){
            die("error in selecting" . $e->getMessage());
        }
    }
    protected function update($columnsArray, $values, $conditionColumn, $conditionValue){
        try{
            $placeholders = array_map(function ($column){ return '$column=?'; },$columnsArray);
            $placeholders = implode (',', $placeholders);

            if (count($columnsArray) !== count($values)) {
                die("Number of columns and values don't match");
            }
                $stmt = $this->dbh->prepare("UPDATE {$this->tableName}
                        SET {$placeholders} WHERE {$conditionColumn} = ?");
            $stmt->execute(array_merge($values, [$conditionValue]));
        }catch(PDOException $e){
            die("error in updating" . $e->getMessage());
        }
    }
    protected function delete($column, $value){
        try  {
            $stmt = $this->dbh->prepare("DELETE FROM {$this->tableName} WHERE {$column} = ?");
            $stmt->execute($value);
        }catch (PDOException $e){
            die("error in deleting" . $e->getMessage());
        }
    }
}