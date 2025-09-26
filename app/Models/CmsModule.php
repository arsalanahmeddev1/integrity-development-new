<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsModule extends Model
{
    protected $table = 'cms_module';
    
    protected $fillable = [
        'name',
        'route_name',
        'icon',
        'sort_order',
        'status',
    ];
}
