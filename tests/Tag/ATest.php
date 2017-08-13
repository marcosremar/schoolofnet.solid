<?php
namespace Solid\Html\Tag;

class ATest extends \PHPUnit\Framework\TestCase
{
    public function testCriarTagComHrefEAncora()
    {
        $a = new A('http://www.example.com.br', 'Meu link');
        
        $this->assertEquals('<a href="http://www.example.com.br">Meu link</a>', trim($a));
    }
}