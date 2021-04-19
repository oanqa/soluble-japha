<?php

/*
 * Soluble Japha
 *
 * @link      https://github.com/belgattitude/soluble-japha
 * @copyright Copyright (c) 2013-2020 Vanvelthem Sébastien
 * @license   MIT License https://github.com/belgattitude/soluble-japha/blob/master/LICENSE.md
 */

namespace SolubleTest\Japha\Bridge\Driver\Pjb62;

use Soluble\Japha\Bridge\Adapter;
use Soluble\Japha\Bridge\Driver\Pjb62\Java;
use Soluble\Japha\Bridge\Driver\Pjb62\JavaProxy;
use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-13 at 10:21:03.
 */
class JavaProxyTest extends TestCase
{
    /**
     * @var string
     */
    protected $servlet_address;

    /**
     * @var string
     */
    protected $options;

    /**
     * @var Adapter
     */
    protected $adapter;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        \SolubleTestFactories::startJavaBridgeServer();
        $this->servlet_address = \SolubleTestFactories::getJavaBridgeServerAddress();
        $this->adapter = new Adapter([
            'driver' => 'Pjb62',
            'servlet_address' => $this->servlet_address,
        ]);
    }

    public function testGetJavaInternalObjectId()
    {
        //$string = $this->adapter->getDriver()->getClient()->java('java.lang.String', 'Hello');

        $string = new Java('java.lang.String', 'Hello');
        $javaProxy = new JavaProxy($string->get__java(), $string->get__signature());
        self::assertEquals('Hello', $javaProxy->__toString());

        self::assertEquals($string->get__signature(), $javaProxy->get__signature());
        self::assertEquals($string->get__java(), $javaProxy->get__java());
        self::assertEquals($javaProxy->__getJavaInternalObjectId(), $javaProxy->get__java());
    }
}
