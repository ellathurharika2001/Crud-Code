<?php  namespace App\Controllers;

use App\Models\Employee;
use CodeIgniter\Log\Logger;

class EmployeeController extends BaseController{
    public function Index()
{
    $employee = new Employee();
    $data['employee'] = $employee->findAll();
    return view('employee/index', $data);

}

    public function create()
    
    {
       return view('employee/create');
    }

    public function store(){
        $employee = new Employee();
        $data = [
            'first_name'=>$this->request->getpost('first_name'),
            'last_name'=>$this->request->getpost('last_name'),
            'email'=>$this->request->getpost('email'),
            'phone'=>$this->request->getpost('phone'),
            'designation'=>$this->request->getpost('designation'),
        ];
        
        $employee->save($data);
        return redirect()->route('employee')->with('success','Employee Added successfully');
        
        }
    }



?>