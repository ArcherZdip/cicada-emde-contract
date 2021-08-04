# readme

## 安装说明
### 配置composer.json
```
"repositories": [
    {
        "type":"git",
        "url":"git@git.100tal.com:jituan_xinxi_be/cicada-emde-contract.git"
    }
]
```

### 安装xxbe/cicada-emde-contract
```
composer require xxbe/cicada-emde-contract
```

## 引用
在`config/autoload/services.php`中增加：
```php
return [
    'consumers' => [
        // 账号
        [
            'name'     => 'AccountServiceInterface',
            'service' => \Xxbe\CicadaEmdeContract\Contract\AccountServiceInterface::class,
            'nodes'    => [ ##nodesetting ]
        ],
        // Yach部门
        [
            'name'     => 'YachDeptServiceInterface',
            'service' => \Xxbe\CicadaEmdeContract\Contract\YachDeptServiceInterface::class,
            'nodes'    => [ ##nodesetting ]
        ],
        // EHR部门
        [
            'name'     => 'MainDeptServiceInterface',
            'service' => \Xxbe\CicadaEmdeContract\Contract\MainDeptServiceInterface::class,
            'nodes'    => [ ##nodesetting ]
        ],
    ],
];
```