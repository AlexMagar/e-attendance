<?php namespace Attendance\Models;

use Attendance\Database\Connection;

use Attendance\Database\AddressTable;

/**
 *
 */
class Address extends Model
{

    public static function create($pv = [])
    {
        return parent::_create(AddressTable::getInstance(), $pv);
    }

    public static function select($cols = [], $where)
    {
        return parent::_select(AddressTable::getInstance(), $cols, $where);
    }

    public static function delete($wheres = [])
    {
        return parent::_delete(AddressTable::getInstance(), $wheres);
    }

    public static function update($sql)
    {
        return Connection::execute($sql);
    }
}
