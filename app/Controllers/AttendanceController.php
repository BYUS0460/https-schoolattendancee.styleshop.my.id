<?php namespace App\Controllers;

use App\Models\AttendanceModel;

class AttendanceController extends BaseController
{
    public function index()
    {
        $model = new AttendanceModel();
        $data['attendance'] = $model->findAll();

        return view('attendance_view', $data);
    }

    public function create()
    {
        return view('create_attendance');
    }

    public function store()
    {
        $model = new AttendanceModel();

        $data = [
            'employee_name' => $this->request->getPost('employee_name'),
            'date' => $this->request->getPost('date'),
            'status' => $this->request->getPost('status'),
        ];

        $model->save($data);

        return redirect()->to('/attendance');
    }
}