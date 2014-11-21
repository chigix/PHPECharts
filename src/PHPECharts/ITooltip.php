<?php

namespace PHPECharts\PHPECharts;

/**
 * 提示框接口
 *
 * @author ThemisMin <ThemisMin@gmail.com>
 */
interface ITooltip {

    /**
     * 显示策略
     * @return boolean
     */
    public function hasShow();

    /**
     * tooltip主体内容显示策略
     * @return boolean
     */
    public function hasShowContent();
}
