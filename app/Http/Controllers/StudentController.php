<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = DB::table('levels')
        ->join('classes', 'classes.level', '=', 'levels.level_id')
        ->select('levels.*', 'classes.*')
        ->get();

        $students = DB::table('users')
                    ->join('classes', 'users.class', '=', 'classes.class_id')
                    ->join('levels', 'users.level', '=', 'levels.level_id')
                    ->where("permession",Users::USER_STUDENT)
                    ->paginate(2);
        $students->setPath('');
        return view('students.index')->with("students",$students)->with("classes",$classes);
    }



    public function newuser(){
        $admin="";
        $classes = DB::table('levels')
            ->join('classes', 'classes.level', '=', 'levels.level_id')
            ->select('levels.*', 'classes.*')
            ->get();
        $data=[
            "admin"=>$admin,
            "classes"=>$classes
        ];
        return view('students.add')->with($data);
        
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentModel=new Users();
 
        $rules = array(
              'uname' => 'required',
              'email' => 'required',
          );
    
          $validator = Validator::make(Input::all(), $rules);
    
          if ($validator->fails())
          {
            $admin="";
            $classes = DB::table('levels')
                ->join('classes', 'classes.level', '=', 'levels.level_id')
                ->select('levels.*', 'classes.*')
                ->get();
            $data=[
                "admin"=>$admin,
                "classes"=>$classes
            ];
          
            // return response(view('teachers.add',['data'=>$data]),200, ['Content-Type' => 'application/json']);
        
          }
        
        $studentModel->uname=$request->uname;
        $studentModel->password=123;
        //$studentModel->avatar
        $studentModel->permession=Users::USER_STUDENT;
        $studentModel->email=$request->email;
        $studentModel->fullname=$request->fullname;
        $studentModel->status=1;
        $studentModel->phone=$request->phone;
        $studentModel->birthdate=$request->birthdate;
        $studentModel->class=$request->class;
        $studentModel->level=$request->level;
        $studentModel->created_at=date('Y-m-d h:m:s');
        $path="";
        $id=1;
        if (request()->hasFile('avatar')) {
          if(array_search(strtolower(request()->avatar->extension()),config('lms.aloowed_pictures'))!==false){
            $pathdata='images/avatars/'.$id.'.'.strtolower(request()->avatar->extension());
            $path = request()->avatar->storeAs('public/images/avatars', $id.'.'.strtolower(request()->avatar->extension()));
            $studentModel->avatar=$pathdata;
          }
        }else{
          $studentModel->avatar=$path;
        }
        $studentModel->save();
        
        $students = DB::table('users')
                    ->join('classes', 'users.class', '=', 'classes.class_id')
                    ->join('levels', 'users.level', '=', 'levels.level_id')
                    ->where("permession",Users::USER_STUDENT)
                    ->paginate(2);
        $classes = DB::table('levels')
        ->join('classes', 'classes.level', '=', 'levels.level_id')
        ->select('levels.*', 'classes.*')
        ->get();
        $students->setPath('');
        return view('students.index')->with("students",$students)->with("classes",$classes)->renderSections()['content'];
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lang,$id){
        $student= Users::where("userid",$id)->get();
        $classes = DB::table('levels')
            ->join('classes', 'classes.level', '=', 'levels.level_id')
            ->select('levels.*', 'classes.*')
            ->get();
        $data=[
            "student"=>$student,
            "classes"=>$classes
        ];
        $students->setPath('');
        return view('students.edit')->with($data);
      }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($lang,$id){
    $input = request()->all();
    $student= Users::where("userid",$id)->first();
    $student->uname=$input["uname"];
    $student->fullname=$input["fullname"];
    $student->email=$input["email"];
    $student->phone=$input["phone"];
    $student->birthdate=$input["birthdate"];

    $path="";
    if (request()->hasFile('avatar')) {
      if(array_search(strtolower(request()->avatar->extension()),config('lms.aloowed_pictures'))!==false){
        Storage::delete("public/".$student->avatar);
        $pathdata='images/avatars/'.$id.'.'.strtolower(request()->avatar->extension());
        $path = request()->avatar->storeAs('public/images/avatars', $id.'.'.strtolower(request()->avatar->extension()));
        $student->avatar=$pathdata;
      }
    }
    $student->save();
    $students = DB::table('users')
                ->join('classes', 'users.class', '=', 'classes.class_id')
                ->join('levels', 'users.level', '=', 'levels.level_id')
                ->where("permession",Users::USER_STUDENT)
                ->paginate(2);
   // $admins->setPath('');
    return view('students.index')->with("students",$students)->renderSections()['content'];
  }

  public function delete($lang,$id){
    $input = request()->all();
    $student= Users::where("userid",$id)->delete();
    $students = DB::table('users')
                ->join('classes', 'users.class', '=', 'classes.class_id')
                ->join('levels', 'users.level', '=', 'levels.level_id')
                ->where("permession",Users::USER_STUDENT)
                ->paginate(2);
     $students->setPath('');                
    return view('students.index')->with("students",$students)->renderSections()['content'];
  }

    /**
   * filter the specified studets.
   *
   * @return Response
   */
    public function filter(Request $request){
    
        $query = DB::table('users')
                ->join('classes', 'users.class', '=', 'classes.class_id')
                ->join('levels', 'users.level', '=', 'levels.level_id')
                ->where("permession",Users::USER_STUDENT);
        if (Input::has('level')){
            $query->where('users.level', $request->level);
        }
        if (Input::has('class')){
            $query->where('users.class', $request->class);
        }
        
        $students=$query->paginate(2);
        $admin="";
        $classes = DB::table('levels')
            ->join('classes', 'classes.level', '=', 'levels.level_id')
            ->select('levels.*', 'classes.*')
            ->get();
        $students->setPath('');
        return view('students.index')->with("students",$students)->with("classes",$classes)->renderSections()['content'];
    }

}
