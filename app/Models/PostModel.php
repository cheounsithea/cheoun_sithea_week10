<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class PostModel extends Model
{
    use HasFactory;
    protected $table="post";
    protected $primaryKey = "id";
    protected $fillable=['category_id','user_id','tittle','post'];

}
