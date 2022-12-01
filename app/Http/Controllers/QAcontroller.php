<?php

namespace App\Http\Controllers;
use App\Models\question;
use Illuminate\Http\Request;
use Validator;

class QAcontroller extends Controller
{
    public function __construct()
    {
        $this->question = new question;
    }
    public function questionanswer()
    {
        $data['title'] = '';
        return view('user/questionanswer', $data);         
    }
    public function questionanswer_action(Request $request)
    {

        $validation['question'] = ['required'];
        $validation['answer'] = ['required'];

        $validator = Validator::make($request->all(), $validation);
    //    print_r($validator->errors()->all());die;
        if(!$validator->errors()->all()){

        $this->question->insertData([
            'question' => $request->question, 
            'answer' => $request->answer, 
        ]);


        return redirect('login')->with('success', 'QuestionAdded!');
        }

        if($validator->errors()->all()) 
        { 
            return redirect("questionanswer")->withErrors($validator)->withInput();
        }
   

}
public function editquestion()
    {
        $data['title'] = '';
        return view('user/editquestion', $data);         
    }
}