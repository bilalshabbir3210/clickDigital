<?php
namespace App\Controllers;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\Header ;
use App\Models\UsersModel;

class Home extends BaseController
	{
	protected $Auth;
	protected $dd;
	public function index()
		{
		$data =['title' => 'Click Digital'];
		return view('index' , $data);
	}
	
	public function insertContactDetails(){

		$dataToInsert=[
			'name' => $this->request->getPost('name'),
			'contact' => $this->request->getPost('contactNumber'),
			'email' => $this->request->getPost('email'),
			'message' => $this->request->getPost('message'),

		];

		$this->db->table('contactQueries')->insert($dataToInsert);
		
		if($this->db->insertID()){

		$returnedData =['status'=>1 ,'message' =>'Your query has been submitted , soon we will contact you.'];
		}else{
			$returnedData =['status'=>0 ,'message' =>'Your query has not been submitted , Some server error.'];
		}
		return json_encode($returnedData);
	}

}