<?php
class Controller_Auth extends Controller
{
	public function action_index()
	{
		echo "test";
		echo "test";
		echo "test";
		echo "test";
		echo "test";
		echo "test";
		echo "test";
		echo "test";
		echo "test";
		echo "test";
		echo "test";
		echo "test";
		echo "test";
		echo "test";
		echo "test100";


	}

	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
