<?php
require_once('/Applications/MAMP/htdocs/php_base/07_SelfMade/config/database.php');

class Db{
    protected $dbh;

    public function __construct($dbh = null)
    {
        if (!$dbh) { // 接続情報が存在しない場合
            try {
                $this->dbh = new PDO(
                    'mysql:dbname='.DB_NAME.
                    ';host='.DB_HOST,
                    DB_USER,
                    DB_PASSWD
                );
                $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // 接続成功
            } catch (PDOException $e) {
                echo "接続失敗: " . $e->getMessage() . "\n";
                exit();
            }
        } else { // 接続情報が存在する場合
            $this->dbh = $dbh;
        }
    }

    public function get_db_handler()
    {
        return $this->dbh;
    }
}