<?php

$_SERVER["DOCUMENT_ROOT"] = __DIR__ . '/../../../';
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];

define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
define('CHK_EVENT', true);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
require(__DIR__ . '/../install/index.php');

$oModule = \CModule::CreateModuleObject('s_romko.skeleton');
$oModule->DoInstall();

echo 'ok';