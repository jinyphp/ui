<?php

namespace Jiny\UI;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;

/*
use Jiny\UI\Http\Livewire\DataField;
use Jiny\UI\Http\Livewire\DataList;
use Jiny\UI\Http\Livewire\DataForm;
use Jiny\UI\Http\Livewire\DataFormSetting;
use Jiny\UI\Http\Livewire\DataTable;
*/

use Livewire\Livewire;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class JinyUIServiceProvider extends ServiceProvider
{
    private $package = "jinyui";
    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', $this->package);

        // 설정파일 복사
        $this->publishes([
            __DIR__ . '/../config/setting.php' => config_path('jiny/ui/setting.php'),
            __DIR__ . '/../resources/scss' => resource_path('scss'),
        ], 'ui');


        // ui 레이아웃 골격
        Blade::component('jinyui::components.' . 'app', 'app');
        Blade::component('jinyui::components.' . 'app', 'ui-app');

        // 프레임워크
        Blade::component('jinyui::components.' . 'bootstrap', 'bootstrap'); //부트스트랩 랩퍼
        Blade::component('jinyui::components.' . 'tailwindcss', 'tailwindcss');

        $this->layouts();
        $this->rowsColume();
        $this->container();

        $this->configureComponents();


        /**
         * 부트스트랩 Components
         */
        $this->accordion();
        $this->alerts();
        $this->badge();
        $this->breadcrumb();
        $this->buttons();
        $this->button_group();
        $this->card();
        $this->carousel();
        $this->close_button();
        $this->collapse();
        $this->dropdowns();
        $this->list_group();
        $this->modal();
        $this->navbar();
        $this->navs_tabs();
        $this->offcanvas();
        $this->pagination();
        $this->placeholders();
        $this->popovers();
        $this->progress();
        $this->scrollspy();
        $this->spinners();
        $this->toasts();
        $this->tooltips();

        $this->sidebar();

        $this->boxColor();

    }

    public function register()
    {
        /* 라이브와이어 컴포넌트 등록 */
        $this->app->afterResolving(BladeCompiler::class, function () {

        });
    }



    protected function layouts($type = "bootstrap")
    {
        Blade::component($this->package . '::components.' . 'layouts.full_flex', 'full');
        Blade::component($this->package . '::components.' . 'layouts.page_center', 'page-center');

        Blade::component('jinyui::components.' . 'layout.bootstrap.container', 'container');
        // if($type == "bootstrap") {
        //
        // } else {
        //     Blade::component('jinyui::components.'.'layout.tailwind.container', 'container');
        // }


        // // 레이아웃
        Blade::component($this->package . '::components.' . 'layout.full-screen', 'full-screen');
        Blade::component($this->package . '::components.' . 'layout.center', 'center');

        Blade::component(\Jiny\UI\View\Components\MainContent::class, "main-content");

        Blade::component(\Jiny\UI\View\Components\Layouts\Layout::class, 'layout');
        Blade::component($this->package . '::components.' . 'layout.layout-item', 'layout-item');

        //Blade::component($this->package.'::components.'.'app', 'app');
        //Blade::component($this->package.'::components.'.'layout', 'layout');
        //Blade::component($this->package.'::components.'.'theme', 'theme');

        //Blade::component($this->package.'::components.'.'layouts.main', 'main');
        //Blade::component($this->package.'::components.'.'layouts.content', 'main-content');


    }

    protected function container()
    {
        Blade::component($this->package . '::components.' . 'container.container', 'container');

        Blade::component($this->package . '::components.' . 'container.section_container', 'section-container');

        Blade::component($this->package . '::components.' . 'container.container-fluid', 'container-fluid');
        Blade::component($this->package . '::components.' . 'container.container-fluid', 'container-full');
    }

    protected function rowsColume()
    {
        Blade::component($this->package . '::components.' . 'layout.row', 'row');

        Blade::component($this->package . '::components.' . 'layout.col', 'col');
        Blade::component($this->package . '::components.' . 'layout.col-12', 'col-12');
        Blade::component($this->package . '::components.' . 'layout.col-9', 'col-9');
        Blade::component($this->package . '::components.' . 'layout.col-8', 'col-8');
        Blade::component($this->package . '::components.' . 'layout.col-6', 'col-6');
        Blade::component($this->package . '::components.' . 'layout.col-4', 'col-4');
        Blade::component($this->package . '::components.' . 'layout.col-3', 'col-3');
        Blade::component($this->package . '::components.' . 'layout.col-10', 'col-10');
        Blade::component($this->package . '::components.' . 'layout.col-2', 'col-2');

        // 가로 가운데 정렬배치
        Blade::component($this->package . '::components.' . 'layout.row-center', 'row-center');
        Blade::component($this->package . '::components.' . 'layout.row-center-11', 'row-center-11');
        Blade::component($this->package . '::components.' . 'layout.row-center-10', 'row-center-10');
        Blade::component($this->package . '::components.' . 'layout.row-center-9', 'row-center-9');
        Blade::component($this->package . '::components.' . 'layout.row-center-8', 'row-center-8');
        Blade::component($this->package . '::components.' . 'layout.row-center-7', 'row-center-7');
        Blade::component($this->package . '::components.' . 'layout.row-center-6', 'row-center-6');
        Blade::component($this->package . '::components.' . 'layout.row-center-5', 'row-center-5');
        Blade::component($this->package . '::components.' . 'layout.row-center-4', 'row-center-4');
        Blade::component($this->package . '::components.' . 'layout.row-center-3', 'row-center-3');
        Blade::component($this->package . '::components.' . 'layout.row-center-2', 'row-center-2');
        Blade::component($this->package . '::components.' . 'layout.row-center-1', 'row-center-1');
    }


    protected function accordion()
    {

    }

    protected function alerts()
    {
        // Alert ShortCut
        Blade::component($this->package . '::components.alert.primary', 'alert-primary');
        Blade::component($this->package . '::components.alert.secondary', 'alert-secondary');
        Blade::component($this->package . '::components.alert.success', 'alert-success');
        Blade::component($this->package . '::components.alert.danger', 'alert-danger');
        Blade::component($this->package . '::components.alert.warning', 'alert-warning');
        Blade::component($this->package . '::components.alert.info', 'alert-info');

        Blade::component($this->package . '::components.alert.primary-outline', 'alert-primary-outline');
        Blade::component($this->package . '::components.alert.secondary-outline', 'alert-secondary-outline');
        Blade::component($this->package . '::components.alert.success-outline', 'alert-success-outline');
        Blade::component($this->package . '::components.alert.danger-outline', 'alert-danger-outline');
        Blade::component($this->package . '::components.alert.warning-outline', 'alert-warning-outline');
        Blade::component($this->package . '::components.alert.info-outline', 'alert-info-outline');

        Blade::component($this->package . '::components.alert.primary-none', 'alert-primary-none');
        Blade::component($this->package . '::components.alert.secondary-none', 'alert-secondary-none');
        Blade::component($this->package . '::components.alert.success-none', 'alert-success-none');
        Blade::component($this->package . '::components.alert.danger-none', 'alert-danger-none');
        Blade::component($this->package . '::components.alert.warning-none', 'alert-warning-none');
        Blade::component($this->package . '::components.alert.info-none', 'alert-info-none');
    }

    protected function badge()
    {

        //Blade::component(\Jiny\UI\View\Components\Button\Badge::class, 'badge');
        // 사각형모형 : 부트스트랩코드
        Blade::component($this->package . '::components.' . 'badges.box-primary', 'badge-primary');
        Blade::component($this->package . '::components.' . 'badges.box-secondary', 'badge-secondary');
        Blade::component($this->package . '::components.' . 'badges.box-danger', 'badge-danger');
        Blade::component($this->package . '::components.' . 'badges.box-info', 'badge-info');
        Blade::component($this->package . '::components.' . 'badges.box-success', 'badge-success');
        Blade::component($this->package . '::components.' . 'badges.box-warring', 'badge-warring');
        Blade::component($this->package . '::components.' . 'badges.box-black', 'badge-black');

        // 라운드모형 : 부트스트랩코드
        Blade::component($this->package . '::components.' . 'badges.rounded-primary', 'badge-primary-rounded');
        Blade::component($this->package . '::components.' . 'badges.rounded-secondary', 'badge-secondary-rounded');
        Blade::component($this->package . '::components.' . 'badges.rounded-danger', 'badge-danger-rounded');
        Blade::component($this->package . '::components.' . 'badges.rounded-info', 'badge-info-rounded');
        Blade::component($this->package . '::components.' . 'badges.rounded-success', 'badge-success-rounded');
        Blade::component($this->package . '::components.' . 'badges.rounded-warring', 'badge-warring-rounded');
        Blade::component($this->package . '::components.' . 'badges.rounded-black', 'badge-black-rounded');
    }

    protected function breadcrumb()
    {
        //breadcrumb
        Blade::component(\Jiny\UI\View\Components\Breadcrumb::class, 'breadcrumb');
        Blade::component($this->package . '::components.' . 'nav.breadcrumb-item', 'breadcrumb-item');
    }

    protected function buttons($type = "tailwind")
    {

        Blade::component(\Jiny\UI\View\Components\Button\Button::class, "button");
        Blade::component('jinyui::components.' . 'button.button-outline', 'button-outline');
        Blade::component('jinyui::components.' . 'button.button-square', 'button-square');


        Blade::component(\Jiny\UI\View\Components\Button\Dropdown::class, "button-dropdown");
        Blade::component(\Jiny\UI\View\Components\Button\Group::class, "button-group");
        Blade::component('jinyui::components.' . 'button.close', 'close');



        // Tailwind Button Style
        Blade::component('jinyui::components.' . 'button.' . $type . '.primary', 'btn-primary');
        Blade::component('jinyui::components.' . 'button.' . $type . '.second', 'btn-second');
        Blade::component('jinyui::components.' . 'button.' . $type . '.danger', 'btn-danger');
        Blade::component('jinyui::components.' . 'button.' . $type . '.danger_text', 'btn-danger-text');

        Blade::component($this->package . '::components.' . 'button.indicator', 'indicator');

    }

    protected function button_group()
    {

    }

    protected function card()
    {
        Blade::component(\Jiny\UI\View\Components\Cards\Card::class, "card");
        Blade::component($this->package . '::components.' . 'card.body', 'card-body');
        Blade::component($this->package . '::components.' . 'card.header', 'card-header');
        Blade::component($this->package . '::components.' . 'card.footer', 'card-footer');
        Blade::component($this->package . '::components.' . 'card.title', 'card-title');
        Blade::component($this->package . '::components.' . 'card.subtitle', 'card-subtitle');
        Blade::component($this->package . '::components.' . 'card.before', 'card-before');
        Blade::component($this->package . '::components.' . 'card.group', 'card-group');
    }

    protected function carousel()
    {
        //carousel
        Blade::component($this->package . '::components.' . 'carousel.inner', 'carousel');
        Blade::component($this->package . '::components.' . 'carousel.item', 'carousel-item');
    }

    protected function close_button()
    {

    }

    protected function collapse()
    {
        // Collapse
        Blade::component($this->package . '::components.' . 'collapse.collapse', 'collapse');
        Blade::component($this->package . '::components.' . 'collapse.button', 'collapse-button');
        Blade::component($this->package . '::components.' . 'collapse.link', 'collapse-link');
        Blade::component($this->package . '::components.' . 'collapse.body', 'collapse-body');
    }

    protected function dropdowns()
    {
        Blade::component(\Jiny\UI\View\Components\Accordion::class, "dropdown");
        Blade::component($this->package . '::components.' . 'accordion.accordion', 'accordion');
        Blade::component($this->package . '::components.' . 'accordion.item', 'accordion-item');
        Blade::component($this->package . '::components.' . 'accordion.item-open', 'accordion-item-open');
        Blade::component($this->package . '::components.' . 'accordion.header', 'accordion-header');

        //드롭다운
        Blade::component(\Jiny\UI\View\Components\Dropdown\Dropdown::class, "dropdown");
        Blade::component(\Jiny\UI\View\Components\Dropdown\Menu::class, "dropdown-menu");
        Blade::component(\Jiny\UI\View\Components\Dropdown\Item::class, "dropdown-item");
        Blade::component(\Jiny\UI\View\Components\Dropdown\Link::class, "dropdown-link");
    }

    protected function list_group()
    {
        // 리스트
        Blade::component($this->package . '::components.' . 'list.list', 'list');
        Blade::component($this->package . '::components.' . 'list.group', 'list-group');
        Blade::component($this->package . '::components.' . 'list.group-flush', 'list-group-flush');
        Blade::component($this->package . '::components.' . 'list.item', 'list-item');
    }

    protected function modal($type = "bootstrap")
    {
        // 팝업 Dialog
        if ($type == "bootstrap") {
        } else {
            // Tailwind
            Blade::component('jinyui::components.' . 'modal.' . $type . '.dialog', 'popup-dialog');
            Blade::component('jinyui::components.' . 'modal.' . $type . '.modal', 'popup-modal');
        }

        Blade::component($this->package . '::components.' . 'modal', 'ui-' . 'modal');
        Blade::component($this->package . '::components.' . 'modal-form', 'ui-' . 'modal-form');

        //Modal
        Blade::component($this->package . '::components.' . 'modal.button', 'modal-button');
        Blade::component($this->package . '::components.' . 'modal.layout', 'modal-layout');
        Blade::component($this->package . '::components.' . 'modal.header', 'modal-header');
        Blade::component($this->package . '::components.' . 'modal.body', 'modal-body');
        Blade::component($this->package . '::components.' . 'modal.footer', 'modal-footer');
    }

    protected function navbar()
    {
        //Nav
        Blade::component($this->package . '::components.' . 'nav.nav', 'nav');
        Blade::component($this->package . '::components.' . 'nav.nav-item', 'nav-item');
        Blade::component($this->package . '::components.' . 'nav.tab', 'navtab');
        Blade::component($this->package . '::components.' . 'nav.tab-pillbar', 'navtab-pillbar');// pillbar
        Blade::component($this->package . '::components.' . 'nav.tab-item', 'navtab-item');
        Blade::component($this->package . '::components.' . 'nav.tab-link', 'navtab-link');

        //Navbar
        Blade::component($this->package . '::components.' . 'nav.navbar', 'navbar');
        Blade::component($this->package . '::components.' . 'nav.navbar-nav', 'navbar-nav');
    }

    protected function navs_tabs()
    {
        // Tab
        Blade::component($this->package . '::components.' . 'tab.header', 'tab-header');
        Blade::component($this->package . '::components.' . 'tab.link', 'tab-link');
        Blade::component($this->package . '::components.' . 'tab.button', 'tab-button');
        Blade::component($this->package . '::components.' . 'tab.item', 'tab-item');
        Blade::component($this->package . '::components.' . 'tab.group', 'tab-group');
        Blade::component($this->package . '::components.' . 'tab.list', 'tab-list');
        Blade::component($this->package . '::components.' . 'tab.contents', 'tab-contents');
        Blade::component(\Jiny\UI\View\Components\Tab\HeaderJson::class, "tab-header-json"); // 템 목록을 json으로 변환하여 전달합니다.


        // Tailwind
        ## radio 입력을 통한 텝바구현
        ///Blade::component('jinyui::components.'.'tab.'.$type.'.tab-radio', 'tab-radio');
        Blade::component(\Jiny\UI\View\Components\Tab\Radio\RadioTab::class, "tab-radio");
        Blade::component(\Jiny\UI\View\Components\Tab\Radio\RadioTabItem::class, "tab-radio-item");


    }

    protected function offcanvas()
    {

    }

    protected function pagination()
    {

    }

    protected function placeholders()
    {

    }

    protected function popovers()
    {

    }

    protected function progress()
    {
        Blade::component($this->package . '::components.' . 'progress.progressBar', 'progress-bar');
        Blade::component($this->package . '::components.' . 'progress.stack', 'progress-stack');
        Blade::component($this->package . '::components.' . 'progress.stackBar', 'stack-bar');
    }

    protected function scrollspy()
    {

    }

    protected function spinners()
    {
        Blade::component($this->package . '::components.' . 'spinner.border', 'spinner-border');
        Blade::component($this->package . '::components.' . 'spinner.grow', 'spinner-grow');
    }

    protected function toasts()
    {
        Blade::component($this->package . '::components.' . 'toast.toast', 'toast');
        Blade::component($this->package . '::components.' . 'toast.header', 'toast-header');
        Blade::component($this->package . '::components.' . 'toast.body', 'toast-body');
    }

    protected function tooltips()
    {
        Blade::component($this->package . '::components.' . 'tooltip.LinkTooltip', 'tooltip-link');
        Blade::component($this->package . '::components.' . 'tooltip.buttonTooltip', 'tooltip-button');

    }

    protected function icons()
    {
        //Icon
        //Blade::component(\Jiny\UI\View\Components\Icon::class, "icon");
        //Blade::component(\Jiny\UI\View\Components\IconFile::class, "icon-file");
    }

    protected function sidebar()
    {
        // 메뉴
        Blade::component($this->package . '::components.' . 'sidebar.header', 'sidebar-header');
        Blade::component($this->package . '::components.' . 'sidebar.item', 'sidebar-item');
        Blade::component($this->package . '::components.' . 'sidebar.link', 'sidebar-link');
        Blade::component($this->package . '::components.' . 'sidebar.nav', 'sidebar-nav');
        Blade::component($this->package . '::components.' . 'sidebar.sub', 'sidebar-sub');
    }


    protected function boxColor()
    {
        Blade::component($this->package . '::components.' . 'boxs.box', 'box');

        Blade::component($this->package . '::components.' . 'boxs.box_primary', 'box-primary');
        Blade::component($this->package . '::components.' . 'boxs.box_secondary', 'box-secondary');
        Blade::component($this->package . '::components.' . 'boxs.box_info', 'box-info');
        Blade::component($this->package . '::components.' . 'boxs.box_warring', 'box-warring');
        Blade::component($this->package . '::components.' . 'boxs.box_danger', 'box-danger');
        Blade::component($this->package . '::components.' . 'boxs.box_success', 'box-success');
    }







    protected function configureComponents()
    {


        /* 컴포넌트 클래스 등록 */
        $this->loadViewComponentsAs('jinyui', [
            //\Jiny\UI\View\Components\Theme\App::class,

            // 테마관련 컴포넌트 클래스
            \Jiny\UI\View\Components\Theme::class, // 테마 레이아웃을 읽어 옵니다.
            \Jiny\UI\View\Components\ThemeMain::class, // 메인 레이아웃을 읽어 옵니다.
            \Jiny\UI\View\Components\MainContent::class, // 메인 레이아웃의 컨덴츠를 배치합니다.<main>테그
            //\Jiny\UI\View\Components\ThemeLayout::class,
            \Jiny\UI\View\Components\ThemeSidebar::class, // 테마 sidebar.blade.php 로드
            //\Jiny\UI\View\Components\Icon::class, //svg아이콘 생성



            \Jiny\UI\View\Components\LayoutTile::class, // 타일 격자 배치


            \Jiny\UI\View\Components\Sidebar::class,
            \Jiny\UI\View\Components\SidebarLayout::class,
            \Jiny\UI\View\Components\SidebarContent::class,
            \Jiny\UI\View\Components\SidebarLogo::class,
            // \Jiny\UI\View\Components\SidebarNav::class,
            // \Jiny\UI\View\Components\SidebarMenu::class,
            \Jiny\UI\View\Components\SidebarHeader::class,
            \Jiny\UI\View\Components\SidebarItem::class,
            \Jiny\UI\View\Components\SidebarSubmenu::class,
            \Jiny\UI\View\Components\SidebarLink::class,
            \Jiny\UI\View\Components\SidebarBadge::class,



            \Jiny\UI\View\Components\Card::class,

            //테이블
            \Jiny\UI\View\Components\Table::class,

            //폼
            \Jiny\UI\View\Components\FormRow::class,
            \Jiny\UI\View\Components\FormLabel::class,
            \Jiny\UI\View\Components\FormItem::class,
            \Jiny\UI\View\Components\FormFilter::class,


            \Jiny\UI\View\Components\ModalList::class,
            \Jiny\UI\View\Components\Collapse::class,
            \Jiny\UI\View\Components\ScrollBar::class,
            \Jiny\UI\View\Components\Layout::class,

            \Jiny\UI\View\Components\Markdown::class,

            \Jiny\UI\View\Components\Hello::class,
        ]);

        // Extension
        // Simplebar
        Blade::component($this->package . '::components.' . 'extension.simplebar', 'simplebar');

        Blade::component(\Jiny\UI\View\Components\FormFilter::class, "filter");

        Blade::component('jinyui::components.collapse', 'jiny-collapse');
        Blade::component('jinyui::components.scroll-bar', 'jiny-scroll-bar');
        //Blade::component('jinyui::components.app', 'jiny-app');
        Blade::component('jinyui::components.theme', 'jiny-theme');
        Blade::component('jinyui::components.layout', 'jiny-layout');

        Blade::component('jinyui::components.select-box', 'jiny-select-box');



    }






}
