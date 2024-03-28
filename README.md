# thinkphp-model-doc

## 安装

---
```shell
composer require flyaction/thinkphp-model-doc
```
---

## 初始化
### 修改配置 *config/console.php* 文件

---
```php
<?php
// +----------------------------------------------------------------------
// | 控制台配置
// +----------------------------------------------------------------------
return [
    // 指令定义
    'commands' => [
        'modelDoc' => 'app\command\modelDoc', // 生成model注释
    ],
];


```
---

## 使用方法


---
```php 
php think model_doc
```
---

## 可选参数

```php 
# 修改common目录下的所有模型 
php think model_doc -p common 
# 修改common目录下的User模型 
php think insert_model_doc -p common -m User
```