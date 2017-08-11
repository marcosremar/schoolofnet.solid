<?php

namespace Solid\Html;

class Html
{
    public function img(string $src)
    {
        $tag = $this->attributes('<img src="%s">');
        //return '<img src="' . $src .'">';
        return $tag;
    }

    public function a(string $href, string $anchor)
    {
        $tag = $this->attributes('<a href="%s"%s>%s</a>');

        $tag->attr[0] = $href;
        $tag->attr[1] = $anchor;

        return $tag;
    }

    private function attributes($mask)
    {

        $tag = new class {

            private $attributes;

            public function attribute(array $attributes)
            {
                $result = [];
                foreach($attributes as $key=>$value){
                    $result[] = $key . '="' . $value . '"';
                }

                $this->attributes = ' '.implode(' ', $result);
            }

            public function __toString() {
                return sprintf($mask, $this->attr[0], $this->attributes, $this->attr[1]);
            }
        };

        return $tag;
    }
}