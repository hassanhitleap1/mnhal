<?php 

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Classes;



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
    //  WHERE assigns.product_type='classes'
    $classes=  DB::table('classes')
            ->join('levels', 'levels.level_id', '=', 'classes.level')
            ->join('assigns','assigns.product_id' ,'=', 'classes.class_id')
            ->join('users' , 'users.userid ','= ','assigns.ref_id')
            ->select('classes.class_id','classes.created_at','classes.ctitle_en','classes.ctitle_ar','assigns.ref_id' ,'users.fullname','levels.ltitle_ar','levels.ltitle_en')
            ->where('assigns.product_type','classes')
            ->get();
  
    
    // return view('classes.index')->with("classes",$classes);
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
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
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