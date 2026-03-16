<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
		$aliases = [
						'5steps', 'ab', 'ab-1', 'ab-2', 'ab-3', 'actuser', 'admin', 'allusers', 'analysis', 'analysis-2', 
						'analysis-engine', 'analysis-wall', 'android', 'answers', 'api-vk', 'authuser', 'avatar', 'best-cms', 'best-framework', 'chat', 'choice-cms', 'cms'
					];
        return [
            'is_release' => mt_rand(1, 2) == 1,
			'title' => $this->faker->realText(mt_rand(20, 100)),
			'alias' => $this->faker->unique()->randomElement($aliases),
			'intro_text' => FactoryHelper::getFakeHTMLText($this->faker, 1),
			'full_text' => FactoryHelper::getFakeHTMLText($this->faker, mt_rand(2, 10)),
			'meta_desc' => $this->faker->realText(mt_rand(20, 250)),
			'meta_key' => implode(', ', $this->faker->words(mt_rand(3, 5))),
			'hits' => mt_rand(0, 100000),
			'date_show' => $this->faker->dateTimeBetween($startDate = '-1 year', $endDate = '+1 day')
        ];
    }
}
