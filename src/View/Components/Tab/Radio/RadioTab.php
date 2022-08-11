<?php
namespace Jiny\UI\View\Components\Tab\Radio;

use Illuminate\View\Component;

class RadioTab extends Component
{
    public $color = "#0275b8";
    public $hover_background = "#def2fb";
    public function __construct($color=null, $hover_background=null)
    {
        if($color) {
            $this->color = $color;
        }

        if($hover_background) {
            $this->$hover_background = $hover_background;
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('jinyui::components.tab.tailwind.tab-radio');
    }
}
