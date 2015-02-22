<?php


/**
 * DB provides functions to connect to database
 *
 * Provides functions:
 *     getAvailableDrivers()
 *     getJSON()
 *     fetchAllAssoc()
 *     fetchRowAssoc()
 *     update()
 *     insert()
 *
 * @author Michael Filipek 
 * @license GPL licence
 * 
 */
class DB
{
    private static $dbh = '';


    // Set database handler
    private static function initialize()
    {
    	if (self::$dbh)
    		return;

        $connectionString = 'mysql:host='.DBHOST.';dbname='.DBNAME.';charset=utf8';
        
        self::$dbh = new PDO($connectionString, DBUSER, DBPASS);
        self::$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    /**
     * Initiates a transaction
     *
     * @return bool
     */
    public function beginTransaction() {
        self::initialize();
        return self::$dbh->beginTransaction();
    }
        
    /**
     * Commits a transaction
     *
     * @return bool
     */
    public function commit() {
        self::initialize();
        return self::$dbh->commit();
    }
       
    /**
     * Rolls back a transaction
     *
     * @return bool
     */
    public function rollBack() {
        self::initialize();
        return self::$dbh->rollBack();
    }  

    /**
     * Fetch the SQLSTATE associated with the last operation on the database handle
     * 
     * @return string 
     */
    public function errorCode() {
        self::initialize();
        return self::$dbh->errorCode();
    }
    
    /**
     * Fetch extended error information associated with the last operation on the database handle
     *
     * @return array
     */
    public function errorInfo() {
        self::initialize();
        return self::$dbh->errorInfo();
    }
    
    /**
     * Execute an SQL statement and return the number of affected rows
     *
     * @param string $statement
     */
    public function exec($statement) {
        self::initialize();
        return self::$dbh->exec($statement);
    }
    
    /**
     * Retrieve a database connection attribute
     *
     * @param int $attribute
     * @return mixed
     */
    public function getAttribute($attribute) {
        self::initialize();
        return self::$dbh->getAttribute($attribute);
    }

    /**
     * Return an array of available PDO drivers
     *
     * @return array
     */
    public static function getAvailableDrivers(){
        self::initialize();
        return self::$dbh->getAvailableDrivers();
    }
    
    /**
     * Returns the ID of the last inserted row or sequence value
     *
     * @param string $name Name of the sequence object from which the ID should be returned.
     * @return string
     */
    public function lastInsertId($name) {
        self::initialize();
        return self::$dbh->lastInsertId($name);
    }
        
    /**
     * Prepares a statement for execution and returns a statement object 
     *
     * @param string $statement A valid SQL statement for the target database server
     * @param array $driver_options Array of one or more key=>value pairs to set attribute values for the PDOStatement obj 
returned  
     * @return PDOStatement
     */
    public function prepare ($statement, $driver_options=false) {
        self::initialize();
        if(!$driver_options) $driver_options=array();
        return self::$dbh->prepare($statement, $driver_options);
    }
    
    /**
     * Executes an SQL statement, returning a result set as a PDOStatement object
     *
     * @param string $statement
     * @return PDOStatement
     */
    public function query($statement) {
        self::initialize();
        return self::$dbh->query($statement);
    }
    
    /**
     * Execute query and return all rows in assoc array
     *
     * @param string $statement
     * @return array
     */
    public static function queryFetchAllAssoc($statement) {
        self::initialize();
        return self::$dbh->query($statement)->fetchAll(PDO::FETCH_ASSOC);
    }
    
    /**
     * Execute query and return one row in assoc array
     *
     * @param string $statement
     * @return array
     */
    public function queryFetchRowAssoc($statement) {
        self::initialize();
        return self::$dbh->query($statement)->fetch(PDO::FETCH_ASSOC);      
    }
    
    /**
     * Execute query and select one column only 
     *
     * @param string $statement
     * @return mixed
     */
    public function queryFetchColAssoc($statement) {
        self::initialize();
        return self::$dbh->query($statement)->fetchColumn();        
    }
    
    /**
     * Quotes a string for use in a query
     *
     * @param string $input
     * @param int $parameter_type
     * @return string
     */
    public function quote ($input, $parameter_type=0) {
        self::initialize();
        return self::$dbh->quote($input, $parameter_type);
    }
     
    
    /**
     * Set an attribute
     *
     * @param int $attribute
     * @param mixed $value
     * @return bool
     */
    public function setAttribute($attribute, $value  ) {
        self::initialize();
        return self::$dbh->setAttribute($attribute, $value);
    }


}

?>