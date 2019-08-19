<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new Employee();
        $employee->gruop = "le tan";
        $employee->name  = "nguyen van a";
        $employee->dob  = "1995-12-3";
        $employee->sex  = "nam";
        $employee->phone  = "0129388743";
        $employee->identification  = "017456656";
        $employee->email  = "lapgun06@gmail.com";
        $employee->address = "thai binh";
        $employee->save();

        $employee = new Employee();
        $employee->gruop = "le tan";
        $employee->name  = "le thi b";
        $employee->dob  = "1995-11-4";
        $employee->sex  = "nu";
        $employee->phone  = "0129388732343";
        $employee->identification  = "01745663456";
        $employee->email  = "lethib@gmail.com";
        $employee->address = "ha noi";
        $employee->save();


    }
}
