<?php


namespace oosql;


class config
{
    public $pdoConfigs = [
        \PDO::ATTR_ERRMODE          => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_EMULATE_PREPARES => false,
        \PDO::ATTR_CASE             => \PDO::CASE_NATURAL,
    ];

    protected $DB_DSN, $DB_USER, $DB_PASS;

    public function __construct(array $config = null)
    {
        if ($config) {
            if (empty($config[0]) || empty($config[1]) || empty($config[2])) {
                throw new \Exception('Wrong configuration passed!');
            }
            $this->setDBDSN($config[0]);
            $this->setDBUSER($config[1]);
            $this->setDBPASS($config[2]);
        }
    }

    /**
     * @return mixed
     */
    public function getDBDSN()
    {
        return $this->DB_DSN;
    }

    /**
     * @param mixed $DB_DSN
     */
    public function setDBDSN($DB_DSN)
    {
        $this->DB_DSN = $DB_DSN;
    }

    /**
     * @return mixed
     */
    public function getDBUSER()
    {
        return $this->DB_USER;
    }

    /**
     * @param mixed $DB_USER
     */
    public function setDBUSER($DB_USER)
    {
        $this->DB_USER = $DB_USER;
    }

    /**
     * @return mixed
     */
    public function getDBPASS()
    {
        return $this->DB_PASS;
    }

    /**
     * @param mixed $DB_PASS
     */
    public function setDBPASS($DB_PASS)
    {
        $this->DB_PASS = $DB_PASS;
    }
}