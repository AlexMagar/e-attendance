<?php namespace Attendance\Models;

use Attendance\Database\Connection;

use Attendance\Database\ProfileTable;

/**
 *
 */
class Profile extends Model
{

    public static function create($pv = [])
    {
        return parent::_create(ProfileTable::getInstance(), $pv);
    }

    public static function select($cols = [], $where)
    {
        return parent::_select(ProfileTable::getInstance(), $cols, $where);
    }

    public static function delete($wheres = [])
    {
        return parent::_delete(ProfileTable::getInstance(), $wheres);
    }

    public static function update($sql)
    {
        return Connection::execute($sql);
    }
}
