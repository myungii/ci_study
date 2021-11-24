<?php
namespace App\Controllers;
use App\Models\Test;
use Codeigniter\Controller;

 //class Home extends BaseController
 //{
 //    public function index()
 //    {
 //        return view('welcome_message');
 //    }
 //}


class Home extends BaseController
{
    public function index()
    {
		$model = new Test();

		//$data = $model->findAll();
		$data['test'] = $model->getList()->getResult();

		//var_dump($data);

        return view('test', $data);
		//echo view('test', $data);
    }
}






