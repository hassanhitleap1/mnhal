<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//use App\Http\Controllers\Controller;
use App\Users;







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
  public function store()
  {
    
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
        "admin"=>$teacher,
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
   // $admins->setPath('');
    return view('teachers.index')->with("teachers",$teachers)->renderSections()['content'];
  }

  public function delete($lang,$id){
    $input = request()->all();
    $teacher= Users::where("userid",$id)->delete();
    $teachers= Users::where("permession",3)->paginate(2);
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