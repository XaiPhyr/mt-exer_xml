<?php

class database
{
    public $db_username;
    public $db_password;
    public $db_hostname;
    public $dbname;

    function __construct()
    {
        $this->db_username = 'b3a5d64627c7e7';
        $this->db_password = '855dd8dd';
        $this->db_hostname = 'us-cdbr-iron-east-05.cleardb.net';
        $this->dbname = 'heroku_a4f52a441c3d3ab';
    }

    public function db_connect()
    {
        return $connect = mysqli_connect($this->db_hostname, $this->db_username, $this->db_password, $this->dbname);
        if (!$connect) die(mysqli_connect_error());
    }
}

class QueryGetter extends database {

    /**
     * ListRetrieveQuery
     * 
     * @param string $query SQL query GET
     * @return string return values from database
     */
    function ListRetrieveQuery($query) {
        $connect = $this->db_connect();
        return $qry = mysqli_query($connect, $query);
    }
}
