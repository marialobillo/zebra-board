<?php

namespace Tests\Unit;

use App\Models\Note;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NoteTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_has_a_path()
    {
        $note = Note::factory()->create();

        $this->assertEquals('/notes/' . $note->id, $note->path());
    }
}
