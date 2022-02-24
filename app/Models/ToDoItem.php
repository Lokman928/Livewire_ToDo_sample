<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoItem extends Model
{
    use HasFactory;

    protected $table = "todo_item";

    protected $fillable = [
        'user_id',
        'title',
        'detail',
        'idDone',
    ];
}
