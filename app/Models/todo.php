<?php

namespace App\Models;
use App\Models\Todo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    use HasFactory;

    public $table = "aktifitas.todo";

    protected $fillable = [
        "id",
        "todo",
        "keterangan"
    ];
}
