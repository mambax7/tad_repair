<?php

include_once $GLOBALS['xoops']->path("modules/tadtools/language/{$xoopsConfig['language']}/admin_common.php");
define('_TAD_NEED_TADTOOLS', "This module needs TadTools module. You can download TadTools from <a href='http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50' target='_blank'>Tad's web</a>.");

define('_AND', ',');

//unit.php
define('_MA_TADREPAIR_UNIT_TITLE', 'Department responsible for maintenance');
define('_MA_TADREPAIR_UNIT_ADMIN', 'Management personnel');
define('_MA_TAD_REPAIR_UNIT_FORM', 'Create Department responsible for the maintenance and user management');

//index.php
define('_MA_TADREPAIR_REPAIR_SN', 'Number');
define('_MA_TADREPAIR_REPAIR_TITLE', 'Repair contents');
define('_MA_TADREPAIR_REPAIR_DATE', 'Repair date');
define('_MA_TADREPAIR_REPAIR_STATUS', 'Severity');
define('_MA_TADREPAIR_REPAIR_STATUS2', 'Rank');
define('_MA_TADREPAIR_REPAIR_UID', 'Repaired by');
define('_MA_TADREPAIR_UNIT', 'Notice');
define('_MA_TADREPAIR_FIXED_UID', 'User');
define('_MA_TADREPAIR_FIXED_DATE', 'Reply Date');
define('_MA_TADREPAIR_FIXED_STATUS', 'Processing status');
define('_MA_TADREPAIR_FIXED_STATUS2', 'Treatment');
define('_MA_TADREPAIR_EMPTY', 'Congratulations, there are currently no issues!!');