<?php
namespace tejrajs\fontawesome;

/**
 * This is just an example.
 */
use yii\base\Widget;
use yii\helpers\Html;

class FontAwesome extends Widget{
	public $icon;
	public function run(){
		$view = $this->getView();
		$asset = FontAwesomeAsset::register($view);
		echo '<i class="fa fa-'.str_replace(' ','',$this->icon).'"></i>';
	}
}