<?php namespace Attendance\Models;

use Attendance\Database\Connection;

use Attendance\Database\AwardsTable;

/**
 *
 */
class Awards extends Model
{

    public static function create($pv = [])
    {
        return parent::_create(AwardsTable::getInstance(), $pv);
    }

    public static function select($cols = [], $where)
    {
        return parent::_select(AwardsTable::getInstance(), $cols, $where);
    }

    public static function delete($wheres = [])
    {
        return parent::_delete(AwardsTable::getInstance(), $wheres);
    }

    public static function update($sql)
    {
        return Connection::execute($sql);
    }
}
