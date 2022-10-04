<?php
namespace Jiny\UI\Html;

use Jiny\Html\CTag;
use Jiny\UI\Html\XFormHor;
use Jiny\UI\Html\XFormRow;

class XForm
{
    /**
     * 싱글턴
     */
    private static $Instance;
    public static function instance()
    {
        if (!isset(self::$Instance)) {
            self::$Instance = new self();
            self::$Instance->form = new CTag('form', true);
        }
        return self::$Instance;
    }



    public $forms;
    public function __toString()
    {
        return $this->forms->toString();
        $res = "";
        return $res;
	}
}
