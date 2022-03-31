<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Questions;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions=Questions::with('category')->get();
        return view('admin/questions/index',['questions'=>$questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::pluck('color_code','category_id');
        return view('admin/questions/create',['categories'=>$categories]);
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
            'category_id'=>'required',
            'question_text'=>'required'
        ]);  
  
        $question = new Questions;  
        $question->category_id =  $request->get('category_id');  
        $question->question_text = $request->get('question_text');
        $question->q_active = $request->get('q_active')!=null ? 1 : 0;
        $question->rating_max = 5;
        $question->save();
        return redirect()->route('question.index') ->with('success', 'Question created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question=Questions::find($id);
        $categories=Category::pluck('color_code','category_id');
        return view('admin/questions/edit',['question'=>$question,'categories'=>$categories]);
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
            'category_id'=>'required',
            'question_text'=>'required'
        ]);  
  
        $question = Questions::find($id);  
        $question->category_id =  $request->get('category_id');  
        $question->question_text = $request->get('question_text');
        $question->q_active = $request->get('q_active')!=null ? 1 : 0;
        $question->save();
        return redirect()->route('question.index') ->with('success', 'Question saved successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question=Questions::find($id);
        $questions->answers()->delete();
        $question->delete();
        return redirect()->route('question.index') ->with('success', 'Question deleted successfully.');    
    }
}
