<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    use HasRoles;
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'email', 'password','userimage'
    ];
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /*
    * Get Todo of User
    *
    */
    public function todo()
    {
        return $this->hasMany('Todo');
    }

    /**
     * A permission can be applied to roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('Role');
    }

}