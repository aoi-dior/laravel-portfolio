<?php

namespace App\Policies;

use App\Comment;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, Comment $comment)
    {
        //
    }

    public function create(User $user)
    {
        
    }

    public function update(User $user, Comment $comment)
    {
        //
    }

    public function commentDelete(User $user, Comment $comment)
    {
        return $user->id === $comment->user_id;
    }

    public function restore(User $user, Comment $comment)
    {
        //
    }

    public function forceDelete(User $user, Comment $comment)
    {
        //
    }
}