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
    public function a_user_can_browse_a_theraed()
    {
        $respones = $this->get('/threads');
        $respones->assertSuccessful();
    }

}