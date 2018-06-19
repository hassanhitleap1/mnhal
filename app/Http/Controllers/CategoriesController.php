<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;  // <<< See here - no real class, only an alias
use Illuminate\Foundation\Validation\ValidatesRequests;


use App\Categories;

class CategoriesController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }


    public function indexCategory()
    {
        $orderBy='order';
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
                $category = Categories::where('title_ar', 'like', '%' . $search . '%')->orWhere('title_en', 'like', '%' . $search . '%')->orderBy($orderBy,$DescAsk)->get();
            } else {
                $category = Categories::orderBy($orderBy,$DescAsk)->get();
            }

            return view('category.index',compact('category'),['search'=>$search,'descask'=>$DescAsk,'orderBy'=>$orderBy]);
        }
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


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($lang)
    {


    }

    public function addCategories()
    {
        $input = request()->all();
        $category = new Categories();
        $category->title_ar = $input['title_ar'];
        $category->title_en = $input['title_en'];
        $category->order = $category->get()->count();
        $category->save();
        $orderBy='order';
        $DescAsk='ASC';
        $search='';
        if (isset($input['search'])&&$input['search'] != '') {
            $search=$input['search'];
            $category = Categories::where('title_ar', 'like', '%' . $search . '%')->orWhere('title_en', 'like', '%' . $search . '%')->orderBy($orderBy,$DescAsk)->get();
        } else {
            $category = Categories::orderBy($orderBy,$DescAsk)->get();
        }
        return view('category.index',compact('category'),['search'=>$search])->renderSections()['content'];
    }
    public function editCategories()
    {
        $input = request()->all();
        $category = Categories::where('category_id', $input['id'])->first();
        $category->title_ar = $input['title_ar'];
        $category->title_en = $input['title_en'];
        $category->update();
        $orderBy='order';
        $DescAsk='ASC';
        $search='';
        if (isset($input['search'])&&$input['search'] != '') {
            $search=$input['search'];
            $category = Categories::where('title_ar', 'like', '%' . $search . '%')->orWhere('title_en', 'like', '%' . $search . '%')->orderBy($orderBy,$DescAsk)->get();
        } else {
            $category = Categories::orderBy($orderBy,$DescAsk)->get();
        }
        return view('category.index',compact('category'),['search'=>$search])->renderSections()['content'];
    }
    public function savesortCategories()
    {
        $input = request()->all();
        foreach ($input['sort'] as $key => $value) {
            $category = Categories::where('category_id', $value)->first();
            $category->order = $key;
            $category->update();
        }
        $orderBy='order';
        $DescAsk='ASC';
        $search='';
        if (isset($input['search'])&&$input['search'] != '') {
            $search=$input['search'];
            $category = Categories::where('title_ar', 'like', '%' . $search . '%')->orWhere('title_en', 'like', '%' . $search . '%')->orderBy($orderBy,$DescAsk)->get();
        } else {
            $category = Categories::orderBy($orderBy,$DescAsk)->get();
        }
        return view('category.index',compact('category'),['search'=>$search])->renderSections()['content'];
    }
    public function viewedit($lang,$id)
    {
            $category = Categories::find($id);
            return view('category.edit',compact('category'));
    }
    public function deletecategory()
    {
        if (request()->isMethod('GET')) {
            $input = request()->all();
           if(isset($input['id'])){
               $id = $input['id'];
               if ($id != '') {
                   $category = Categories::find($id)->delete();
               }
           }
        }
        $orderBy='order';
        $DescAsk='ASC';
        $search='';
        if (isset($input['search'])&&$input['search'] != '') {
            $search=$input['search'];
            $category = Categories::where('title_ar', 'like', '%' . $search . '%')->orWhere('title_en', 'like', '%' . $search . '%')->orderBy($orderBy,$DescAsk)->get();
        } else {
            $category = Categories::orderBy($orderBy,$DescAsk)->get();
        }
        return view('category.index',compact('category'),['search'=>$search])->renderSections()['content'];
    }
    public function viewAddCategory($lang){
        return view('category.add', ['lang' => $lang]);
    }
    public function viewSort($lang){
        $category = Categories::orderBy('order')->get();
        return view('category.sort', compact('category'), ['lang' => $lang]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($lang, $id)
    {
    }




}

?>