<?php
namespace Jiny\UI\Html;

use Jiny\Html\Ctag;

class XSpan extends CTag
{
	public function __construct($item = null) {
		parent::__construct('span', true);

		if ($item !== null) {
			$this->addItem($item);
		}
	}

}
