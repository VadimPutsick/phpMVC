<?php

class Author_Model extends IDUModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "Authors";
        $this->tableRowId = "AuthorId";
        $this->tableRowFields = ['AuthorName'];
    }
}
