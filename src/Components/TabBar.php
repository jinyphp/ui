<?php
namespace Jiny\UI\Components;

use \Jiny\Html\CDiv;
use Jiny\Html\Ctag;
use Illuminate\Support\Facades\DB;


class TabBar extends CDiv
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

    /*
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

        return new TabBarContent($this, $title, $active);
    }

    // Admin Setting Tab
    public function setTab($title, $id, $active=false)
    {
        $li = new Ctag('li',true);
        //$li = new Ctag('div',true);
        $li->addClass("nav-item"); // bootstrap
        // tab 드래그




        // 1. 이동링크
        $link = $this->link($title, $active);
        $li->addItem($link);

        //$editLink = $this->btnSetting($id);
        //$li->addItem($editLink);

        $this->tabs []= $li;
        if($active) {
            $this->active = count($this->tabs); // active가 선택된 항목을 체크
        }

        return new TabBarContent($this, $title, $active);
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

        //$link->addClass("dragtab");
        //$link->setAttribute('draggable',"true");
        //$link->setAttribute('data-id',$id);
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
    */

    public $items = [];
    public $active;

    public function setTab($titles, $content, $drag=false)
    {
        $cnt = count($this->items) + 1;

        // 순서가 중요...
        $this->items []= $this->option($cnt, $drag); // option
        $tabNav = $this->tabNav($cnt, $titles); // 텝바
        if($drag) {
            $tabNav->addClass("dragtab");
            $tabNav->setAttribute("draggable", "true");
            $tabNav->setAttribute("data-index", $drag);
        }
        $this->items []= $tabNav;
        $this->items []= $this->content($content, $drag); // 컨덴츠 추가

        return $this;
    }

    private function option($cnt, $drag)
    {
        $tabInput = new Ctag('input',false);
        $tabInput->setAttribute('type',"radio");
        $tabInput->setAttribute('value',$cnt);
        $tabInput->setAttribute('data-index', $drag);
        $tabInput->setId("__tab-".$cnt)->setName("__tabbar");
        // $tabInput->setAttribute('checked',"checked");
        return $tabInput;
    }

    private function tabNav($cnt, $titles)
    {
        $tabNav = new Ctag('nav',true);
        $tabNav->addClass("tab-header");


        // 텍스트 라벨명 등록
        if(is_string($titles)) {
            $label = $this->label($titles, $cnt);
            $tabNav->addItem($label);
        } else
        // 복수등록
        if(is_array($titles)) {
            foreach($titles as $key => $item) {
                // 텍스트는 라벨명으로 처리
                if($key == "label") {
                    $label = $this->label($item, $cnt);
                    $tabNav->addItem($label);
                } else
                // 그외 객체는 추가함.
                if(is_object($item)) {
                    $tabNav->addItem($item);
                }
            }
        }
        return $tabNav;
    }

    private function content($content, $drag)
    {
        $tabContent = new Ctag('article',true);
        $tabContent->addClass("tab-content");
        $tabContent->setAttribute('data-tab-index', $drag);
        $tabContent->addItem($content);
        return $tabContent;
    }

    private function label($title, $cnt)
    {
        $label = new Ctag('label',true);
        $label->setAttribute('for', "__tab-".$cnt);
        $label->addItem($title);
        return $label;
    }

    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }


    /**
     * 텝바 출력
     */
    public function __toString()
    {
        $section = new Ctag('section',true);
        $section->addClass("jiny tabbar");



        // 선택되어 있지 않는 경우 초기화
        if(!$this->active) {
            $this->active = 1;
        }

        // 저장된 텝바 정보를 처리함.
        foreach($this->items as $item) {
            if($item->tagname == "input") {
                if($this->active == $item->getAttribute('value')) {
                    $item->setAttribute('checked',"checked");
                }
            }

            $section->addItem($item);
        }

        return $section;
    }

}
