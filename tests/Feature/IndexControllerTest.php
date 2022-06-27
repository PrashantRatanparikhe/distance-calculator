<?php

namespace Tests\Feature;

use Tests\TestCase;

class IndexControllerTest extends TestCase
{
    /**
     * It will render the form on browser.
     *
     * @return void
     */
    public function test_it_will_render_the_form()
    {
        $response = $this->get('/');
        $response->assertSee('String One');
        $response->assertSee('String Two');
        $response->assertSee('Calculate');
        $response->assertOk();
    }

    /**
     * It will throw error if the form values is invalid
     *
     * @return void
     */
    public function test_it_will_throw_error_if_form_value_is_invalid()
    {
        // Throw error for string_one and string_two
        $payload = [];
        $response = $this->post('/', $payload);
        $response->assertSessionHasErrors(['string_one', 'string_two']);
        $response->assertStatus(302);

        // Throw error for string_one
        $payload = ["string_two" => "This is test"];
        $response = $this->post('/', $payload);
        $response->assertSessionHasErrors('string_one');
        $response->assertSessionMissing('string_two');
        $response->assertStatus(302);

        // Throw error for string_two
        $payload = ["string_one" => "This is test"];
        $response = $this->post('/', $payload);
        $response->assertSessionMissing('string_one');
        $response->assertSessionHasErrors('string_two');
        $response->assertStatus(302);
    }

    /**
     * If the form params is correct then it will submit the form
     *
     * @return void
     */
    public function test_if_the_params_is_correct_then_it_will_submit_the_form()
    {
        $payload = [
            "string_one" => "This is a test",
            "string_two" => "This is test"
        ];

        $response = $this->post('/', $payload);
        $response->assertSessionHasNoErrors();
        $response->assertOk();
    }
}
