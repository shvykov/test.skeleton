<?php

$_SERVER["DOCUMENT_ROOT"] = __DIR__ . '/../../../';
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];

define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
define('CHK_EVENT', true);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$oModule = \CModule::CreateModuleObject('s_romko.skeleton');
$oModule->DoInstall();

file_put_contents(__DIR__ . '/test', 'This is test');