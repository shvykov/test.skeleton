<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;

Loc::loadMessages(__FILE__);

/**
 * Class s_romko_skeleton
 */
class s_romko_skeleton extends CModule
{
    /**
     * @var string Код модуля
     */
    var $MODULE_ID = 's_romko.skeleton';

    /**
     * test_skeleton constructor.
     */
    public function __construct()
    {
        $arModuleVersion = array();

        include __DIR__ . '/version.php';
        if (is_array($arModuleVersion) && array_key_exists('VERSION', $arModuleVersion)) {
            $this->MODULE_VERSION = $arModuleVersion['VERSION'];
            $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        }

        $this->MODULE_NAME = Loc::getMessage('TEST_SKELETON_MODULE_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('TEST_SKELETON_MODULE_DESCRIPTION');
        $this->MODULE_GROUP_RIGHTS = 'N';
    }

    /**
     * @return bool
     */
    public function DoInstall()
    {
        ModuleManager::registerModule($this->MODULE_ID);

        return true;
    }

    /**
     * Удаление модуля
     */
    public function DoUninstall()
    {
        ModuleManager::unRegisterModule($this->MODULE_ID);
    }
}