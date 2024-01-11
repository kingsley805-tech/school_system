<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Classroom;
use App\Models\Myparent;
use App\Models\BusModel;
use App\Models\payments;


class DashboardControllers extends Controller
{
    public function dashboardStatistics(){
        $students = Student::count();
        $parents = Myparent::count();
        $classess = Classroom::count();
        $busses = BusModel::count();
        $payments = payments::sum('payingAmount');;

        return response()->json([
            'success' => true,
            'parents' => $parents,
            'classess' => $classess,
            'busses' => $busses,
            'payments' => $payments,
            'students' => $students
        ]);
    }
}
