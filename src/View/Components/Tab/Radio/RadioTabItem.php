<?php
namespace Jiny\UI\View\Components\Tab\Radio;

use Illuminate\View\Component;

class RadioTabItem extends Component
{
    public $title;
    public $id;
    public $selected;
    public function __construct($title=null, $id=null, $selected=null)
    {
        $this->title = $title;

        // for id 지정
        if($id) {
            $this->id = $id;
        } else {
            $this->id = uniqid("tab-radio");
        }

        // 기본 선택 활성
        if($selected) {
            $this->selected = "checked";
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('jinyui::components.tab.tailwind.tab-radio-item');
    }
}
