<?php

use App\Models\book_category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('book_criteria_id')->nullable();
            $table->timestamps();
        });

        book_category::create([
            'name' => "Bibles",
            'book_criteria_id' => 1,
        ]);
        book_category::create([
            'name' => "Education",
            'book_criteria_id' => 1,
        ]);
        book_category::create([
            'name' => "Juvenile Fiction",
            'book_criteria_id' => 1,
        ]);
        book_category::create([
            'name' => "Juvenile Non-Fiction",
            'book_criteria_id' => 1,
        ]);
        book_category::create([
            'name' => "Study Aids",
            'book_criteria_id' => 1,
        ]);
        book_category::create([
            'name' => "Young Adult Fiction",
            'book_criteria_id' => 1,
        ]);
        book_category::create([
            'name' => "Young Adult Non-Fiction",
            'book_criteria_id' => 1,
        ]);


        book_category::create([
            'name' => "Antiques & Collectibles",
            'book_criteria_id' => 2,
        ]);
        book_category::create([
            'name' => "Architecture",
            'book_criteria_id' => 2,
        ]);
        book_category::create([
            'name' => "Art",
            'book_criteria_id' => 2,
        ]);
        book_category::create([
            'name' => "Biography & Autobiography",
            'book_criteria_id' => 2,
        ]);
        book_category::create([
            'name' => "Fashion",
            'book_criteria_id' => 2,
        ]);
        book_category::create([
            'name' => "Games & Activities",
            'book_criteria_id' => 2,
        ]);
        book_category::create([
            'name' => "Gardening",
            'book_criteria_id' => 2,
        ]);
        book_category::create([
            'name' => "General",
            'book_criteria_id' => 2,
        ]);
        book_category::create([
            'name' => "Graphic Arts",
            'book_criteria_id' => 2,
        ]);
        book_category::create([
            'name' => "House & Home",
            'book_criteria_id' => 2,
        ]);
        book_category::create([
            'name' => "Performing Arts",
            'book_criteria_id' => 2,
        ]);
        book_category::create([
            'name' => "Photography",
            'book_criteria_id' => 2,
        ]);
        book_category::create([
            'name' => "Graphic Novels",
            'book_criteria_id' => 3,
        ]);
        book_category::create([
            'name' => "Manga",
            'book_criteria_id' => 3,
        ]);
        book_category::create([
            'name' => "Bibles",
            'book_criteria_id' => 4,
        ]);
        book_category::create([
            'name' => "Biography & Autobiography",
            'book_criteria_id' => 4,
        ]);
        book_category::create([
            'name' => "Drama",
            'book_criteria_id' => 4,
        ]);
        book_category::create([
            'name' => "Fiction",
            'book_criteria_id' => 4,
        ]);
        book_category::create([
            'name' => "History",
            'book_criteria_id' => 4,
        ]);
        book_category::create([
            'name' => "Literary Collections",
            'book_criteria_id' => 4,
        ]);
        book_category::create([
            'name' => "Literary Criticism",
            'book_criteria_id' => 4,
        ]);
        book_category::create([
            'name' => "Philosophy",
            'book_criteria_id' => 4,
        ]);
        book_category::create([
            'name' => "Poetry",
            'book_criteria_id' => 4,
        ]);
        book_category::create([
            'name' => "Political Science",
            'book_criteria_id' => 4,
        ]);
        book_category::create([
            'name' => "Religion",
            'book_criteria_id' => 4,
        ]);
        book_category::create([
            'name' => "True Crime",
            'book_criteria_id' => 4,
        ]);
        book_category::create([
            'name' => "Social Science",
            'book_criteria_id' => 4,
        ]);


        book_category::create([
            'name' => "Antiques & Collectibles",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Biography & Autobiography",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Body & Mind & Spirit",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Cooking",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Crafts & Hobbies",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Education",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Family",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Games & Activities",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Gardening",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Health & Fitness",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Humor",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Music",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Pets",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Reference",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Self Help",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Sports & Recreation",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Transportation",
            'book_criteria_id' => 5,
        ]);
        book_category::create([
            'name' => "Travel",
            'book_criteria_id' => 5,
        ]);



        book_category::create([
            'name' => "Biography & Autobiography",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Business & Economics",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Computers",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Education",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Foreign Language Study",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "History",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Language Arts & Disciplines",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Law",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Mathematics",
            'book_criteria_id' => 6,
        ]);

        book_category::create([
            'name' => "Medical",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Nature",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Psychology",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Reference",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Relationships",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Science",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Self Help",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Social Science",
            'book_criteria_id' => 6,
        ]);
        book_category::create([
            'name' => "Study Aids",
            'book_criteria_id' => 6,
        ]);

        book_category::create([
            'name' => "Technology & Engineering",
            'book_criteria_id' => 6,
        ]);


        book_category::create([
            'name' => "Drawing",
            'book_criteria_id' => 7,
        ]);
        book_category::create([
            'name' => "Others",
            'book_criteria_id' => 7,
        ]);
        book_category::create([
            'name' => "Painting",
            'book_criteria_id' => 7,
        ]);
        book_category::create([
            'name' => "Supports",
            'book_criteria_id' => 7,
        ]);

        book_category::create([
            'name' => "Calendar",
            'book_criteria_id' => 8,
        ]);
        book_category::create([
            'name' => "Others",
            'book_criteria_id' => 8,
        ]);
        book_category::create([
            'name' => "Planner",
            'book_criteria_id' => 8,
        ]);

        book_category::create([
            'name' => "Gift Wrapper",
            'book_criteria_id' => 9,
        ]);
        book_category::create([
            'name' => "Note Cards",
            'book_criteria_id' => 9,
        ]);
        book_category::create([
            'name' => "Postcard",
            'book_criteria_id' => 9,
        ]);
        book_category::create([
            'name' => "Stationery",
            'book_criteria_id' => 9,
        ]);

        book_category::create([
            'name' => "Demon Slayer",
            'book_criteria_id' => 10,
        ]);
        book_category::create([
            'name' => "Disney",
            'book_criteria_id' => 10,
        ]);
        book_category::create([
            'name' => "Kakao Friends",
            'book_criteria_id' => 10,
        ]);
        book_category::create([
            'name' => "Marvel",
            'book_criteria_id' => 10,
        ]);
        book_category::create([
            'name' => "Moomin",
            'book_criteria_id' => 10,
        ]);
        book_category::create([
            'name' => "San-x",
            'book_criteria_id' => 10,
        ]);
        book_category::create([
            'name' => "Studio Ghibli",
            'book_criteria_id' => 10,
        ]);

        book_category::create([
            'name' => "Bags & Cases",
            'book_criteria_id' => 11,
        ]);
        book_category::create([
            'name' => "Clothing & Accessories",
            'book_criteria_id' => 11,
        ]);
        book_category::create([
            'name' => "Fashion",
            'book_criteria_id' => 11,
        ]);
        book_category::create([
            'name' => "Homeware",
            'book_criteria_id' => 11,
        ]);
        book_category::create([
            'name' => "Travel Accessories",
            'book_criteria_id' => 11,
        ]);


        book_category::create([
            'name' => "Binders & Refills",
            'book_criteria_id' => 12,
        ]);
        book_category::create([
            'name' => "Guided Journals",
            'book_criteria_id' => 12,
        ]);
        book_category::create([
            'name' => "Notebooks",
            'book_criteria_id' => 12,
        ]);


        book_category::create([
            'name' => "Collectibles",
            'book_criteria_id' => 13,
        ]);
        book_category::create([
            'name' => "General",
            'book_criteria_id' => 13,
        ]);
        book_category::create([
            'name' => "Key Chains",
            'book_criteria_id' => 13,
        ]);
        book_category::create([
            'name' => "Magnets",
            'book_criteria_id' => 13,
        ]);
        book_category::create([
            'name' => "Pins",
            'book_criteria_id' => 13,
        ]);
        book_category::create([
            'name' => "Posters",
            'book_criteria_id' => 13,
        ]);
        book_category::create([
            'name' => "Stickers",
            'book_criteria_id' => 13,
        ]);


        book_category::create([
            'name' => "Book Lights",
            'book_criteria_id' => 14,
        ]);
        book_category::create([
            'name' => "Bookends",
            'book_criteria_id' => 14,
        ]);
        book_category::create([
            'name' => "Bookmarks",
            'book_criteria_id' => 14,
        ]);
        book_category::create([
            'name' => "Others",
            'book_criteria_id' => 14,
        ]);

        book_category::create([
            'name' => "Electronics & Accessories",
            'book_criteria_id' => 15,
        ]);
        book_category::create([
            'name' => "Filing & Storage",
            'book_criteria_id' => 15,
        ]);
        book_category::create([
            'name' => "Office Supplies & Equipment",
            'book_criteria_id' => 15,
        ]);
        book_category::create([
            'name' => "Others",
            'book_criteria_id' => 15,
        ]);
        book_category::create([
            'name' => "Paper",
            'book_criteria_id' => 15,
        ]);
        book_category::create([
            'name' => "Writing Instruments",
            'book_criteria_id' => 15,
        ]);

        book_category::create([
            'name' => "Board Games",
            'book_criteria_id' => 16,
        ]);
        book_category::create([
            'name' => "Card Games",
            'book_criteria_id' => 16,
        ]);
        book_category::create([
            'name' => "General Toys",
            'book_criteria_id' => 16,
        ]);
        book_category::create([
            'name' => "Others",
            'book_criteria_id' => 16,
        ]);
        book_category::create([
            'name' => "Puzzles",
            'book_criteria_id' => 16,
        ]);

        book_category::create([
            'name' => "Fave Reads Under Php500",
            'book_criteria_id' => 17,
        ]);
        book_category::create([
            'name' => "From Page to Screen",
            'book_criteria_id' => 17,
        ]);
        book_category::create([
            'name' => "Fully Booked Picks",
            'book_criteria_id' => 17,
        ]);
        book_category::create([
            'name' => "Great Reads in Small Packages",
            'book_criteria_id' => 17,
        ]);
        book_category::create([
            'name' => "Now in Paperback",
            'book_criteria_id' => 17,
        ]);
        book_category::create([
            'name' => "Reading Allies",
            'book_criteria_id' => 17,
        ]);
        book_category::create([
            'name' => "Staff Picks",
            'book_criteria_id' => 17,
        ]);


        book_category::create([
            'name' => "Autobiography",
            'book_criteria_id' => 18,
        ]);
        book_category::create([
            'name' => "Philippine Books",
            'book_criteria_id' => 18,
        ]);
        book_category::create([
            'name' => "Understand yourself",
            'book_criteria_id' => 18,
        ]);

        book_category::create([
            'name' => "Award Winners",
            'book_criteria_id' => 19,
        ]);
        book_category::create([
            'name' => "Discover Filipino Reads",
            'book_criteria_id' => 19,
        ]);
        book_category::create([
            'name' => "Comics & Graphic Novels",
            'book_criteria_id' => 19,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_categories');
    }
};
