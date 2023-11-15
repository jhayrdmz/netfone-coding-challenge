<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Auth;

final readonly class Logout
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        request()->user()->currentAccessToken()->delete();

        return [
            'status' => 'TOKEN_REVOKED',
            'message' => 'Successfully logged out.'
        ];
    }
}
