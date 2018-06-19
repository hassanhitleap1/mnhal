<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;  // <<< See here - no real class, only an alias
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Levels;
class LevelsController extends BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function indexLevels()
  {
      $orderBy='level_number';
      $DescAsk='ASC';
      $search='';
      if (request()->isMethod('GET')) {
          $input = request()->all();
          if(isset($input['sorting'])&&$input['sorting']!=''){
              $orderBy=$input['sorting'];
          }
          if(isset($input['descask'])&&$input['descask']!=''){
              $DescAsk=$input['descask'];
          }
          if (isset($input['search'])&&$input['search'] != '') {
              $search=$input['search'];
              $levels = Levels::where('ltitle_ar','like', '%' . $search . '%')->orWhere('ltitle_en', 'like', '%' . $search . '%')->orderBy($orderBy,$DescAsk)->paginate(10);
          } else {
              $levels = Levels::orderBy($orderBy,$DescAsk)->paginate(10);
          }
          return view('levels.index',compact('levels'),['search'=>$search,'descask'=>$DescAsk,'orderBy'=>$orderBy]);
      }
  }
    public function viewAddLevel(){
        return view('levels.add');
    }
    public function addLevels()
    {
        $orderBy = 'level_number';
        $DescAsk = 'ASC';
        $search = '';

            $input = request()->all();
            if(isset($input['ltitle_ar'])&&$input['ltitle_ar']!=''&&isset($input['ltitle_en'])&&$input['ltitle_en']!=''){
                $Level = new Levels();
                $Level->ltitle_ar = $input['ltitle_ar'];
                $Level->ltitle_en = $input['ltitle_en'];
                $Level->school = $input['school'];
                $Level->level_number = $Level->get()->count() + 1;
                $Level->save();
            }

             if(isset($input['sorting'])&&$input['sorting']!=''){
                 $orderBy=$input['sorting'];
             }
             if(isset($input['descask'])&&$input['descask']!=''){
                 $DescAsk=$input['descask'];
             }

        if (isset($input['search']) && $input['search'] != '') {
            $search = $input['search'];
            $levels = Levels::where('ltitle_ar', 'like', '%' . $search . '%')->orWhere('ltitle_en', 'like', '%' . $search . '%')->orderBy($orderBy, $DescAsk)->paginate(10);
        } else {
            $levels = Levels::orderBy($orderBy,$DescAsk)->paginate(10);
        }

        return view('levels.index',compact('levels'),['search' => $search,'descask' => $DescAsk,'orderBy' => $orderBy])->renderSections()['content'];

    }

    public function editLevels()
    {
        $orderBy = 'level_number';
        $DescAsk = 'ASC';
        $search = '';
        $input = request()->all();
        $Level = Levels::where('level_id', $input['id'])->first();
        $Level->ltitle_ar = $input['title_ar'];
        $Level->ltitle_en = $input['title_en'];
        $Level->update();

        if(isset($input['sorting'])&&$input['sorting']!=''){
            $orderBy=$input['sorting'];
        }
        if(isset($input['descask'])&&$input['descask']!=''){
            $DescAsk=$input['descask'];
        }

        if (isset($input['search']) && $input['search'] != '') {
            $search = $input['search'];
            $levels = Levels::where('ltitle_ar', 'like', '%' . $search . '%')->orWhere('ltitle_en', 'like', '%' . $search . '%')->orderBy($orderBy, $DescAsk)->paginate(10);
        } else {
            $levels = Levels::orderBy($orderBy,$DescAsk)->paginate(10);
        }

        return view('levels.index',compact('levels'),['search' => $search,'descask' => $DescAsk,'orderBy' => $orderBy])->renderSections()['content'];



    }
    public function viewedit($lang,$id)
    {
        $levels = Levels::find($id);
        return view('levels.edit',compact('levels'));
    }
    public function deletelevels()
    {
        $orderBy = 'level_number';
        $DescAsk = 'ASC';
        $search = '';
        if (request()->isMethod('GET')) {
            $input = request()->all();
            $id = $input['id'];
            if ($id != '') {
                $levels = Levels::find($id)->delete();
                 }
        }
        if(isset($input['sorting'])&&$input['sorting']!=''){
            $orderBy=$input['sorting'];
        }
        if(isset($input['descask'])&&$input['descask']!=''){
            $DescAsk=$input['descask'];
        }

        if (isset($input['search']) && $input['search'] != '') {
            $search = $input['search'];
            $levels = Levels::where('ltitle_ar', 'like', '%' . $search . '%')->orWhere('ltitle_en', 'like', '%' . $search . '%')->orderBy($orderBy, $DescAsk)->paginate(10);
        } else {
            $levels = Levels::orderBy($orderBy,$DescAsk)->paginate(10);
        }

        return view('levels.index',compact('levels'),['search' => $search,'descask' => $DescAsk,'orderBy' => $orderBy])->renderSections()['content'];
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