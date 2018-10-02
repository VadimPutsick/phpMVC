<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.09.2018
 * Time: 10:12
 */
class IDUModel extends Model
{
    //Id columns in db must be autoincrement
    /**
     * @var name of table
     */
    public $table;
    /**
     * @var name of id column
     */
    public $tableRowId;
    /**
     * @var array of columns names
     */
    public $tableRowFields;
    /**
     * @var contain information about db table
     */
    protected $data;

    public function __construct()
    {
        parent::__construct();

    }
    public function run()
    {
        $data = $this->db->select("SELECT * FROM $this->table");
        return $data;
    }

    /**
     * @param $tableRowFields array of table values
     */
    public function create($tableRowFields)
    {
        $this->db->insert($this->table,
            $tableRowFields);
    }

    public function change($tableRowId, $tableRowFields)
    {
        $this->db->update($this->table,
             $tableRowFields,
            "$this->tableRowId = $tableRowId");
    }

    public function delete($tableRowId)
    {
        $this->db->delete($this->table,  "$this->tableRowId = $tableRowId");
    }

}