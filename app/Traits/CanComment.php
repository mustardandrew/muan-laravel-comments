<?php

namespace Muan\Comments\Traits;

use Muan\Comments\Models\Comment;
use Illuminate\Database\Eloquent\Model;

/**
 * Trait CanComment
 *
 * @package Muan\Comments\Traits
 */
trait CanComment
{

    /**
     * Relate to comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Add comment
     * @param Model $model
     * @param string $comment
     * @return Comment
     */
    public function addComment(Model $model, string $comment) : Comment
    {
        return $model->comments()->create([
            'user_id' => $this->id,
            'comment' => $comment,
        ]);
    }

}
