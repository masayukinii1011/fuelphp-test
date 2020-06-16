<?php
	class Controller_Employee extends Controller_Welcome {
    public function action_home() {
      echo "FuelPHP-Employee application!";
    }

    public function action_index() {
      echo "This is the index method of employee controller";
		}

		public function action_show() {
      echo "This is the show method of employee controller";
		}

		//全てのaction_メソッドの前に実行
		public function before() {
			echo "This message comes from <em>before()</em> method</br>";
		}

		//全てのaction_メソッドの後に実行
		//_response_を入力として受け取り、_response_オブジェクトを返す
		public function after($response) {
			if ( ! $response instanceof Response) {
				$response = \Response::forge($response, $this->response_status);
			}
			return $response;
		}

		public function get_index() {
			 //called when the HTTP method is GET.
		}

		public function post_index(){
		 //called when the HTTP method is POST.
		}

		//Requestクラス
		public function action_request() {
			$params = Request::active()->params();
			echo var_dump($params);
		}

		//Responseクラス
		public function action_response() {
			$body = "Hi, FuelPHP";
			$headers = array ('Content-Type' => 'text/html',);
			$response = new Response($body, 200, $headers);
			return $response;
		}
  }