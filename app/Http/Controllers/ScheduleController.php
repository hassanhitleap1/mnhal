<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;  // <<< See here - no real class, only an alias
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use App\Schedule;


class ScheduleController extends BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function indexSchedule()
  {
      $class=1;
      $section=1;
      $teacher=1;
      if (request()->isMethod('GET')) {
          if(isset($input['class'])&&$input['class']!=''){
              $class=$input['class'];
          }
          if(isset($input['section'])&&$input['section']!=''){
              $section=$input['section'];
          }
          if(isset($input['teacher'])&&$input['teacher']!=''){
              $teacher=$input['teacher'];
          }
          $input = request()->all();
      }
      //  $schedule=Schedule::where('class','=',$class )->where('category','=',$subject)->where('teacher','=',$teacher)->get();
        $classes=Schedule::where('class','=',$class )->get();
        $allclasses = DB::table('levels')->select('levels.*')->get();
        $section=DB::table('classes')->where('level','=',$class)->get();
        $categories=DB::table('categories')->select('categories.*')->get();

        $teacher=DB::table('users')->where('permession', '=', 4)->get();

     // return $allclasses;


      return view('schedule.index',compact('classes'),['class'=>$class,'section'=>$section,'teacher'=>$teacher,'allclass'=>$allclasses,'section'=>$section,'categories'=>$categories]);
  }
    public function SaveSchedule(){
return 'schedule';
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