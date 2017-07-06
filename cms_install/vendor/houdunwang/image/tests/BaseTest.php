<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDPHP framework]
 * |      Site: www.hdphp.com  www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace tests;

use houdunwang\config\Config;
use houdunwang\image\Image;
use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{
    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        Config::loadFiles('config');
    }

    public function testThumb()
    {
        $status = Image::thumb('storage/1.jpg', 'storage/storage_thumb1.jpg', 100, 100, 1);
        $this->assertTrue($status);

        $status = Image::thumb('storage/1.jpg', 'storage/storage_thumb2.jpg');
        $this->assertTrue($status);
    }

    public function testWater()
    {
        $status = Image::water('storage/1.jpg', 'storage/storage_water.jpg', 9,null,'baidu.com');
        $this->assertTrue( $status);

        $status = Image::water('storage/1.jpg', 'storage/storage_water.jpg');
        $this->assertTrue( $status);
    }
}