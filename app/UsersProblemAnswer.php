<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersProblemAnswer extends Model
{
    public $table = 'user_problem';
    protected $fillable = ['problem_id', 'user_id', 'user_code', 'plagiarism', 'grade'];
    public function problem()
    {
        return $this->belongsTo('App\Question', 'question_id');
    }

    public function user()
    {
        return $this->belongsToMany('App\User', 'user_problem');
    }
}