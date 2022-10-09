<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'name',
        'url',
        'parent_id'
    ];
    
    public function parent()
    {
        return $this->hasOne(MenuItem::class);
    }

    public function children()
    {
        //Recursively call childs() relation treating each 
        //child as parent until no more childs remain
        return $this->hasMany(MenuItem::class, 'parent_id')->with('children');
    }
}
