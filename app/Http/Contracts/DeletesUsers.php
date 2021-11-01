<?php

namespace App\Http\Contracts;


interface DeletesUsers
{
    /**
     * Delete the given user.
     *
     * @param  mixed  $user
     * @return void
     */
    public function delete($user);
}
