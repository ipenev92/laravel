<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Event extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['deleted_at'];  


    public function town()
  {
    return $this->belongsTo(Town::class);
  }

  public function locales()
  {
    return $this->hasMany(Locale::class, 'entity_id')->where('entity', 'events');
  }

  public function translations()
  {
    return $this->hasMany(Locale::class, 'entity_id')->where('entity', 'events')->where('language_alias', App::getLocale());
  }
}