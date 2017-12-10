<?php
/**
 * Created by PhpStorm.
 * User: atdhe
 * Date: 10/4/17
 * Time: 18:23
 */

/** Connecting to database plus the setup */

class setup
{
    public $dbc;

    /**
     * Change according to your preferences.
     */

    public $localhost   = 'localhost';
    public $user        = 'root';
    public $password    = '';
    public $dbname      = 'db_codtest';

    public function __construct()
    {
        $this->dbc = mysqli_connect($this->localhost, $this->user, $this->password, $this->dbname) or die('Could not connect to database..' . mysqli_connect_error());
    }
}