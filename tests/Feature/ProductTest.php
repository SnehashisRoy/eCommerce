<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    protected $admin;

    public function setUp(): void
    {
        parent::setUp();
        Role::create(['name' => 'admin']);
        $this->admin = User::factory()->create();
        $this->admin->assignRole('admin');

    }

    
    public function test_user_can_create_a_product(){

        $this->withoutExceptionHandling();

        $this->actingAs($this->admin, 'api');

        $product = Product::factory()->raw();

        $response = $this->post('api/product', $product);

        $response->assertStatus(200)
                 ->assertJson([
                     'data' => [
                         'name' => $product['name'] ,
                         'description' => $product['description']
                     ] 
                     ]);

    }
}
