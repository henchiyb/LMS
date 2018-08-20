<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'birthday',
        'address',
        'avatar',
        'personal_info',
        'working_place',
        'role',
        'grade',
        'isAdmin',
        'isActive',
        'last_login',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    const ROLE_TEACHER = 0;
    const ROLE_STUDENT = 1;

    public static $roles = [
        self::ROLE_TEACHER => 'Teacher',
        self::ROLE_STUDENT => 'Student',
    ];

    public function specializes()
    {
        return $this->belongsToMany('App\Models\Specialize', 'specializes_users');
    }

    public function findSpecializesFollowUser($id)
    {
        $selected = User::find($id);

        return $selected->specializes;
    }

    /**
     * Get the comments for the blog post.
     */
    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }

    /**
     * The roles that belong to the user.
     */
    public function course()
    {
        return $this->belongsToMany('App\Models\Course', 'courses_users');
    }

    public function updateUser($id, $data)
    {
        $selectedUser = User::findOrFail($id);

        $selectedUser->update(['working_place' => $data['working_place'], 'phone' => $data['phone'], 'birthday' => $data['birthday'], 'address' => $data['address']]);
    }
}
