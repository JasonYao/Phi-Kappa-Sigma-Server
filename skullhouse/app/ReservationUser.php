<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationUser extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reservation_users';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['netID', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

} // End of the reservation model class
