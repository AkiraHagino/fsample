<?php

/**
* Auth class Tests
* @group Sample
*/
class Test_auth extends TestCase{
	public function indexを実行するだけ(){
		$response = Request::forge('login/index')
								->execute()
								->response();
		$this->assertSame($expected,$response->body->name);
	}
}
