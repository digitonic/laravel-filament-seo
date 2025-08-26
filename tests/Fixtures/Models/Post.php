<?php

namespace Digitonic\Filament\SEO\Tests\Fixtures\Models;

use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Post extends Model
{
    use HasSEO;

    protected $guarded = [];
}
