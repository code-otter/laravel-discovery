<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';

    protected $fillable = ['article_id','customer_name'];

}
