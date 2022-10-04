<?php
namespace Jiny\UI\Html;

use Jiny\Html\CTag;

class XListItem extends CTag
{
    public function __construct($value = null)
	{
		parent::__construct("li", true, $value);
	}


}
