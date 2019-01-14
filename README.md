# 基于Baidu Ocr SDK的文字识别laravel service
Bairdu Ocr SDK [https://ai.baidu.com/docs#/OCR-PHP-SDK/top]

# 安装

* 引入类库
composer require ydalbj/ocr

* Laravel config

    - 复制配置文件baidu.php
        ```shell
        $ php artisan vendor:publish --tag=orc
        ```

    - 配置Baidu Ocr Api Key环境变量(例如.env文件)
        ```
        BAIDU_APP_ID=xxxxx
        BAIDU_APP_KEY=xxxxx
        BAIDU_APP_SECRET=xxxxx
        ```
