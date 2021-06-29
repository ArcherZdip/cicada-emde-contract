<?php


namespace Xxbe\CicadaEmdeContract\Contract;


interface MainDeptServiceInterface
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
     * 获取一级部门
     *
     * @param array|string[] $oneDepts
     *
     * @return array
     * @author ZHANGLINGYU
     */
    public function getOneDept(array $oneDepts = ['J01', 'S01', 'F01']): array;

    /**
     * search dept
     *
     * @param string $q
     * @param int $size
     * @param int $page
     * @param bool $active
     * @param array $fields
     *
     * @return mixed
     * @author ZHANGLINGYU
     */
    public function search(string $q, int $size = 5, int $page = 1, bool $active = true, array $fields = ['dept_id', 'descr', 'c_dept_lvl', 'parent_dept_ids', 'dept_codes', 'parent_node_name', 'descrshort', 'eff_status']);

    /**
     * 根据部门ID获取部门详情
     *
     * @param array $deptIds
     *
     * @return mixed
     * @author ZHANGLINGYU
     */
    public function getDeptByDeptId(array $deptIds = []);

    /**
     * 根据部门ID获取部门详情 (通过ID获取包括子路径的部门列表)
     *
     * @param array $deptIds
     * @param int $size
     * @param int $page
     *
     * @param bool $active
     * @return mixed
     * @throws \Exception
     * @author ZHANGLINGYU
     */
    public function getFullDeptByDeptIds(array $deptIds = [], int $size = 5, int $page = 1, bool $active = true);
}