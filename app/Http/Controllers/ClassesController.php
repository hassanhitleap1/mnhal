<?php 

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Classes;
use Illuminate\Support\Facades\DB;
use App\Levels;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;




class ClassesController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    // SELECT classes.class_id,classes.created_at,classes.ctitle_en,classes.ctitle_ar,assigns.ref_id ,users.fullname,levels.ltitle_ar,levels.ltitle_en
    // from classes
    // inner JOIN levels on levels.level_id = classes.level 
    // inner JOIN assigns on assigns.product_id = classes.class_id 
    //  JOIN users on users.userid= assigns.ref_id
    //  WHERE assigns.product_type='class'
    $classes=  DB::table('classes')
    ->select('classes.class_id','classes.created_at','classes.ctitle_en','classes.ctitle_ar','assigns.ref_id' ,'users.fullname','levels.ltitle_ar','levels.ltitle_en','users.userid')
            ->join('levels', 'levels.level_id', '=', 'classes.level')
            ->join('assigns','assigns.product_id' ,'=', 'classes.class_id')
            ->join('users' , 'users.userid','=','assigns.ref_id')
            ->where('assigns.product_type','class')
            ->paginate(2);
  
    return view('classes.index')->with("classes",$classes);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $levels=Levels::all();
    $teachers= Users::all()->where('permession',Users::USER_TEACHER);
    
    return view('classes.add')->with(['levels'=>$levels,'teachers'=>$teachers]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
      $rules = array(
        'name_en' => 'required',
        'name_ar' => 'required',
        'level'=> 'required',
        'teacher'=> 'required',
      );

      $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails()){
       // $levels=Levels::all();
        //$teachers= Users::all()->where('permession',Users::USER_TEACHER);
         //return response(view('classes.add',['levels'=>$levels,'teachers'=>$teachers]),200, ['Content-Type' => 'application/json']);
      }
      
        $classModel= new  Classes;
        $classModel->ctitle_en=$request->name_en;
        $classModel->ctitle_ar=$request->name_ar;
        $classModel->level=$request->level;
        $classModel->school=0;
        $classModel->created_at=date('Y-m-d h:m:h');
        if($classModel->save()){
          DB::table('assigns')->insert([
            'product_id' => $classModel->class_id,
            'ref_id'=> $request->teacher,
            'product_type'=>'class',
            'ref_type'=>'student',
            'school'=>0,
            'created_at'=>date('Y-m-d h:m:s'),
        ]);
        }
        $classes=  DB::table('classes')
                ->select('classes.class_id','classes.created_at','classes.ctitle_en','classes.ctitle_ar','assigns.ref_id' ,'users.fullname','levels.ltitle_ar','levels.ltitle_en','users.userid')
                ->join('levels', 'levels.level_id', '=', 'classes.level')
                ->join('assigns','assigns.product_id' ,'=', 'classes.class_id')
                ->join('users' , 'users.userid','=','assigns.ref_id')
                ->where('assigns.product_type','class')
                ->paginate(2);
        $classes->setPath('');
      return view('classes.index')->with("classes",$classes)->renderSections()['content'];
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($lang,$id)
  {
    $class=DB::table('classes')
        ->select('classes.class_id','classes.ctitle_en','classes.ctitle_ar','assigns.ref_id','classes.level' )
        ->join('assigns','assigns.product_id' ,'=', 'classes.class_id')
        ->where('assigns.product_type','class')
        ->where('classes.class_id',$id)
        ->first();
    $levels=Levels::all();
    $teachers= Users::all()->where('permession',Users::USER_TEACHER);
    return view('classes.edit')->with(['class'=>$class,'levels'=>$levels,'teachers'=>$teachers]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $lang,$id)
  {
    $rules = array(
      'name_en' => 'required',
      'name_ar' => 'required',
      'level'=> 'required',
      'teacher'=> 'required',
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()){
     // $levels=Levels::all();
      //$teachers= Users::all()->where('permession',Users::USER_TEACHER);
       //return response(view('classes.add',['levels'=>$levels,'teachers'=>$teachers]),200, ['Content-Type' => 'application/json']);
    }
    $classModel= Classes::where("class_id",$request->id)->first();
    $classModel->ctitle_en=$request->name_en;
    $classModel->ctitle_ar=$request->name_ar;
    $classModel->level=$request->level;
    $classModel->school=0;
    $classModel->created_at=date('Y-m-d h:m:h');
    $classModel->save();
    $assigns=    DB::table('assigns')
          ->where('product_id', $classModel->class_id)
          ->where('product_type','class')
          ->update(['ref_id' => $request->teacher,
                    'updated_at'=>date('Y-m-d h:m:s')]);
    
    $classes=  DB::table('classes')
            ->select('classes.class_id','classes.created_at','classes.ctitle_en','classes.ctitle_ar','assigns.ref_id' ,'users.fullname','levels.ltitle_ar','levels.ltitle_en','users.userid')
            ->join('levels', 'levels.level_id', '=', 'classes.level')
            ->join('assigns','assigns.product_id' ,'=', 'classes.class_id')
            ->join('users' , 'users.userid','=','assigns.ref_id')
            ->where('assigns.product_type','class')
            ->paginate(2);
    $classes->setPath('');
  return view('classes.index')->with("classes",$classes)->renderSections()['content'];
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($lang,$id)
  {
   $assigns= DB::table('assigns')->where('product_id', '=', $id)
    ->where('product_type', 'class')
    ->delete();
    if($assigns){
      $class=DB::table('classes')->where('class_id', '=', $id)->delete();
    }

    $classes=  DB::table('classes')
    ->select('classes.class_id','classes.created_at','classes.ctitle_en','classes.ctitle_ar','assigns.ref_id' ,'users.fullname','levels.ltitle_ar','levels.ltitle_en','users.userid')
    ->join('levels', 'levels.level_id', '=', 'classes.level')
    ->join('assigns','assigns.product_id' ,'=', 'classes.class_id')
    ->join('users' , 'users.userid','=','assigns.ref_id')
    ->where('assigns.product_type','class')
    ->paginate(2);
    $classes->setPath('');
    return view('classes.index')->with("classes",$classes)->renderSections()['content'];
    
  }
  
}

?>