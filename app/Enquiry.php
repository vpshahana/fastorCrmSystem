<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\EnquiryController;

class Enquiry extends Model
{
    protected $fillable = ['name', 'email', 'course'];
}
