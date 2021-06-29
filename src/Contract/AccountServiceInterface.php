<?php


namespace Xxbe\CicadaEmdeContract\Contract;


interface AccountServiceInterface
{
    /**
     * @param array $where
     * @param array $columns
     * @param bool $isDel
     * @return array
     * @author zhanglingyu@tal.com
     */
    public function findOne(array $where = [], array $columns = ['*'], bool $isDel = false): array;

    /**
     * 获取员工数据包含EHR部门数据
     *
     * @param array $where
     * @param array|string[] $columns
     * @param bool $isDel
     *
     * @return array
     * @author ZHANGLINGYU
     */
    public function findOneWithOneDept(array $where = [], array $columns = ['*'], bool $isDel = false): array;

    /**
     * paginate get accounts.
     *
     * @param array $where
     * @param array $columns
     * @param int $initialId
     * @param int $perPage
     * @param bool $isDel
     * @return array
     * @author zhanglingyu@tal.com
     */
    public function getPaginate(array $where = [], array $columns = ['*'], int $initialId = 0, int $perPage = 100, bool $isDel = false): array;

    /**
     * search account from es.
     *
     * @param string $q
     * @param int $size
     * @param int $page
     * @param bool $active
     *
     * @return mixed
     * @author ZHANGLINGYU
     */
    public function search(string $q, int $size = 5, int $page = 1, bool $active = true);

    /**
     * 通过工号获取员工详情
     *
     * @param array $workcodes
     *
     * @return mixed
     * @author ZHANGLINGYU
     */
    public function getEmplByWorkcode(array $workcodes = []);

    /**
     * 通过部门和员工属性获取员工 from ES
     * 部门向下继承
     *
     * @param array $deptIds
     * @param array $class
     * @param int $size
     * @param int $page
     * @param bool $active
     *
     * @return array
     * @throws \Exception
     * @author ZHANGLINGYU
     */
    public function getEmplByEmplIdsAndClass(array $deptIds = [], array $class = [], int $size = 5, int $page = 1, bool $active = true);

    /**
     * 通过EHR部门获取员工 from ES （不包含合作伙伴）
     * 部门向下继承
     *
     * @param array $deptIds
     * @param int $size
     * @param int $page
     * @param bool $active
     *
     * @return array
     * @throws \Exception
     * @author ZHANGLINGYU
     */
    public function getEmplByEhrDeptIds(array $deptIds = [], int $size = 5, int $page = 1, bool $active = true);

    /**
     * 通过EHR部门获取员工 from ES (包含合作伙伴）
     *
     * @param array $deptIds EHR部门ID
     * @param int $size
     * @param int $page
     * @param bool $isInherit 是否向下继承
     * @param bool $active
     *
     * @return mixed
     * @author ZHANGLINGYU
     */
    public function getEmplByEhrIds(array $deptIds = [], int $size = 5, int $page = 1, bool $isInherit = true, bool $active = true);
}