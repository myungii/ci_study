<?php
namespace App\Controllers;
use App\Models\CrudModel;
use Codeigniter\Controller;


class Crud extends BaseController
{
    public function index()
    {
		$crudModel = new CrudModel();
		$data['user_data']		 = $crudModel->orderBy('id', 'DESC')->paginate(10);
		$data['pagination_link'] = $crudModel->pager;

		return view('crud_view', $data);
    }

	function add()
	{
		return view('add_data');
	}

	function add_validation()
	{
		helper(['form', 'url']);

		$error = $this->validate([
			'name'		=> 'required|min_length[3]',
			'email'		=> 'required|valid_email',
			'gender'	=> 'required'
		]);

		if(!$error)
		{
			echo view('add_data', [
					'error'		=> $this->validator	
				]);
		}
		else
		{
			$crudModel = new CrudModel();

			$crudModel->save()([
				'name'		=> $this->request->getVar('name'),
				'email'		=> $this->request->getVar('email'),
				'gender'	=> $this->request->getVar('gender')
			]);

			$session = \Config\Services::session();

			$session->setFlashdata('success', 'User Data Added');

			return $this->response->redirect(site_url('/crud'));
		}
	}

}

?>




