<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    protected $guarded = ['id'];

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}
