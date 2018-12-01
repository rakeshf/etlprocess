<?php

namespace Aspiration\Etlprocess;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Aspiration\Etlprocess\Employee;


class EmployeeController extends Controller
{
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employees = Employee::paginate(8);
        return \View::make('home.index', ['employees' => $employees]);

        return view('etlprocess::employee-list', ['name' => 'rakesh']);
    }
}
