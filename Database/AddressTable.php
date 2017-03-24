<?php namespace Attendance\Database;

use Attendance\Database\Connection;

/**
 */
class AddressTable extends AbstractTable
{

    protected static $instance;

    private function __construct()
    {
        $this->table_name = 'address';
    }

    public function create()
    {
        $sql = "CREATE TABLE IF NOT EXISTS `" . $this->getTableName() . "` (
           `id` INT NOT NULL AUTO_INCREMENT ,
           `Zone` VARCHAR(200) NOT NULL ,
           `District` VARCHAR(200) NOT NULL,
           `VDC_Municipality` VARCHAR(200) NOT NULL,
           `Tole_Marga` VARCHAR(200) NOT NULL,
           `Ward_No` INT NOT NULL ,
           `House_No` INT NOT NULL,
           `sID` INT NOT NULL,
           `Type` CHAR(2) NOT NULL, 
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
