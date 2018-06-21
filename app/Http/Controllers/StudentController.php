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

        $students= Users::where("permession",Users::USER_STUDENT)->paginate(2);
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
      $teacherModel=new Users();
   
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
      
      $teacherModel->uname=$request->uname;
      $teacherModel->password=123;
      //$teacherModel->avatar
      $teacherModel->permession=Users::USER_STUDENT;
      $teacherModel->email=$request->email;
      $teacherModel->fullname=$request->fullname;
      $teacherModel->status=1;
      $teacherModel->phone=$request->phone;
      $teacherModel->birthdate=$request->birthdate;
      $teacherModel->class=$request->class;
      $teacherModel->level=$request->level;
      $teacherModel->created_at=date('Y-m-d h:m:s');
      $path="";
      $id=1;
      if (request()->hasFile('avatar')) {
        if(array_search(strtolower(request()->avatar->extension()),config('lms.aloowed_pictures'))!==false){
          $pathdata='images/avatars/'.$id.'.'.strtolower(request()->avatar->extension());
          $path = request()->avatar->storeAs('public/images/avatars', $id.'.'.strtolower(request()->avatar->extension()));
          $teacherModel->avatar=$pathdata;
        }
      }else{
        $teacherModel->avatar=$path;
      }
      $teacherModel->save();
      
      $students= Users::where("permession",Users::USER_STUDENT)->paginate(2);
      
      return view('students.index')->with("students",$students)->renderSections()['content'];
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
    $students= Users::where("permession",3)->paginate(2);
   // $admins->setPath('');
    return view('students.index')->with("students",$students)->renderSections()['content'];
  }

  public function delete($lang,$id){
    $input = request()->all();
    $student= Users::where("userid",$id)->delete();
    $students= Users::where("permession",3)->paginate(2);
    return view('students.index')->with("students",$students)->renderSections()['content'];
  }

    /**
   * filter the specified studets.
   *
   * @return Response
   */
    public function filter(Request $request){
   
        $students= Users::where("permession",Users::USER_STUDENT)->paginate(2);
        $students = DB::table('users')->where('level', $request->level);
        $students->where('class',$request->class );
        $students=$students->get();
        $admin="";
        $classes = DB::table('levels')
            ->join('classes', 'classes.level', '=', 'levels.level_id')
            ->select('levels.*', 'classes.*')
            ->get();
   
        return view('students.index')->with("students",$students)->with("classes",$classes)->renderSections()['content'];
    }

}
