<?php

namespace databaseConnection;

class databaseConnection {
    private static $obj = null;
    private function __construct(){}
    private function __clone(){}
    /**
     * 格式化字节
     * @param int $num       数字
     * @param int $precision 精准度
     * @return string
     */
    public static function conn() {
        if (self::$obj == null) {
            self::$obj = new self;
        }
        return self::$obj;
    }
}
