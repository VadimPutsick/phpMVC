<?php

class Book_Model extends IDUModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "Books";
        $this->tableRowId = "BookId";
        $this->tableRowFields = ['BookName'];
    }
}
