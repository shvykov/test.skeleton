<?php

namespace SRomko;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Events
{
    public static function postPackageInstall(PackageEvent $event)
    {
        file_put_contents(__DIR__ . '/test1', __DIR__);
        $_SERVER["DOCUMENT_ROOT"] = __DIR__ . '/../../../';
        $DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];

        define("NO_KEEP_STATISTIC", true);
        define("NOT_CHECK_PERMISSIONS", true);
        define('CHK_EVENT', true);

        require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

        $oModule = \CModule::CreateModuleObject('s_romko.skeleton');
        $oModule->DoInstall();

        file_put_contents(__DIR__ . '/test2', $_SERVER["DOCUMENT_ROOT"]);
    }
}
