<?php
/**
 * ConfigTest class
 *
 * PHP Version 5.3.10
 *
 * @category Youtube-dl
 * @package  Youtubedl
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @license  GNU General Public License http://www.gnu.org/licenses/gpl.html
 * @link     http://rudloff.pro
 * */
namespace Alltube\Test;

use Alltube\Config;

/**
 * Unit tests for the Config class
 *
 * PHP Version 5.3.10
 *
 * @category Youtube-dl
 * @package  Youtubedl
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @license  GNU General Public License http://www.gnu.org/licenses/gpl.html
 * @link     http://rudloff.pro
 * */
class ConfigTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test the getInstance function
     *
     * @return void
     */
    public function testGetInstance()
    {
        putenv('CONVERT=1');
        $config = Config::getInstance();
        $this->assertEquals($config->convert, true);
        $this->assertInternalType('array', $config->curl_params);
        $this->assertInternalType('array', $config->params);
        $this->assertInternalType('string', $config->youtubedl);
        $this->assertInternalType('string', $config->python);
        $this->assertInternalType('string', $config->avconv);
        $this->assertInternalType('string', $config->rtmpdump);
    }
}
