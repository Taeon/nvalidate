<?php

namespace nValidate;

class Definition {
	protected $fields;
	public function GetValidators(){
		return $this->fields;
	}
}
