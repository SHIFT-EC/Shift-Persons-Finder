<?php
namespace Spf\Shift\Entities;

use Illuminate\Database\Eloquent\Model;

class Missing extends Model
{
    protected $table = 'missing';

    protected $fillable = [
        'first_name', 'second_first_name', 'last_name', 'second_last_name', 'age', 'gender', 'photo', 'description', 'message_user', 'status', 'address', 'last_location', 'user_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
}