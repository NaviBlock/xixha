<?php

namespace xixha\Http\Requests;
 
use xixha\Http\Requests\Request;

class StoryFormRequest extends Request
{

    public function authorize()
    {
        return true;
    } 

    public function rules()
    {
        return [
            'cantidad'=>'required'            
        ];
    }
}
