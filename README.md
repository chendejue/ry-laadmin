![LOGO](./resources/dist/images/logo-text.png "logo")
# 安装使用

## 1.先安装laravel框架.
``` bash
composer create-project --prefer-dist "laravel/laravel" laravel 
```
## 2.按照以上步骤安装好框架后进行框架配置和初始化，其中主要配置下面的数据库信息
> DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=数据库名字
DB_USERNAME=数据库账号
DB_PASSWORD=你的mysql联接密码

## 3.再进行安装本框架
```bash
composer require ruiyi/laadmin
```

## 4.再执行发布命令
```bash
php artisan ryadmin:publish
```
>该命令会生成相关的配置文件，文件位置位于：config/admin,可以在里面修改安装的地址、数据库连接、以及表名，建议都是用默认配置不修改。

## 5.再执行安装命令
```bash
php artisan ryadmin:install
```
>执行该命令后，会自动安装并且自动生成相关的目录

## 6.最后执行数据库迁移命令即可安装完成！
```bash
php artisan migrate
```

