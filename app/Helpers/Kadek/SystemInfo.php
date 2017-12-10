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

    public static function getPhpVersion($fullInfo = false)
    {
        $version = phpversion();
        if (!$fullInfo){
            $version = substr($version, 0, strpos($version, "-"));
        }
        return $version;
    }

    public static function getDatabaseVersion($fullInfo = false)
    {
        $results = DB::select( DB::raw("select version()") );
        $version =  $results[0]->{'version()'};
        if (!$fullInfo){
            $version = substr($version, 0, strpos($version, "-"));
        }
        return $version;
    }

    public static function getDatabaseType()
    {
        $version = self::getDatabaseVersion(true);

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

    public function getSystemInfo($returnType = 'object', $fullInfo = false)
    {
        try {

          $laravelVersion = self::getLaravelVersion();
          $phpVersion = self::getPhpVersion($fullInfo);
          $databaseVersion = self::getDatabaseVersion($fullInfo);
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