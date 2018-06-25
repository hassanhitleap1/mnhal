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
    $classes= DB::table('classes')
          ->join('levels', 'levels.level_id', '=', 'classes.level')
          ->join('levels', 'levels.level_id', '=', 'classes.level')
          ->join('users', 'users.level', '=', 'classes.class_id')
          ->get();
    //return $classes->level->ltitle_ar;
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