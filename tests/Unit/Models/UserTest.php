<?php

declare(strict_types=1);

use App\Models\User;

test('to array', function (): void {
    $user = User::factory()->create()->refresh();

    expect(array_keys($user->toArray()))
        ->toBe([
            'id',
            'uuid',
            'name',
            'email',
            'email_verified_at',
            'current_store_id',
            'phone',
            'role',
            'created_at',
            'updated_at',
            'deleted_at',
            'two_factor_confirmed_at',
        ]);
});
