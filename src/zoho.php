<?php

namespace Dredix84;

use GuzzleHttp\Client;

class zoho {
	const BASE_URL = 'https://invoice.zoho.com/api/v3';

	protected $email = '';
	protected $password = '';

	/**
	 * zoho constructor.
	 */
	public function __construct($ApiEmail, $ApiPassword) {
		$this->email = $ApiEmail;
		$this->password = $ApiPassword;
	}


	public function test(){
		echo "TZhis is a test of the zoho class";
	}
}