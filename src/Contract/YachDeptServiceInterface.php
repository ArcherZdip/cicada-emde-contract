<?php


namespace Xxbe\CicadaEmdeContract\Contract;


interface YachDeptServiceInterface
{
    /**
     * find one dept from db.
     *
     * @param array $where
     * @param array|string[] $columns
     * @param bool $isDel
     *
     * @return mixed
     * @author ZHANGLINGYU
     */
    public function findOne(array $where = [], array $columns = ['*'], bool $isDel = false);

    /**
     * 分页获取dept from db.
     *
     * @param array $where
     * @param array|string[] $columns
     * @param int $initialId
     * @param int $perPage
     * @param bool $isDel
     *
     * @return array
     * @author ZHANGLINGYU
     */
    public function getPaginate(array $where = [], array $columns = ['*'], int $initialId = 0, int $perPage = 100, bool $isDel = false): array;

    /**
     * 根据部门ID获取部门详情
     *
     * @param array $deptIds
     * @param int $size
     * @param int $page
     *
     * @param bool $active
     * @return mixed
     * @author ZHANGLINGYU
     */
    public function getFullDeptByDeptIds(array $deptIds = [], int $size = 5, int $page = 1, bool $active = true);

    /**
     * search dept
     *
     * @param string $q
     * @param int $size
     * @param int $page
     *
     * @return mixed
     * @author ZHANGLINGYU
     */
    public function search(string $q, int $size = 5, int $page = 1);

    /**
     * 根据部门ID获取部门详情
     *
     * @param array $deptIds
     *
     * @return mixed
     * @author ZHANGLINGYU
     */
    public function getDeptByDeptId(array $deptIds = []);

}