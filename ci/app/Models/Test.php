<?php namespace App\Models;
use CodeIgniter\Model;

class Test extends Model
{

	protected $table			= 'test';
	protected $primaryKey		= 'id';
	protected $returnType		= 'array';
	protected $allowedFields	= ['name', 'content', 'timecreated'];
	protected $createdField		= 'timecreated';

	public function getList()
	{
		$list = $this->db->table('test');
		return $list->get();
	}


}


?>
