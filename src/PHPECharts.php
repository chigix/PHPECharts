<?php

namespace PHPECharts;

/**
 * PHPECharts 入口类
 *
 * @author ThemisMin <ThemisMin@gmail.com>
 * @version v1.0
 */
class PHPECharts {

    /**
     * 静态单例
     * @var PHPECharts
     */
    private static $_instance = null;

    /**
     * 
     * @param type $config
     * @param type $data
     */
    public function __construct($config = array(), $data = array()) {
        ;
    }

    /**
     * GET 静态单例
     * @return PHPECharts
     */
    public static function getInstance() {
        if (false == (self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

}
