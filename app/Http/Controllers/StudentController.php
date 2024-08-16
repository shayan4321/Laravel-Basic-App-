<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// imports Model
use App\Models\Student;

class StudentController extends Controller
{
    //
     // =====================  Insert data in MySQL table with html form ===============
     function addStudent(Request $req){  
        // return "Add Student";    
        // return $req->input();

        $student = new Student();
        $student->name = $req->name;
        $student->email = $req->email;
        $student->phone = $req->phone;
        $student->save();
        if($student){
            return redirect('list');
        }else{
            return "Operation Failed";
        }
    }
    // =====================  Show data From MySQL table ===============
    function list(){
        // return "Student Lits";
        $studentData = Student::all();
        return view('list-student',['students'=>$studentData]);
    }
    
    // ===================== Delete data from MySql Table ===============
    function deleteStudent($id){
        $idDeleted =Student::destroy($id);
        if($idDeleted){
            return redirect('list');
        }else{
            return "Operation Failed";
        }
    }
    // ===================== Display and Edit data from MySql Table ===============
    function edit($id){
        // return $id;
        $student = Student::find($id);
        return view('editStudent',['data'=>$student]);
    }
    function editStudent(Request $request, $id){
        // return $id;
        //return $request->input();
        $student = Student::find($id); // pehle student ko find kara k kis ko update krna h to us ki sari ki sari detail fetch krni h.
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        if($student->save()){
            return redirect('list');
        }else{
            return 'Update Failed';
        }
    }

}
