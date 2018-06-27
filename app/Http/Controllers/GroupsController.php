<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Groups;


class GroupsController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    //   SELECT  groups.group_id, groups.title_ar, groups.title_en ,groups.description_ar, groups.description_en , 
    //   assigns.assign_id ,assigns.ref_id  ,assigns.ref_type ,users.fullname
    //   FROM groups
    //   INNER JOIN assigns ON groups.group_id=assigns.product_id 
    //   JOIN users ON assigns.ref_id=users.userid
    //  where assigns.product_type='group';
    $groups=  DB::table('groups')
            ->join('assigns', 'groups.group_id', '=', 'assigns.product_id')
            ->join('users', 'assigns.ref_id', '=', 'users.userid')
            ->select( 'groups.group_id', 'groups.title_ar', 'groups.title_en' ,'groups.description_ar', 'groups.description_en' , 
                      'assigns.assign_id' ,'assigns.ref_id'  ,'assigns.ref_type' ,'users.fullname')
            ->where('assigns.product_type','=','group')                   
            ->paginate(2);
      
      return view('groups.index')->with("groups",$groups);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $teachers= Users::all()->where('permession',Users::USER_TEACHER);
    
    return view('groups.add')->with('teachers',$teachers);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $rules = array(
        'gname' => 'required',
        'gdesc' => 'required',
        'teacher'=> 'required',
      );

      $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails()){
         return response(view('teachers.add',['data'=>$data]),200, ['Content-Type' => 'application/json']);
      }
        $groupModel= new Groups;
        $groupModel->title_en=$request->gname;
        $groupModel->title_ar=$request->gname;
        $groupModel->description_ar=$request->gdesc;
        $groupModel->description_en=$request->gdesc;
        $groupModel->school=0;
        $groupModel->created_at=date('Y-m-d h:m:h');
        if($groupModel->save()){
          DB::table('assigns')->insert([
            'product_id' => $groupModel->group_id,
            'ref_id'=> $request->teacher,
            'product_type'=>'group',
            'ref_type'=>'created_at',
            'school'=>0,
            'created_at'=>date('Y-m-d h:m:s'),
        ]);
        }
        $groups=  DB::table('groups')
        ->join('assigns', 'groups.group_id', '=', 'assigns.product_id')
        ->join('users', 'assigns.ref_id', '=', 'users.userid')
        ->select( 'groups.group_id', 'groups.title_ar', 'groups.title_en' ,'groups.description_ar', 'groups.description_en' , 
                  'assigns.assign_id' ,'assigns.ref_id'  ,'assigns.ref_type' ,'users.fullname')
        ->where('assigns.product_type','=','group')                   
        ->paginate(2);
        $groups->setPath('');  
      return view('groups.index')->with("groups",$groups)->renderSections()['content'];
  }



  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($lang,$id){
    $group = Groups::where('group_id',$id)->first();
    $teacher=  DB::table('groups')
        ->join('assigns', 'groups.group_id', '=', 'assigns.product_id')
        ->join('users', 'assigns.ref_id', '=', 'users.userid')
        ->select( 'users.userid')
        ->where('assigns.product_type','=','group')                   
        ->first();
    $teachers= Users::all()->where('permession',Users::USER_TEACHER);
    //$teachers->setPath('');
    return view('groups.edit')->with('teachers',$teachers)->with('group',$group)->with('teacher',$teacher);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request)
  {

    $rules = array(
      'gname' => 'required',
      'gdesc' => 'required',
      'teacher'=> 'required',
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()){
      // return response(view('teachers.add',['data'=>$data]),200, ['Content-Type' => 'application/json']);
    }
       $groupModel= Groups::where("group_id",$request->id)->first();
      $groupModel->title_en=$request->gname;
      $groupModel->description_en=$request->gdesc;
      $groupModel->school=0;
      $groupModel->created_at=date('Y-m-d h:m:h');
      if($groupModel->save()){
        $assigns=    DB::table('assigns')
                  ->where('product_id', $groupModel->group_id)
                  ->where('product_type','group')
                  ->update(['ref_id' => $request->teacher,
                          'updated_at'=>date('Y-m-d h:m:s')]);

      }
      $groups=  DB::table('groups')
      ->join('assigns', 'groups.group_id', '=', 'assigns.product_id')
      ->join('users', 'assigns.ref_id', '=', 'users.userid')
      ->select( 'groups.group_id', 'groups.title_ar', 'groups.title_en' ,'groups.description_ar', 'groups.description_en' , 
                'assigns.assign_id' ,'assigns.ref_id'  ,'assigns.ref_type' ,'users.fullname')
      ->where('assigns.product_type','=','group')                   
      ->paginate(2);
      $groups->setPath('');
    return view('groups.index')->with("groups",$groups)->renderSections()['content'];
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($lang,$id)
  {
    
    $assigns=DB::table('assigns')
    ->where('product_id', $id)
    ->where('product_type', 'group')
    ->delete();
    if($assigns){
      $group= Groups::where("group_id",$id)->delete();  
    }
    $groups=  DB::table('groups')
    ->join('assigns', 'groups.group_id', '=', 'assigns.product_id')
    ->join('users', 'assigns.ref_id', '=', 'users.userid')
    ->select( 'groups.group_id', 'groups.title_ar', 'groups.title_en' ,'groups.description_ar', 'groups.description_en' , 
              'assigns.assign_id' ,'assigns.ref_id'  ,'assigns.ref_type' ,'users.fullname')
    ->where('assigns.product_type','=','group')                   
    ->paginate(2);
    $groups->setPath('');
      return view('groups.index')->with("groups",$groups)->renderSections()['content'];;
  
  }
  
}

?>