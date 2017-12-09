<?php
namespace App\Helpers\Kadek;

use DB;
use StdClass;
 
class SystemInfo {

    /**
     * @param void
     * 
     * @return string
     */
    public static function getLaravelVersion()
    {
        return app()::VERSION;
    }

    public static function getPhpVersion()
    {
        return phpversion();
    }

    public static function getDatabaseVersion()
    {
        $results = DB::select( DB::raw("select version()") );
        $db =  $results[0]->{'version()'};
        return $db;
    }

    public static function getDatabaseType()
    {
        $version = self::getDatabaseVersion();

        if (strpos($version, 'Maria') !== false) {
            return 'Maria';
        } else {
            return 'Mysql';
        }
    }

    public static function getServerInfo()
    {
        $version = $_SERVER['SERVER_SOFTWARE'];
        $server = explode('/', $version)[0];
        return $server;
    }

    public function getSystemInfo($returnType = 'object')
    {
        try {

          $laravelVersion = self::getLaravelVersion();
          $phpVersion = self::getPhpVersion();
          $databaseVersion = self::getDatabaseVersion();
          $databaseType = self::getDatabaseType();
          $serverInfo = self::getServerInfo();
          
          if ($returnType === 'object') {
              $data = new StdClass();
              $data->laravel_version = $laravelVersion;
              $data->php_version = $phpVersion;
              $data->database_version = $databaseVersion;
              $data->database_type = $databaseType;
              $data->sever_info = $serverInfo;
          } else {
              $data['laravel_version'] = $laravelVersion;
              $data['php_version'] = $phpVersion;
              $data['database_version'] = $databaseVersion;
              $data['database_type'] = $databaseType;
              $data['sever_info'] = $serverInfo;
          }

          return $data;
        } catch (Exception $e) {
            return 'Caught exception: ' . $e->getMessage() . 'Line : ' . $e->getLine() . "\n";
        }
    }
}