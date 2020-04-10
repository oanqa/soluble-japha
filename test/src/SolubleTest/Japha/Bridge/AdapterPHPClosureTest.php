<?php

/*
 * Soluble Japha
 *
 * @link      https://github.com/belgattitude/soluble-japha
 * @copyright Copyright (c) 2013-2020 Vanvelthem Sébastien
 * @license   MIT License https://github.com/belgattitude/soluble-japha/blob/master/LICENSE.md
 */

namespace SolubleTest\Japha\Bridge;

use Soluble\Japha\Bridge\Adapter;
use PHPUnit\Framework\TestCase;

/*
class TestClosure
{
    public function printHello()
    {
        echo 'hello';
    }
}
*/
/**
 * Generated by PHPUnit_SkeletonGenerator on 2014-11-04 at 16:47:42.
 */
class AdapterPHPClosureTest extends TestCase
{
    /**
     * @var string
     */
    protected $servlet_address;

    /**
     * @var Adapter
     */
    protected $adapter;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        \SolubleTestFactories::startJavaBridgeServer();

        $this->servlet_address = \SolubleTestFactories::getJavaBridgeServerAddress();

        $this->adapter = new Adapter([
            'driver' => 'Pjb62',
            'servlet_address' => $this->servlet_address,
        ]);
    }

    public function testMakeClosure()
    {
        $this->markTestSkipped('Currently closure support does not work');
        $ba = $this->adapter;
        /*
        $testClosure = new TestClosure();
        $ba->getDriver()->invoke(null, 'makeClosure', [
            $testClosure,
            null,
            //$ba->java('java.lang.Object')
        ]);*/
    }
}
