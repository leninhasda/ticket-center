<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TicketTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_browse_all_tickets()
    {
        $ticket = factory('App\Ticket')->create();
        $response = $this->get('/tickets');

        $response->assertSee($ticket->title);

        $response = $this->get('/tickets/', $ticket->id);
        $response->assertSee($ticket->title);
    }
}
