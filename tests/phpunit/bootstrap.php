<?php
/**
 * Tests bootstrap file.
 *
 * @package   GoogleChromeLabs/ThirdPartyCapital
 * @copyright 2024 Google LLC
 * @license   https://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 */

if (! file_exists(dirname(__DIR__, 2) . '/vendor/autoload.php')) {
    die('Missing Composer autoloader.');
}

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';
