<?php

namespace Muan\Comments\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 *
 * @package Muan\Comments\Models
 */
class Comment extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'comment',
        'approved',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'approved' => 'boolean'
    ];

    /**
     * Relate to models
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    /**
     * Relate to User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        $userClass = config('auth.providers.users.model');
        return $this->belongsTo($userClass);
    }

    /**
     * Approved this comment
     *
     * @return $this
     */
    public function approve()
    {
        $this->approved = true;
        $this->save();

        return $this;
    }
}
