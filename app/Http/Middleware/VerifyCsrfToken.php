<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/user/care_campaign',
        '/admin/approve_campaign',
        '/admin/reject_campaign',
        '/user/user_follow_to_other_user'
    ];
}
