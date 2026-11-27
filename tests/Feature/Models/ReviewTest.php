<?php

namespace Tests\Feature\Models;

use App\Models\Review;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class ReviewTest extends TestCase
{
    use LazilyRefreshDatabase;

    public function test_domain_tables_do_not_reference_users(): void
    {
        $this->assertFalse(Schema::hasColumn('books', 'user_id'));
        $this->assertFalse(Schema::hasColumn('reviews', 'user_id'));
    }

    public function test_user_id_is_not_mass_assignable(): void
    {
        $review = Review::make([
            'user_id' => 123,
            'book_id' => 456,
            'rating' => 5,
            'comment' => 'Excellent book.',
        ]);

        $this->assertNull($review->getAttribute('user_id'));
        $this->assertSame(456, $review->book_id);
    }
}
