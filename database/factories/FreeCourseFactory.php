<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FreeCourse>
 */
class FreeCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
		$aliases = [
						'html', 'freephp', 'freemakeup', 'freeim', 'book', 'freejs', 'freephp2', 'android', 'csharp', 'cpp',
						'django', 'freeandroid', 'freecpp', 'freecsharp', 'freedjango', 'freefl', 'freehtml5', 'freeim2', 'freejava', 'freejavaproject',
						'freejavascript2', 'freejoomla'
					];

        return [
            'delivery_id' => mt_rand(1, 100),
			'title' => $this->faker->realText(mt_rand(55, 60)),
			'alias' => $this->faker->unique()->randomElement($aliases),
			'description' => FactoryHelper::getFakeHTMLText($this->faker, mt_rand(2, 4)),
        ];
    }
}
