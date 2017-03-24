<?php namespace Attendance\Database;

use Attendance\Database\Connection;

/**
 */
class ProfileTable extends AbstractTable
{

    protected static $instance;

    private function __construct()
    {
        $this->table_name = 'profile';
    }

    public function create()
    {
        $sql = "CREATE TABLE IF NOT EXISTS `" . $this->getTableName() . "` (
           `id` INT NOT NULL AUTO_INCREMENT ,
           `First_Name` VARCHAR(200) NOT NULL,
           `Middle_Name` VARCHAR(200) NOT NULL,
           `Last_Name` VARCHAR(200) NOT NULL,
           `Nationality` VARCHAR(200) NOT NULL,
           `Citizenship_No` INT NOT NULL,
           `dob` DATE NOT NULL,
           `Gender` VARCHAR(2) NOT NULL ,
           `std_id` INT NOT NULL ,
           `created_by` INT NOT NULL ,
           `created_on` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
           PRIMARY KEY (`id`))";
        return $this->execute($sql);
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}
