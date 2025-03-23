<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactFormSubmissionPolicy
{
    use HandlesAuthorization;

    public function viewAdminPage(User $user)
    {
        return $user->is_admin; // Ensure this returns true for admin users
    }
}
