<?php
namespace App\Http\Controllers;
use Response;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;



class TeachersController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(){
    $teachers= Users::where("permession",4)->paginate(2);
    
    return view('teachers.index')->with("teachers",$teachers);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
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
    $teacherModel->permession=4;
    $teacherModel->email=$request->email;
    $teacherModel->fullname=$request->fullname;
    $teacherModel->status=1;
    $teacherModel->phone=$request->phone;
    $teacherModel->birthdate=$request->birthdate;
    $teacherModel->class=$request->home_room_class;
    $teacherModel->level=$request->home_room_level;
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
    
    $teachers= Users::where("permession",4)->paginate(2);
    $teachers->setPath('');
    return view('teachers.index')->with("teachers",$teachers)->renderSections()['content'];
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($lang,$id){
    $teacher= Users::where("userid",$id)->get();
    $classes = DB::table('levels')
        ->join('classes', 'classes.level', '=', 'levels.level_id')
        ->select('levels.*', 'classes.*')
        ->get();
    $data=[
        "teacher"=>$teacher,
        "classes"=>$classes
    ];
    
    return view('teachers.edit')->with($data);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($lang,$id){
    $input = request()->all();
    $teacher= Users::where("userid",$id)->first();
    $teacher->uname=$input["uname"];
    $teacher->fullname=$input["fullname"];
    $teacher->email=$input["email"];
    $teacher->phone=$input["phone"];
    $teacher->birthdate=$input["birthdate"];

    $path="";
    if (request()->hasFile('avatar')) {
      if(array_search(strtolower(request()->avatar->extension()),config('lms.aloowed_pictures'))!==false){
        Storage::delete("public/".$teacher->avatar);
        $pathdata='images/avatars/'.$id.'.'.strtolower(request()->avatar->extension());
        $path = request()->avatar->storeAs('public/images/avatars', $id.'.'.strtolower(request()->avatar->extension()));
        $teacher->avatar=$pathdata;
      }
    }
    $teacher->save();
    $teachers= Users::where("permession",3)->paginate(2);
    $teachers->setPath('');
    return view('teachers.index')->with("teachers",$teachers)->renderSections()['content'];
  }

  public function delete($lang,$id){
    $input = request()->all();
    $teacher= Users::where("userid",$id)->delete();
    $teachers= Users::where("permession",3)->paginate(2);
    $teachers->setPath('');
    return view('teachers.index')->with("teachers",$teachers)->renderSections()['content'];
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
    return view('teachers.add')->with($data);
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>