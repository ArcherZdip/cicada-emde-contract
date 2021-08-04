<?php


namespace Xxbe\CicadaEmdeContract\Contract;


interface BaseEmplServiceInterface
{
    /**
     * 分页获取员工数据
     *
     * @param int $from
     * @param int $pageSize
     * @param array $workcodes
     * @param bool $active
     *
     * @return array
     * @author ZHANGLINGYU
     */
    public function getPaginate(int $from = 1, int $pageSize = 100, array $workcodes = [], bool $active = true);
}