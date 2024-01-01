<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';
    protected $fillable = [
        'property_id',
        'property_name',
        'property_type_id',
        'property_type_name',
        'parent_cat_id',
        'child_cat_id',
        'check_in',
        'check_out',
        'payment_method',
        'total_paid_amount',
        'booking_date',
        'how_many_guest',
        'customer_notes',
        'customer_phone',
        'customer_name',
        'customer_email',
        'customer_address',
        'property_information',
        'statuses'
    ];
}
