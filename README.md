TDDBC for PHP with PHPUnit
==========================

これは、TDDBCのPHP向けPHPUnitプロジェクトです。

動作環境
--------

* PHP7.2以上

セットアップ
------------

```sh
curl -sS https://getcomposer.org/installer | php
php composer.phar install
```

`./vendor/bin/phpunit`を実行して

```sh
$ ./vendor/bin/phpunit
PHPUnit 8.5.2 by Sebastian Bergmann and contributors.

.                                        1 / 1 (100%)

Time: 43 ms, Memory: 4.00MB

OK (1 test, 1 assertion)
$ 
```

のようにテストが正常終了すればOKです。

testdox アノテーションについて
----------------------------

`make test`でのテスト実行時に TestDox 形式で結果が出力されるようになっています。

クラスやメソッドの PHPDoc に`@testdox XXX`と記述することでテスト結果の出力を任意の文字列にすることができます。

記述方法については [ExampleTest.php](https://github.com/tddbc/php_phpunit/blob/master/tests/Tddbc/ExampleTest.php) を参照してください。

ライセンス
---------

三条項BSDライセンス (3-clause BSD license)です。
詳しくはプロジェクト直下のLICENSEを読んでください。
