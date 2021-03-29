<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;
use App\Models\User;

class UserTest extends TestCase
{
    public function test_has_many_repositories()
    {
        $user = new User;

        $this->assertInstanceOf(Collection::class, $user->repositories);
    }
}
