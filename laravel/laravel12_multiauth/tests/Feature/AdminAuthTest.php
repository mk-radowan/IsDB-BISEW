<?php

namespace Tests\Feature;

use App\Models\Admin;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminAuthTest extends TestCase
{
    public function test_admin_model_implements_authenticatable(): void
    {
        $admin = new Admin();

        $this->assertInstanceOf(Authenticatable::class, $admin);
    }

    public function test_plain_text_admin_password_can_be_checked(): void
    {
        $admin = new Admin(['password' => 'secret123']);

        $this->assertTrue(Hash::check('secret123', $admin->getAuthPassword()));
    }

    public function test_authenticated_admin_is_redirected_to_dashboard_from_login_page(): void
    {
        $admin = new Admin(['email' => 'admin@example.com', 'password' => 'secret123']);

        $this->actingAs($admin, 'admin');

        $response = $this->get('/admin/login');

        $response->assertRedirect('/admin/dashboard');
    }
}
