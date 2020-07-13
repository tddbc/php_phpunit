TDDBC for PHP with PHPUnit
==========================

これは、TDDBCのPHP向けPHPUnitプロジェクトです。

動作環境
--------

* PHP7.3以上
  * PHP7.2の場合は、https://github.com/tddbc/php_phpunit/tree/phpunit-8 を利用してください

セットアップ
------------

```sh
curl -sS https://getcomposer.org/installer | php
php composer.phar install
```

`./vendor/bin/phpunit`を実行して

```sh
$ ./vendor/bin/phpunit
PHPUnit 9.2.5 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 00:00.683, Memory: 4.00 MB

OK (1 test, 1 assertion)
$ 
```

のようにテストが正常終了すればOKです。

ライセンス
---------

三条項BSDライセンス (3-clause BSD license)です。
詳しくはプロジェクト直下のLICENSEを読んでください。
