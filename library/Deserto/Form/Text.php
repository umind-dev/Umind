<?php

/**
 * Elemento text do formulario
 *
 * @name Deserto_Form_Text
 * @package Deserto
 * @subpackage Form
 */
class Deserto_Form_Text extends Zend_Form_Element_Text {
	/**
	 * Configura o elemento
	 * 
	 * @name init
	 */
	public function init() {
		parent::setAttrib("field-type", "text");
		parent::setAttrib("class", "form-control");
	}
}
