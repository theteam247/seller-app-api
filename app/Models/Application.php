<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
     protected $fillable = [
         'first_name',
         'last_name',
         'shop_category',
         'portfolio_link',
         'has_online_shop',
         'online_shop_url',
         'question_1_answer',
         'question_2_answer',
         'question_3_answer',
    ];
}
