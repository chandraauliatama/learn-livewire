<?php

namespace Database\Factories;

use App\Models\Todolist;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodolistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Todolist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'body' => $this->faker->sentence(4),
        ];
    }

    public function ofUser(User $user)
    {
        return $this->state([
            'user_id' => $user->id,
        ]);
    }
}
