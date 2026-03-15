<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\Locale;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    public function definition(): array
    {
        $hu = Locale::HUNGARIAN->value;
        $en = Locale::ENGLISH->value;

        $titleHu = fake()->sentence(5);
        $titleEn = fake()->sentence(5);

        return [
            'title' => [$hu => $titleHu, $en => $titleEn],
            'slug' => [$hu => Str::slug($titleHu), $en => Str::slug($titleEn)],
            'excerpt' => [
                $hu => fake()->paragraph(2),
                $en => fake()->paragraph(2),
            ],
            'content' => [
                [
                    'type' => 'text',
                    'data' => [
                        'content' => [
                            $hu => '<p>'.fake()->paragraph(4).'</p>',
                            $en => '<p>'.fake()->paragraph(4).'</p>',
                        ],
                    ],
                ],
            ],
            'thumbnail' => null,
            'is_published' => true,
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }

    public function unpublished(): static
    {
        return $this->state(fn () => ['is_published' => false]);
    }
}
