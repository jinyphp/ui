<?php
namespace Jiny\UI\Components\Bootstrap;

use \Jiny\Html\CDiv;
use Jiny\Html\Ctag;
use Illuminate\Support\Facades\DB;


class TabBarBoot extends CDiv
{
    private static $Instance;
    public static function instance()
    {
        if (!isset(self::$Instance)) {
            // 자기 자신의 인스턴스를 생성합니다.
            self::$Instance = new self();
        }
        return self::$Instance;
    }

    public $type;
    public function type($type)
    {
        $this->type = $type;
        return $this;
    }

    public $active;
    ## 사용자가 텍스트 형태로 텝 이름을 지정함
    public function addTab($title, $active=false)
    {
        $li = new Ctag('li',true);
        $li->addClass("nav-item"); // bootstrap

        // 1. 이동링크
        $link = $this->link($title, $active);
        $li->addItem($link);

        $this->tabs []= $li;
        if($active) {
            $this->active = count($this->tabs); // active가 선택된 항목을 체크
        }

        return new TabBarContentBoot($this, $title, $active);
    }

    // Admin Setting Tab
    public function setTab($title, $id, $active=false)
    {
        $li = new Ctag('li',true);
        //$li = new Ctag('div',true);
        $li->addClass("nav-item"); // bootstrap
        // tab 드래그
        //$li->addClass("dragtab");
        //$li->setAttribute('draggable',"true");
        //$li->setAttribute('data-id',$id);



        // 1. 이동링크
        $link = $this->link($title, $active);
        $li->addItem($link);

        //$editLink = $this->btnSetting($id);
        //$li->addItem($editLink);

        $this->tabs []= $li;
        if($active) {
            $this->active = count($this->tabs); // active가 선택된 항목을 체크
        }

        return new TabBarContentBoot($this, $title, $active);
    }





    public function btnSetting($id)
    {
        $setting = xSpan();
        $setting->addHtml('<svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
        </svg>')->addClass("px-2");

        $link = (new CTag('a',true))
                    ->addItem($setting)
                    ->setAttribute('href',"#");
        $link->setAttribute('wire:click', "popupTabbar('".$id."')");
        $link->addClass("nav-link"); // bootstrap

        return $link;
    }

    public function link($title, $active=false)
    {
        $link = new Ctag('a',true);

        $link->setAttribute("data-bs-toggle", "tab");
        $link->setAriaExpanded("false");
        $link->addClass("nav-link"); // bootstrap

        if ($active) {
            $link->addClass("active");
        }

        $link->addItem(
            xSpan()
            ->addItem($title)
            //->addClass("d-none d-md-block") //bootstrap
        );

        $tcnt = count($this->tabs) + 1;
        $link->setHref("#"."_jiny_tabbar".$title."_".$tcnt);
        //$link->setHref("#".$title);


        return $link;
    }

    public $tabs=[];
    public $contents = [];

    public function tabHeader()
    {
        $ul = new Ctag('ul',true);
        //$ul = new Ctag('div',true);
        foreach($this->tabs as $tab) {
            $ul->addItem($tab);
        }

        $this->tabs = []; // 초기화

        $ul->addClass("mb-3 nav nav-tabs"); // bootstrap
        if($this->type) {
            $ul->addClass($this->type);
        }
        return $ul;
    }

    public function tabContent()
    {
        $content = new Ctag('div',true);

        foreach($this->contents as $pane) {
            $content->addItem($pane);
        }

        $this->contents = []; // 초기화

        $content->addClass("tab-content"); //bootstrap
        return $content;
    }

    public function __toString()
    {
        // admin 설정
        // 설정버튼 (bootstrap)
        $setting = xSpan();
        $setting->addHtml('<svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg>')->addClass("px-2");

        $link = (new CTag('a',true))
                    ->addItem($setting)
                    ->setAttribute('href',"#");
        $link->setAttribute('wire:click', "popupTabbar");
        $link->addClass("nav-link"); // bootstrap

        $li = new Ctag('li',true);
        $li->addClass("nav-item"); // bootstrap
        $li->addItem($link);

        $this->tabs []= $li;




        // active가 선택되어 있지 않는 경우, 기본값 0
        if(!$this->active) {
            $this->tabs[0]->items[0]->addClass("active"); //bootstrap
            $this->contents[0]->addClass("show active"); //bootstrap
        }

        $res = $this->tabHeader();      // tab 해더
        $res .= $this->tabContent();    // tab 내용
        return $res;
	}



    public function none()
    {

    }

}
