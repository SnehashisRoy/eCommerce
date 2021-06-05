<?php

namespace Tests\Feature;

use App\Models\Sku;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class SkuTest extends TestCase
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
    
    public function testAdminCanCreateSku()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($this->admin, 'api');
        $sku = Sku::factory()->raw();
        $response = $this->post('api/sku' , $sku);
        $response->assertStatus(200)
                 ->assertJson([
                     'data' => [
                         'size' => $sku['size'],
                         'color' => $sku['color'],
                         'price' => $sku['price'],
                         'stock' => $sku['stock']
                     ]
                 ]);
    }
}
