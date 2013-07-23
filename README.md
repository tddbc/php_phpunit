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
composer.phar install
```

`./vendor/bin/phpunit`を実行して

```sh
$ ./vendor/bin/phpunit -c .

PHPUnit 3.7.22 by Sebastian Bergmann.

Configuration read from phpunit.xml.dist

.

Time: 0 seconds, Memory: 4.75Mb

OK (1 test, 1 assertion)
```

のようにテストが正常終了すればOKです。

ライセンス
---------

三条項BSDライセンス (3-clause BSD license)です。
詳しくはプロジェクト直下のLICENSEを読んでください。