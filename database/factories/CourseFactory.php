<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
		$aliases = [
						'makeup', 'php', 'javascript', 'html5', 'php2', 'wp', 'fl', 'yii', 'im2', 'laravel',
						'makeup2', 'php2', 'javascript2', 'html6', 'php22', 'wp2', 'fl2', 'yii2', 'im3', 'laravel2',
						'makeup3', 'php4'
					];

        return [
            'product_id' => mt_rand(1, 40),
			'title' => $this->faker->realText(mt_rand(55, 60)),
			'alias' => $this->faker->unique()->randomElement($aliases),
			'slider_description' => $this->faker->realText(420),
			'full_description' => FactoryHelper::getFakeHTMLText($this->faker, mt_rand(2, 4)),
			'price' => mt_rand(1000, 10000)
        ];
    }
}
