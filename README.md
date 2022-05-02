# 資料庫系統作業

## https://hub.docker.com/r/mattrayner/lamp (Ref Docker Image)

## 啟動 Server
```
# 開啟 Apach Server and MySQL server
cd docker
./docker_run.sh
```

## MySQL Server
第一次執行先會建立初始化的 MySQL Server
```
# mysql data 會映射至 mysql_db 資料夾內
-v $(pwd)/../mysql_db:/var/lib/mysql
```
完成初始化後<br>
每次執行 docker 都會使用已存在 mysql_db 內的資料<br>


## PhpMyAdmin
帳號:admin<br>
密碼:系統第一次建立DB時會隨機給一組 (進入 PhpMyAdmin 可以修改)<br>
http://127.0.0.1/phpmyadmin<br>


## 測試首頁
http://127.0.0.1/index.php<br>
