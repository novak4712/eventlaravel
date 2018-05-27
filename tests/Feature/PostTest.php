<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;
use App\User;

class PostTest extends TestCase
{
//	use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
		$user = factory(User::class)->create();

    	$response = $this->actingAs($user)->post('/admin',[
    		'name' => 'vasya'
	    ]);

	    $response->assertStatus(302);

	    $response = $this->actingAs($user)->get('/admin');

	    $response->assertSee('создать');
    }
}
