TDDBC for PHP with PHPUnit
==========================

これは、TDDBCのPHP向けPHPUnitプロジェクトです。

動作環境
--------

* PHP7.0以上

セットアップ
------------

```sh
curl -sS https://getcomposer.org/installer | php
php composer.phar install
```

`./vendor/bin/phpunit`を実行して

```sh
$ ./vendor/bin/phpunit
PHPUnit 6.3.0 by Sebastian Bergmann and contributors.

.                                        1 / 1 (100%)

Time: 43 ms, Memory: 4.00MB

OK (1 test, 1 assertion)
$ 
```

のようにテストが正常終了すればOKです。

ライセンス
---------

三条項BSDライセンス (3-clause BSD license)です。
詳しくはプロジェクト直下のLICENSEを読んでください。
