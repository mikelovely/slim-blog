<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function avatar()
    {
        return 'https://www.gravatar.com/avatar/' . md5($this->email) . '?s=60&d=mm';
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
