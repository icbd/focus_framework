# 概览

## 目录结构
|   目录| 用途|
|---|---|
|   root|   根目录,入口|
|   app|    MVC应用目录|
|   focus|  框架核心组件|
|   doc|    说明文档|
|   temp|   临时文件,log等|
|   unitest|    测试文件|

     
```
.
├── app
│   ├── auto_include
│   │   ├── app.conf.php
│   │   ├── databases
│   │   │   └── redis_conf.php
│   │   ├── helpers
│   │   └── methods
│   │       └── user_methods.php
│   ├── controller
│   │   └── Hello.php
│   ├── model
│   │   └── HelloDao.php
│   └── view
│       └── index.html
├── define.php
├── doc
│   └── introduce.md
├── focus
│   ├── FocusCore.php
│   ├── FocusMethods.php
│   ├── FocusRouter.php
│   └── Twig(下级目录略)
├── readme.md
├── root
│   ├── favicon.ico
│   └── index.php
├── temp
│   └── access.log
└── unitest
    └── phpunit-5.3.4.phar

```