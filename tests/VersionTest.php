<?php

require_once dirname(__FILE__) . '/config.php.dist';

class VersionTest extends PHPUnit_Framework_TestCase
{
	public function
	testVersion ()
	{
		$this->assertTrue(is_string(smbclient_version()));
	}

	public function
	testLibraryVersion ()
	{
		$this->assertTrue(is_string(smbclient_library_version()));
	}
}
