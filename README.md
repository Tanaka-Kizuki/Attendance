<p align="center">
  <img width="６００" src="https://user-images.githubusercontent.com/39142850/100244649-85aaa200-2f7a-11eb-9ec1-4a309eb6d18c.png">
</p>
<h2 align="center">勤怠管理システム</h2>

出勤時間や退勤時間を記録して、勤務時間を計算するアプリです。<br><br>

## 使用技術

- PHP（Laravel）
- SQLite
- HTML, CSS
- JavaScript
<br><br>

## インストール方法

**１、**`git clone https://github.com/Tanaka-Kizuki/Attendance.git`

**２、**`cd Attendance`

**３、.envの設定**

ファイル名の変更

`.env.e` → `.env.example`

DBの設定

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

↓

```
DB_CONNECTION=sqlite
```

**４、database.sqliteの作成**

`touch database/database.sqlite`

**５、keyの作成**

`php artisan key:generate`

**６、DBをmigrateする**

`php artisan migrate`

**７、起動**

`php artisan serve`

**８、アクセス**

`http://127.0.0.1:8000/login`

or

`http://127.0.0.1:8000`
