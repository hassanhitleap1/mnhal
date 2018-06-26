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
    //SELECT levels.ltitle_en, levels.ltitle_ar, users.fullname,classes.ctitle_ar,classes.ctitle_en FROM 
    //`classes` INNER JOIN levels on levels.level_id=classes.level inner JOIN users on users.userid=classes.user_id
    $classes=  DB::table('classes')
            ->join('levels', 'levels.level_id', '=', 'classes.level')
            ->join('users', 'users.userid', '=', 'classes.user_id')
            ->select('levels.ltitle_en', 'levels.ltitle_ar', 'users.fullname','classes.ctitle_ar','classes.ctitle_en')
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