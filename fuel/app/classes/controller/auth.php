<?php
class Controller_Auth extends Controller
{
	public function action_index()
	{
		echo "test";
		echo "test2";
		echo "test3";
		echo "test4";
		echo "test5";
	}

	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
