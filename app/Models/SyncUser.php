<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyncUser extends Model
{
    use HasFactory;
    protected $table = "sync_user";

    protected $fillable = [
        'name',
        'email',
        'image',
        'contact_number'
    ];

    public function create_user($user){
        return $this->create([
            'name' => $user['name'] ,
            'email' => $user['email'] ,
            'contact_number' => $user['contact_number'] ,
            'image' => $user['image'] ,
        ]);
    }
}
