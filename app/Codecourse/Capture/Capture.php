<?php

namespace Codecourse\Capture;

use Codecourse\Views\Views;
use Symfony\Component\Process\Process;
use Symfony\Component\HttpFoundation\Response;


class Capture
{
		protected $view;
		protected $pdf;
		
		public function __construct()
		{
			$this->view = new Views;
		}
		
		public function load($filename, array $data=[])
		{
			$view = $this->view->render($filename, $data);
			
			$this -> pdf = $this -> captureImage($view); 
		}
		
		public function respond($filename)
		{
			$response = new Response( file_get_contents($this->pdf),200, [
			'Content-Description'=>'File Transfer',
			'Content-Disposition'=>'attachment; filename="'.$filename.'" ',
			'Content-Transfer-Encoding'=>'binary',
			'Content-Type'=>'application/pdf'
			]);
			
			unlink($this->pdf);
			
			$response -> send();
		}
		
		protected function captureImage($view)
		{
			$path = $this-> writeFile($view);
			$this -> phantomProccess($path)->setTimeout(20)->mustRun();
			
			return $path;
		}
		
		protected function writeFile($view)
		{
			file_put_contents($path = 'storage/sample.pdf',$view);
			return $path;
		}
		
		protected function phantomProccess($path)
		{
			return new Process('phantomjs.exe capture.js '. $path);
		}
}

?>