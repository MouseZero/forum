<?php
/**
 * Created by PhpStorm.
 * User: zero
 * Date: 7/8/17
 * Time: 2:34 AM
 */

namespace Tests\Feature;


use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Model\Thread;

class ThreadsTest extends TestCase
{

    use DatabaseMigrations;

    /** @test */
    public function a_user_can_see_all_threads()
    {
        $this->markTestIncomplete('Still need to test actual content');
        $respones = $this->get('/threads');
        $respones->assertSuccessful();
    }

    /** @test */
    public function a_user_can_see_a_thread()
    {
        $this->markTestIncomplete('Todo:: write this test');
    }

}