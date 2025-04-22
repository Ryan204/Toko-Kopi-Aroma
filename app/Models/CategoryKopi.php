<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryKopi extends Model
{
  protected $fillable = ['name', 'description'];

  public static function getAllCategories()
  {
    return [
      new self([
        'name' => 'Arabica',
        'description' => 'Kopi Arabica memiliki rasa yang halus dan aroma yang wangi.'
      ]),
      new self([
        'name' => 'Robusta',
        'description' => 'Kopi Robusta memiliki rasa yang lebih kuat dan kandungan kafein yang lebih tinggi.'
      ])
    ];
  }
}
