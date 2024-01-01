<?php

namespace Database\Factories;

use App\Models\Tweet;
use Faker\Factory as FakerFactory;
use Illuminate\Console\View\Components\Factory as ComponentsFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tweet>
 */
class TweetFactory extends Factory
{


    protected $model = Tweet::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'body' => $this->faker->sentence,

        ];
    }
}
