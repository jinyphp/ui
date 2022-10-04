<?php
namespace Jiny\UI\Components\Bootstrap;

use \Jiny\Html\CDiv;
use Jiny\Html\CTag;

class TabBarContentBoot // extends CDiv
{
    public $tabbar;
    public $title;
    public $active;

    // Tabbar 에 의해서 호출 생성
    public function __construct($tabbar, $title, $active)
    {
        //parent::__construct();
        $this->tabbar = $tabbar;
        $this->title = $title;
        $this->active = $active;
    }

    public $items = [];
    public function addItem($item)
    {
        $this->items []= $item;
        return $this;
    }

    public function setContent($items=null)
    {
        $pane = new CTag('div',true);

        $pane->addClass("tab-pane");

        $tcnt = count($this->tabbar->tabs);
        $pane->setId("_jiny_tabbar".$this->title."_".$tcnt);
        //$pane->setId($this->title);

        // 입력받은 아이템 적용
        if($items) {
            $pane->addItem($items);
        }

        foreach($this->items as $item) {
            $pane->addItem($item);
        }


        if($this->active) {
            $pane->addClass("show active");
        }

        $this->tabbar->contents []= $pane;

        return $this->tabbar;
    }
}
