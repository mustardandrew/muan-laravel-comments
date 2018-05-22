<?php

namespace Muan\Comments\Traits;

use Muan\Comments\Models\Comment;

/**
 * Trait Commentable
 */
trait Commentable
{

    /**
     *  Comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * Add comment
     *
     * @param mixed $user
     * @param string $comment
     * @return Comment
     */
    public function addComment($user, string $comment) : Comment
    {
        return $this->comments()->create([
            'user_id' => $user->id,
            'comment' => $comment,
        ]);
    }

}

