--TEST--
Delete - DeleteOO
--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("Delete", "testDeleteOO");
--EXPECT--
PHP_COUCHBASE_OK