<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use App\Models\Family;
use Tests\TestCase;

class FamilyTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_list_families()
    {
        $response  = $this->get('/api/families');
        $response->assertStatus(200);
    }

    public function test_register_families()
    {
//        $familyData = [
//            'description' => 'prueba data familia'
//        ];
//        $this->post('/api/families', $familyData);
//        $this->assertDatabaseHas('families', $familyData);

        $familyData = [
            'description' => 'Ford'
        ];

        $result = $this->post('/api/families', $familyData);

        $family = Family::query()->find($result->content());
        $this->assertNotNull($family);
        $this->assertEquals($familyData, $family->only(['description']));
    }

    public function test_update_families()
    {

    }

    public function test_delete_families()
    {

    }
}
