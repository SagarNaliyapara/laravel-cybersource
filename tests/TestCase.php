<?php

namespace LaravelCybersource;

use \Mockery as m;

class TestCase extends \PHPUnit_Framework_TestCase {

    protected $environment = 'testing';
    protected $merchantId = 'test-merchant-id';
    protected $mockApp;

    public function setUp()
    {

    }

    public function tearDown()
    {
        m::close();
    }

} 