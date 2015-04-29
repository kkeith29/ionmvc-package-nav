<?php

namespace ionmvc\packages\nav\libraries;

class nav {

	private $data = [];

	public function add( $name,$uri,$config=[] ) {
		$this->data[] = array_merge( $config,compact('name','uri') );
		return $this;
	}

	public function get_links() {
		return $this->data;
	}

	public function clear() {
		$this->data = [];
	}

}

?>