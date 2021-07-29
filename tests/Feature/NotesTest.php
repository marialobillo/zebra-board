<?php

namespace Tests\Feature;

use App\Models\Note;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NotesTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**
     * @test
     */
    public function an_user_can_create_a_note()
    {
        $this->withoutExceptionHandling();

        $attributes = [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
        ];
        $this->post('/notes', $attributes);

        $this->assertDatabaseHas('notes', $attributes);

        $this->get('/notes')->assertSee($attributes['title']);
    }

    /**
     * @test
     */
    public function a_note_requires_a_title()
    {
        $attributes = Note::factory()->raw(['title' => '']);

        $this->post('/notes', $attributes)->assertSessionHasErrors('title');
    }

    /**
     * @ test
     */
    public function a_note_requires_a_description()
    {
        $attributes = Note::factory()->raw(['description' => '']);

        $this->post('/notes', $attributes)->assertSessionHasErrors('description');
    }
}
