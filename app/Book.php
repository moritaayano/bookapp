<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = array('id');

    public $timestamps = false;

    public static $rules = array(
        'title' => 'required',
        'author' => 'required',
        'price' =>'integer'
    );
    
    public function getData()
    {
        return $this->id . ':' . $this->title.':'. $this->author.'('.$this->price.')';
    }
   
}
