<?php
	class PluAction extends Common {
		function index() {
			

			$this->assign("color1", Form::color('titcolor'));
			$this->assign("color2", Form::color('titcolor2'));

			$this->assign("starttime", Form::date('stime', date('Y-m-d H:i:s'), 1));
			$this->assign("endtime", Form::date('etime'));

			$this->assign("article", Form::editor('artilce', 'full', 400, 'green'));



			$this->display();
		}
	}
