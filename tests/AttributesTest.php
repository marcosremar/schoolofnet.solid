<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 8/11/17
 * Time: 11:16 PM
 */

namespace Solid\Html;


class AttributesTest extends \PHPUnit\Framework\TestCase
{
    public function testCriarAttributosHtmlParaTags()
    {
        $attributes = new Attributes([
            'class' => 'btn btn-default',
            'data-modal' => '#login',
            'id' => 'login'
        ]);

        $this->assertEquals(' class="btn btn-default" data-modal="#login" id="login"', $attributes);
    }
}