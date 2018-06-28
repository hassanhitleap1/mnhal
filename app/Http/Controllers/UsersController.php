<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//use App\Http\Controllers\Controller;
use App\Users;







class UsersController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function indexAdmin(){
    $admins= Users::where("permession",3)->paginate(2);
    return view('admins.index')->with("admins",$admins);
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
    $admin= Users::where("userid",$id)->get();
    $classes = DB::table('levels')
        ->join('classes', 'classes.level', '=', 'levels.level_id')
        ->select('levels.*', 'classes.*')
        ->get();
    $data=[
        "admin"=>$admin,
        "classes"=>$classes
    ];
    return view('admins.edit')->with($data);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($lang,$id){
    $input = request()->all();
    $admin= Users::where("userid",$id)->first();
    $admin->uname=$input["uname"];
    $admin->fullname=$input["fullname"];
    $admin->email=$input["email"];
    $admin->phone=$input["phone"];
    $admin->birthdate=$input["birthdate"];

    $path="";
    if (request()->hasFile('avatar')) {
      if(array_search(strtolower(request()->avatar->extension()),config('lms.aloowed_pictures'))!==false){
        Storage::delete("public/".$admin->avatar);
        $pathdata='images/avatars/'.$id.'.'.strtolower(request()->avatar->extension());
        $path = request()->avatar->storeAs('public/images/avatars', $id.'.'.strtolower(request()->avatar->extension()));
        $admin->avatar=$pathdata;
      }
    }
    $admin->save();
    $admins= Users::where("permession",3)->paginate(2);
   // $admins->setPath('');
    return view('admins.index')->with("admins",$admins)->renderSections()['content'];
  }

  public function delete($lang,$id){
    $input = request()->all();
    $admin= Users::where("userid",$id)->delete();
    $admins= Users::where("permession",3)->paginate(2);
    return view('admins.index')->with("admins",$admins)->renderSections()['content'];
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
    return view('admins.add')->with($data);
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