TDDBC for PHP with PHPUnit
==========================

これは、TDDBCのPHP向けPHPUnitプロジェクトです。

動作環境
--------

* PHP5.3.3以上

セットアップ
------------

```sh
curl -sS https://getcomposer.org/installer | php
php composer.phar install
```

`./vendor/bin/phpunit`を実行して

```sh
$ ./vendor/bin/phpunit -c .
PHPUnit 4.1.x-y-zzzzz by Sebastian Bergmann.

Configuration read from phpunit.xml.dist

.

Time: 34 ms, Memory: 3.50Mb

OK (1 test, 1 assertion)
```

のようにテストが正常終了すればOKです。

ライセンス
---------

三条項BSDライセンス (3-clause BSD license)です。
詳しくはプロジェクト直下のLICENSEを読んでください。
