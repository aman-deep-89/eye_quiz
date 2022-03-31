<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Questions;
use App\Models\Answers;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin/category/index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([  
            'color_code'=>'required|unique:question_category',
            'title'=>'required',            
            'rgb_code'=>'required',            
        ]);  
  
        $category = new Category;  
        $category->color_code =  $request->get('color_code');  
        $category->rgb_value =  $request->get('rgb_code');  
        $category->title = $request->get('title');
        $category->btn_name = str_replace(' ','_',$request->get('color_code')).'_color_btn';
        $category->color_category = $request->get('color_category');
        $category->is_primary_color = $request->get('is_primary_color')!=null ? 1 : 0;
        $category->cat_active = $request->get('cat_active')!=null ? 1 : 0;
        $category->save();
        return redirect()->route('category.index') ->with('success', 'category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin/category/edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $request->validate([  
            'color_code'=>[
                'required',
                Rule::unique('question_category')->ignore($id,'category_id')],
            'title'=>'required',
            'rgb_code'=>'required',
        ]);  
  
        $category = Category::find($id);  
        $category->color_code =  $request->get('color_code');  
        $category->rgb_value =  $request->get('rgb_code');  
        $category->title = $request->get('title');
        $category->btn_name = str_replace(' ','_',$request->get('color_code')).'_color_btn';
        $category->color_category = $request->get('color_category');
        $category->is_primary_color = $request->get('is_primary_color')!=null ? 1 : 0;
        $category->cat_active = $request->get('cat_active')!=null ? 1 : 0;
        $category->save();
        return redirect()->route('category.index') ->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questions=Questions::where('category_id',$id);
       // $questions->answers()->delete();
        $questions->delete();
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('question.index') ->with('success', 'Category deleted successfully.');    
    }
}
