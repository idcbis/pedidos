<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Stock;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company () {
        return $this->belongsTo('App\Company');
    }

    public function isAdmin () {
        if(\Auth::user()->role === 1) {
            return true;
        }
        return false;
    }

    public function userBelongsToPublicCompany () {
        if(\Auth::user()->company->type === 1) {
            return true;
        }
        return false;
    }

    public function userHasStock () {
        $stock = Stock::Where('company_id', \Auth::user()->company_id)->WhereDate('created_at', Carbon::today())->get();
        return count($stock);
    }

    public function orders() {
        return $this->hasMany('App\Order');
    }

}
