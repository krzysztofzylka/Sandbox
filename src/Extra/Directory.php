<?php

namespace Krzysztofzylka\Sandbox\Extra;

use Krzysztofzylka\Generator\Generator;
use Random\RandomException;

class Directory
{

    /**
     * Generates a sandbox directory path.
     * @return string The generated sandbox directory path.
     * @throws RandomException
     */
    public static function generateSandboxDirectory() : string {
        return sys_get_temp_dir() . '/php_sandbox/' . Generator::uniqHash();
    }

}