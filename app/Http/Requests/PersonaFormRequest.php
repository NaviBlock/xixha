<?php
namespace xixha\Http\Requests;
use xixha\Http\Requests\Request;
class PersonaFormRequest extends Request
{
    public function authorize()
    { 
        return true;
    } 
    public function rules() 
    {
        return [  
        ]; 
    }
}