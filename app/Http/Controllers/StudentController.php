<?php
namespace App\Http\Controllers;

use App\Models\Filere;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

       
        $students = Student::all();
        $fileres = Filere::all();
        return view('student.index',compact('students','fileres'));
    }

    public function create(){
        $fileres = Filere::all();
        return view ('student.create',compact('fileres'));
    }

    public function search(){
        $search_text = $_GET['query'];
        $students = Student::where('nom','LIKE','%'.$search_text .'%')->with('filere')->get();

        return view ('student.search',compact('students'));

    }

    public function store (Request $request){
        $student = new Student();
        $image=$request->file("image");
        $ext=$image->getClientOriginalExtension();
        $filename=time().".".$ext;
        $image->move('image',$filename);
        $student ->image="image/".$filename;
        $student ->nom=$request->nom;
        $student ->prenom=$request->prenom;
        $student ->email=$request->email;
        $student ->telephone=$request->telephone;
        $student ->age=$request->age;
        $student ->gender=$request->gender;
        $student->filere_id = $request->filere_id;
        
        
        $student->save();
        return redirect('student');

    }

    public function edit($id){
        $student  = Student::find($id);
        $fileres = Filere::all();
        return view('student.edit',compact('student','fileres'));
    }
    
    public function update(Request $request,$id){
        $student = Student::find($id);
        $image=$request->file("image");
        $ext=$image->getClientOriginalExtension();
        $filename=time().".".$ext;
        $image->move('image',$filename);
        $student->image="image/".$filename;
        $student ->nom = $request->nom;
        $student ->prenom = $request->prenom;
        $student ->age = $request->age;
        $student ->email = $request->email;
        $student ->telephone = $request->telephone;
        $student ->gender=$request->gender;
        $student->filere_id = $request->filere_id;
        $student->update();
        return redirect('student');
    }
    
    public function destroy($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('student');
    }
}
