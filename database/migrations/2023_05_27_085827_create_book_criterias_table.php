<?php

use App\Models\book_criteria;
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
        Schema::create('book_criterias', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('book_type_id')->nullable();
            $table->timestamps();
        });

        book_criteria::create([
            'name' => "Children's",
            'book_type_id' => 1
        ]);
        book_criteria::create([
            'name' => "Design",
            'book_type_id' => 1
        ]);
        book_criteria::create([
            'name' => "Graphic Novel",
            'book_type_id' => 1
        ]);
        book_criteria::create([
            'name' => "Humanities",
            'book_type_id' => 1
        ]);
        book_criteria::create([
            'name' => "Lifestyle",
            'book_type_id' => 1
        ]);
        book_criteria::create([
            'name' => "Proffesional",
            'book_type_id' => 1
        ]);


        book_criteria::create([
            'name' => "Art Supplies",
            'book_type_id' => 2
        ]);
        book_criteria::create([
            'name' => "Calendars and Planners",
            'book_type_id' => 2
        ]);
        book_criteria::create([
            'name' => "Cards and Gift Wrap",
            'book_type_id' => 2
        ]);
        book_criteria::create([
            'name' => "Character",
            'book_type_id' => 2
        ]);
        book_criteria::create([
            'name' => "Lifestyle",
            'book_type_id' => 2
        ]);
        book_criteria::create([
            'name' => "Notebooks and Journals",
            'book_type_id' => 2
        ]);
        book_criteria::create([
            'name' => "Novelties",
            'book_type_id' => 2
        ]);
        book_criteria::create([
            'name' => "Reading Accessories",
            'book_type_id' => 2
        ]);
        book_criteria::create([
            'name' => "Supplies",
            'book_type_id' => 2
        ]);
        book_criteria::create([
            'name' => "Toys and Games",
            'book_type_id' => 2
        ]);


        book_criteria::create([
            'name' => "Bookstore Collections",
            'book_type_id' => 3
        ]);
        book_criteria::create([
            'name' => "Reading Challenge",
            'book_type_id' => 3
        ]);
        book_criteria::create([
            'name' => "Themed Collections",
            'book_type_id' => 3
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_criterias');
    }
};
