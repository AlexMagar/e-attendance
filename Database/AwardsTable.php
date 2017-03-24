<?php namespace Attendance\Database;

use Attendance\Database\Connection;

/**
 */
class AwardsTable extends AbstractTable
{

    protected static $instance;

    private function __construct()
    {
        $this->table_name = 'awards';
    }

    public function create()
    {
        $sql = "CREATE TABLE IF NOT EXISTS `" . $this->getTableName() . "` (
           `id` INT NOT NULL AUTO_INCREMENT ,
           `type` VARCHAR(200) NOT NULL ,
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
