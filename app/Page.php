<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // table name
    protected $table = 'pages';
    protected $primaryKey = 'page_id';
}
