<?php

use App\Models\book_genre;
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
        Schema::create('book_genres', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('book_category_id')->nullable();
            $table->timestamps();
        });

        book_genre::create([
            'name' => "Christian Standard Bible",
            'book_category_id' => 1,
        ]);
        book_genre::create([
            'name' => "New International Version",
            'book_category_id' => 1,
        ]);


        book_genre::create([
            'name' => "Early Childhood (incl. Preschool & Kindergarten)",
            'book_category_id' => 2,
        ]);

        book_genre::create([
            'name' => "Animals",
            'book_category_id' => 3,
        ]);
        book_genre::create([
            'name' => "Social Themes",
            'book_category_id' => 3,
        ]);
        book_genre::create([
            'name' => "Comics & Graphic Novels",
            'book_category_id' => 3,
        ]);


        book_genre::create([
            'name' => "Activity Books",
            'book_category_id' => 4,
        ]);
        book_genre::create([
            'name' => "Animals",
            'book_category_id' => 4,
        ]);
        book_genre::create([
            'name' => "Concepts",
            'book_category_id' => 4,
        ]);


        book_genre::create([
            'name' => "Study Aids",
            'book_category_id' => 5,
        ]);

        book_genre::create([
            'name' => "Fantasy",
            'book_category_id' => 6,
        ]);
        book_genre::create([
            'name' => "Romance",
            'book_category_id' => 6,
        ]);
        book_genre::create([
            'name' => "Social Themes",
            'book_category_id' => 6,
        ]);

        book_genre::create([
            'name' => "Social Topics",
            'book_category_id' => 7,
        ]);
        book_genre::create([
            'name' => "Biography & Autobiography",
            'book_category_id' => 7,
        ]);
        book_genre::create([
            'name' => "Comics & Graphic Novels",
            'book_category_id' => 7,
        ]);


        book_genre::create([
            'name' => "Popular Culture",
            'book_category_id' => 8,
        ]);
        book_genre::create([
            'name' => "Clocks & Watches",
            'book_category_id' => 8,
        ]);
        book_genre::create([
            'name' => "Posters",
            'book_category_id' => 8,
        ]);

        book_genre::create([
            'name' => "Interior Design",
            'book_category_id' => 9,
        ]);
        book_genre::create([
            'name' => "Individual Architects & Firms",
            'book_category_id' => 9,
        ]);
        book_genre::create([
            'name' => "Reference",
            'book_category_id' => 9,
        ]);


        book_genre::create([
            'name' => "Techniques",
            'book_category_id' => 10,
        ]);
        book_genre::create([
            'name' => "Asian",
            'book_category_id' => 10,
        ]);
        book_genre::create([
            'name' => "Video Game Art",
            'book_category_id' => 10,
        ]);

        book_genre::create([
            'name' => "Entertainment & Performing Arts",
            'book_category_id' => 11,
        ]);
        book_genre::create([
            'name' => "Fashion",
            'book_category_id' => 11,
        ]);
        book_genre::create([
            'name' => "Artists & Architects & Photographers",
            'book_category_id' => 11,
        ]);


        book_genre::create([
            'name' => "Fashion & Accessories",
            'book_category_id' => 12,
        ]);
        book_genre::create([
            'name' => "Fashion & Style",
            'book_category_id' => 12,
        ]);
        book_genre::create([
            'name' => "Textile & Costume",
            'book_category_id' => 12,
        ]);


        book_genre::create([
            'name' => "Role Playing & Fantasy",
            'book_category_id' => 13,
        ]);
        book_genre::create([
            'name' => "Coloring Books",
            'book_category_id' => 13,
        ]);
        book_genre::create([
            'name' => "Video & Mobile",
            'book_category_id' => 13,
        ]);


        book_genre::create([
            'name' => "Gardening",
            'book_category_id' => 14,
        ]);

        book_genre::create([
            'name' => "History & Criticism",
            'book_category_id' => 15,
        ]);
        book_genre::create([
            'name' => "Reference",
            'book_category_id' => 15,
        ]);


        book_genre::create([
            'name' => "Video & Animation",
            'book_category_id' => 16,
        ]);
        book_genre::create([
            'name' => "General",
            'book_category_id' => 16,
        ]);
        book_genre::create([
            'name' => "Illustration",
            'book_category_id' => 16,
        ]);

        book_genre::create([
            'name' => "Decorating & Furnishings",
            'book_category_id' => 17,
        ]);
        book_genre::create([
            'name' => "Cleaning & Caretaking & Organizing",
            'book_category_id' => 17,
        ]);
        book_genre::create([
            'name' => "Design & Construction",
            'book_category_id' => 17,
        ]);

        book_genre::create([
            'name' => "Film",
            'book_category_id' => 18,
        ]);
        book_genre::create([
            'name' => "Animation",
            'book_category_id' => 18,
        ]);
        book_genre::create([
            'name' => "Television",
            'book_category_id' => 18,
        ]);


        book_genre::create([
            'name' => "Subjects & Themes",
            'book_category_id' => 19,
        ]);
        book_genre::create([
            'name' => "Photoessays & Documentaries",
            'book_category_id' => 19,
        ]);



        book_genre::create([
            'name' => "Superheroes",
            'book_category_id' => 20,
        ]);
        book_genre::create([
            'name' => "Fantasy",
            'book_category_id' => 20,
        ]);
        book_genre::create([
            'name' => "Science Fiction",
            'book_category_id' => 20,
        ]);

        book_genre::create([
            'name' => "Action & Adventure",
            'book_category_id' => 21,
        ]);
        book_genre::create([
            'name' => "Fantasy",
            'book_category_id' => 21,
        ]);
        book_genre::create([
            'name' => "Romance",
            'book_category_id' => 21,
        ]);

        book_genre::create([
            'name' => "zxczxcqweqwe",
            'book_category_id' => 22,
        ]);
        book_genre::create([
            'name' => "zxczxcqweqwe",
            'book_category_id' => 22,
        ]);
        book_genre::create([
            'name' => "zxczxcqweqwe",
            'book_category_id' => 22,
        ]);
        book_genre::create([
            'name' => "zxczxcqweqwe",
            'book_category_id' => 22,
        ]);


        book_genre::create([
            'name' => "Multiple Translations",
            'book_category_id' => 23,
        ]);

        book_genre::create([
            'name' => "Personal Memoirs",
            'book_category_id' => 24,
        ]);
        book_genre::create([
            'name' => "Cultural & Ethnic & Regional",
            'book_category_id' => 24,
        ]);
        book_genre::create([
            'name' => "Political",
            'book_category_id' => 24,
        ]);

        book_genre::create([
            'name' => "Shakespeare",
            'book_category_id' => 25,
        ]);
        book_genre::create([
            'name' => "Caribbean & Latin American",
            'book_category_id' => 25,
        ]);

        book_genre::create([
            'name' => "Thrillers",
            'book_category_id' => 26,
        ]);
        book_genre::create([
            'name' => "Literary",
            'book_category_id' => 26,
        ]);
        book_genre::create([
            'name' => "Romance",
            'book_category_id' => 26,
        ]);


        book_genre::create([
            'name' => "Military",
            'book_category_id' => 27,
        ]);
        book_genre::create([
            'name' => "United States",
            'book_category_id' => 27,
        ]);
        book_genre::create([
            'name' => "Europe",
            'book_category_id' => 27,
        ]);


        book_genre::create([
            'name' => "Essays",
            'book_category_id' => 28,
        ]);
        book_genre::create([
            'name' => "Asian",
            'book_category_id' => 28,
        ]);
        book_genre::create([
            'name' => "General",
            'book_category_id' => 28,
        ]);

        book_genre::create([
            'name' => "Shakespeare",
            'book_category_id' => 29,
        ]);
        book_genre::create([
            'name' => "Books & Reading",
            'book_category_id' => 29,
        ]);
        book_genre::create([
            'name' => "Modern",
            'book_category_id' => 29,
        ]);

        book_genre::create([
            'name' => "Ethics & Moral Philosophy",
            'book_category_id' => 30,
        ]);
        book_genre::create([
            'name' => "History & Surveys",
            'book_category_id' => 30,
        ]);
        book_genre::create([
            'name' => "Political",
            'book_category_id' => 30,
        ]);


        book_genre::create([
            'name' => "Subjects & Themes",
            'book_category_id' => 31,
        ]);
        book_genre::create([
            'name' => "American",
            'book_category_id' => 31,
        ]);
        book_genre::create([
            'name' => "General",
            'book_category_id' => 31,
        ]);


        book_genre::create([
            'name' => "American Government",
            'book_category_id' => 32,
        ]);
        book_genre::create([
            'name' => "Political Ideologies",
            'book_category_id' => 32,
        ]);
        book_genre::create([
            'name' => "Corruption & Misconduct",
            'book_category_id' => 32,
        ]);


        book_genre::create([
            'name' => "Christian Living",
            'book_category_id' => 33,
        ]);
        book_genre::create([
            'name' => "Buddhism",
            'book_category_id' => 33,
        ]);
        book_genre::create([
            'name' => "Christianity",
            'book_category_id' => 33,
        ]);


        book_genre::create([
            'name' => "Folklore & Mythology",
            'book_category_id' => 34,
        ]);
        book_genre::create([
            'name' => "Feminism & Feminist Theory",
            'book_category_id' => 34,
        ]);
        book_genre::create([
            'name' => "Women's Studies",
            'book_category_id' => 34,
        ]);

        book_genre::create([
            'name' => "Murder",
            'book_category_id' => 35,
        ]);
        book_genre::create([
            'name' => "Organized Crime",
            'book_category_id' => 35,
        ]);
        book_genre::create([
            'name' => "White Collar Crime",
            'book_category_id' => 35,
        ]);


        book_genre::create([
            'name' => "Magazines & Newspapers",
            'book_category_id' => 36,
        ]);
        book_genre::create([
            'name' => "Wine",
            'book_category_id' => 36,
        ]);
        book_genre::create([
            'name' => "Books",
            'book_category_id' => 36,
        ]);

        book_genre::create([
            'name' => "Music",
            'book_category_id' => 37,
        ]);
        book_genre::create([
            'name' => "Sports",
            'book_category_id' => 37,
        ]);
        book_genre::create([
            'name' => "Culinary",
            'book_category_id' => 37,
        ]);

        book_genre::create([
            'name' => "Divination",
            'book_category_id' => 38,
        ]);
        book_genre::create([
            'name' => "Inspiration & Personal Growth",
            'book_category_id' => 38,
        ]);
        book_genre::create([
            'name' => "Mindfulness & Meditation",
            'book_category_id' => 38,
        ]);


        book_genre::create([
            'name' => "Methods",
            'book_category_id' => 39,
        ]);
        book_genre::create([
            'name' => "Regional & Ethnic",
            'book_category_id' => 39,
        ]);
        book_genre::create([
            'name' => "Courses & Dishes",
            'book_category_id' => 39,
        ]);


        book_genre::create([
            'name' => "Origami",
            'book_category_id' => 40,
        ]);
        book_genre::create([
            'name' => "General",
            'book_category_id' => 40,
        ]);
        book_genre::create([
            'name' => "Papercrafts",
            'book_category_id' => 40,
        ]);

        book_genre::create([
            'name' => "Education",
            'book_category_id' => 41,
        ]);

        book_genre::create([
            'name' => "Parenting",
            'book_category_id' => 42,
        ]);
        book_genre::create([
            'name' => "Children with Special Needs",
            'book_category_id' => 42,
        ]);
        book_genre::create([
            'name' => "Life Stages",
            'book_category_id' => 42,
        ]);

        book_genre::create([
            'name' => "Sudoku",
            'book_category_id' => 43,
        ]);
        book_genre::create([
            'name' => "Puzzles",
            'book_category_id' => 43,
        ]);
        book_genre::create([
            'name' => "Activity Books",
            'book_category_id' => 43,
        ]);

        book_genre::create([
            'name' => "House Plants & Indoor",
            'book_category_id' => 44,
        ]);
        book_genre::create([
            'name' => "Garden Furnishings",
            'book_category_id' => 44,
        ]);



        book_genre::create([
            'name' => "Diet & Nutrition",
            'book_category_id' => 45,
        ]);
        book_genre::create([
            'name' => "Yoga",
            'book_category_id' => 45,
        ]);
        book_genre::create([
            'name' => "General",
            'book_category_id' => 45,
        ]);

        book_genre::create([
            'name' => "Form",
            'book_category_id' => 46,
        ]);
        book_genre::create([
            'name' => "Topic",
            'book_category_id' => 46,
        ]);
        book_genre::create([
            'name' => "General",
            'book_category_id' => 46,
        ]);

        book_genre::create([
            'name' => "Genres & Styles",
            'book_category_id' => 47,
        ]);
        book_genre::create([
            'name' => "Individual Composer & Musician",
            'book_category_id' => 47,
        ]);
        book_genre::create([
            'name' => "General",
            'book_category_id' => 47,
        ]);


        book_genre::create([
            'name' => "Dogs",
            'book_category_id' => 48,
        ]);
        book_genre::create([
            'name' => "Reference",
            'book_category_id' => 48,
        ]);

        book_genre::create([
            'name' => "Survival & Emergency Preparedness",
            'book_category_id' => 49,
        ]);

        book_genre::create([
            'name' => "Meditations",
            'book_category_id' => 50,
        ]);

        book_genre::create([
            'name' => "Basketball",
            'book_category_id' => 51,
        ]);
        book_genre::create([
            'name' => "Coaching",
            'book_category_id' => 51,
        ]);
        book_genre::create([
            'name' => "Racket Sports",
            'book_category_id' => 51,
        ]);


        book_genre::create([
            'name' => "Automotive",
            'book_category_id' => 52,
        ]);

        book_genre::create([
            'name' => "Asia",
            'book_category_id' => 53,
        ]);
        book_genre::create([
            'name' => "Special Interest",
            'book_category_id' => 53,
        ]);
        book_genre::create([
            'name' => "Europe",
            'book_category_id' => 53,
        ]);


        book_genre::create([
            'name' => "Business",
            'book_category_id' => 54,
        ]);
        book_genre::create([
            'name' => "Science & Technology",
            'book_category_id' => 54,
        ]);
        book_genre::create([
            'name' => "Social Scientists & Psychologists",
            'book_category_id' => 54,
        ]);

        book_genre::create([
            'name' => "Leadership",
            'book_category_id' => 55,
        ]);
        book_genre::create([
            'name' => "Personal Success",
            'book_category_id' => 55,
        ]);
        book_genre::create([
            'name' => "Entrepreneurship",
            'book_category_id' => 55,
        ]);

        book_genre::create([
            'name' => "Programming",
            'book_category_id' => 56,
        ]);
        book_genre::create([
            'name' => "Artificial Intelligence",
            'book_category_id' => 56,
        ]);
        book_genre::create([
            'name' => "Internet",
            'book_category_id' => 56,
        ]);


        book_genre::create([
            'name' => "Leadership",
            'book_category_id' => 57,
        ]);
        book_genre::create([
            'name' => "Teaching Methods & Materials",
            'book_category_id' => 57,
        ]);
        book_genre::create([
            'name' => "General",
            'book_category_id' => 57,
        ]);


        book_genre::create([
            'name' => "Japanese",
            'book_category_id' => 58,
        ]);
        book_genre::create([
            'name' => "French",
            'book_category_id' => 58,
        ]);
        book_genre::create([
            'name' => "Chinese",
            'book_category_id' => 58,
        ]);

        book_genre::create([
            'name' => "History",
            'book_category_id' => 59,
        ]);

        book_genre::create([
            'name' => "Grammar & Punctuation",
            'book_category_id' => 60,
        ]);
        book_genre::create([
            'name' => "Linguistics",
            'book_category_id' => 60,
        ]);
        book_genre::create([
            'name' => "Writing",
            'book_category_id' => 60,
        ]);

        book_genre::create([
            'name' => "General",
            'book_category_id' => 61,
        ]);
        book_genre::create([
            'name' => "Criminal Law",
            'book_category_id' => 61,
        ]);

        book_genre::create([
            'name' => "General",
            'book_category_id' => 62,
        ]);
        book_genre::create([
            'name' => "Algebra",
            'book_category_id' => 62,
        ]);

        book_genre::create([
            'name' => "History & Philosophy",
            'book_category_id' => 62,
        ]);



        book_genre::create([
            'name' => "Epidemiology",
            'book_category_id' => 63,
        ]);
        book_genre::create([
            'name' => "General",
            'book_category_id' => 63,
        ]);
        book_genre::create([
            'name' => "History",
            'book_category_id' => 63,
        ]);

        book_genre::create([
            'name' => "Environmental Conservation & Protection",
            'book_category_id' => 64,
        ]);
        book_genre::create([
            'name' => "Animals",
            'book_category_id' => 64,
        ]);
        book_genre::create([
            'name' => "General",
            'book_category_id' => 64,
        ]);


        book_genre::create([
            'name' => "General",
            'book_category_id' => 65,
        ]);
        book_genre::create([
            'name' => "Cognitive Psychology & Cognition",
            'book_category_id' => 65,
        ]);
        book_genre::create([
            'name' => "Social Psychology",
            'book_category_id' => 65,
        ]);

        book_genre::create([
            'name' => "Dictionaries",
            'book_category_id' => 66,
        ]);
        book_genre::create([
            'name' => "Curiosities & Wonders",
            'book_category_id' => 66,
        ]);
        book_genre::create([
            'name' => "Questions & Answers",
            'book_category_id' => 66,
        ]);


        book_genre::create([
            'name' => "Love & Romance",
            'book_category_id' => 67,
        ]);
        book_genre::create([
            'name' => "Dating",
            'book_category_id' => 67,
        ]);
        book_genre::create([
            'name' => "Friendship",
            'book_category_id' => 67,
        ]);

        book_genre::create([
            'name' => "Life Sciences",
            'book_category_id' => 68,
        ]);
        book_genre::create([
            'name' => "Space Science",
            'book_category_id' => 68,
        ]);
        book_genre::create([
            'name' => "Global Warming & Climate Change",
            'book_category_id' => 68,
        ]);

        book_genre::create([
            'name' => "Personal Growth",
            'book_category_id' => 69,
        ]);
        book_genre::create([
            'name' => "Motivational & Inspirational",
            'book_category_id' => 69,
        ]);
        book_genre::create([
            'name' => "Creativity",
            'book_category_id' => 69,
        ]);

        book_genre::create([
            'name' => "Sociology",
            'book_category_id' => 70,
        ]);
        book_genre::create([
            'name' => "Popular Culture",
            'book_category_id' => 70,
        ]);
        book_genre::create([
            'name' => "Future Studies",
            'book_category_id' => 70,
        ]);

        book_genre::create([
            'name' => "Advanced Placement",
            'book_category_id' => 71,
        ]);
        book_genre::create([
            'name' => "SAT",
            'book_category_id' => 71,
        ]);
        book_genre::create([
            'name' => "Study Guides",
            'book_category_id' => 71,
        ]);

        book_genre::create([
            'name' => "Social Aspects",
            'book_category_id' => 72,
        ]);
        book_genre::create([
            'name' => "Reference",
            'book_category_id' => 72,
        ]);
        book_genre::create([
            'name' => "Inventions",
            'book_category_id' => 72,
        ]);


        book_genre::create([
            'name' => "Drawing Pencil",
            'book_category_id' => 73,
        ]);
        book_genre::create([
            'name' => "Drawing Pen",
            'book_category_id' => 73,
        ]);
        book_genre::create([
            'name' => "Accessories",
            'book_category_id' => 73,
        ]);

        book_genre::create([
            'name' => "Others",
            'book_category_id' => 74,
        ]);

        book_genre::create([
            'name' => "Brushes",
            'book_category_id' => 75,
        ]);
        book_genre::create([
            'name' => "Others",
            'book_category_id' => 75,
        ]);
        book_genre::create([
            'name' => "Acrylic",
            'book_category_id' => 75,
        ]);

        book_genre::create([
            'name' => "Drawing Paper",
            'book_category_id' => 76,
        ]);
        book_genre::create([
            'name' => "Painting Paper",
            'book_category_id' => 76,
        ]);


        book_genre::create([
            'name' => "Wall Calendar",
            'book_category_id' => 77,
        ]);
        book_genre::create([
            'name' => "Others",
            'book_category_id' => 78,
        ]);
        book_genre::create([
            'name' => "18 Months",
            'book_category_id' => 79,
        ]);

        book_genre::create([
            'name' => "Gift wrapper",
            'book_category_id' => 80,
        ]);
        book_genre::create([
            'name' => "Note cards",
            'book_category_id' => 81,
        ]);
        book_genre::create([
            'name' => "Postcard",
            'book_category_id' => 82,
        ]);
        book_genre::create([
            'name' => "Stationery",
            'book_category_id' => 83,
        ]);

        book_genre::create([
            'name' => "Demon Slayer",
            'book_category_id' => 84,
        ]);
        book_genre::create([
            'name' => "Disney",
            'book_category_id' => 85,
        ]);
        book_genre::create([
            'name' => "Kakao Friends",
            'book_category_id' => 86,
        ]);
        book_genre::create([
            'name' => "Marvel",
            'book_category_id' => 87,
        ]);
        book_genre::create([
            'name' => "Moomin",
            'book_category_id' => 88,
        ]);
        book_genre::create([
            'name' => "San-X",
            'book_category_id' => 89,
        ]);
        book_genre::create([
            'name' => "Studio Ghibli",
            'book_category_id' => 90,
        ]);

        book_genre::create([
            'name' => "Bags",
            'book_category_id' => 91,
        ]);
        book_genre::create([
            'name' => "Organizer",
            'book_category_id' => 91,
        ]);
        book_genre::create([
            'name' => "Pouches",
            'book_category_id' => 91,
        ]);


        book_genre::create([
            'name' => "Clothing & Accessories",
            'book_category_id' => 92,
        ]);
        book_genre::create([
            'name' => "Fashion",
            'book_category_id' => 93,
        ]);
        book_genre::create([
            'name' => "Homeware",
            'book_category_id' => 94,
        ]);

        book_genre::create([
            'name' => "Travel Accessories",
            'book_category_id' => 95,
        ]);

        book_genre::create([
            'name' => "Binder",
            'book_category_id' => 96,
        ]);
        book_genre::create([
            'name' => "Refill",
            'book_category_id' => 96,
        ]);

        book_genre::create([
            'name' => "Guided Journals",
            'book_category_id' => 97,
        ]);
        book_genre::create([
            'name' => "Notebooks",
            'book_category_id' => 98,
        ]);


        book_genre::create([
            'name' => "Collectibles",
            'book_category_id' => 99,
        ]);
        book_genre::create([
            'name' => "General",
            'book_category_id' => 100,
        ]);
        book_genre::create([
            'name' => "Key Chains",
            'book_category_id' => 101,
        ]);
        book_genre::create([
            'name' => "Magnets",
            'book_category_id' => 102,
        ]);
        book_genre::create([
            'name' => "Pins",
            'book_category_id' => 103,
        ]);
        book_genre::create([
            'name' => "Posters",
            'book_category_id' => 104,
        ]);
        book_genre::create([
            'name' => "Stickers",
            'book_category_id' => 105,
        ]);
        book_genre::create([
            'name' => "Book Lights",
            'book_category_id' => 106,
        ]);
        book_genre::create([
            'name' => "Bookends",
            'book_category_id' => 107,
        ]);
        book_genre::create([
            'name' => "Bookmarks",
            'book_category_id' => 108,
        ]);
        book_genre::create([
            'name' => "Bookstands",
            'book_category_id' => 109,
        ]);
        book_genre::create([
            'name' => "Others",
            'book_category_id' => 110,
        ]);
        book_genre::create([
            'name' => "Electronics & Accessories",
            'book_category_id' => 111,
        ]);
        book_genre::create([
            'name' => "Filing & Storage",
            'book_category_id' => 112,
        ]);
        book_genre::create([
            'name' => "Office Supplies & Equipment",
            'book_category_id' => 113,
        ]);
        book_genre::create([
            'name' => "Others",
            'book_category_id' => 114,
        ]);
        book_genre::create([
            'name' => "Paper",
            'book_category_id' => 115,
        ]);
        book_genre::create([
            'name' => "Writing Instruments",
            'book_category_id' => 116,
        ]);
        book_genre::create([
            'name' => "Board Games",
            'book_category_id' => 117,
        ]);
        book_genre::create([
            'name' => "Card Games",
            'book_category_id' => 118,
        ]);
        book_genre::create([
            'name' => "Educational",
            'book_category_id' => 119,
        ]);
        book_genre::create([
            'name' => "General Toys",
            'book_category_id' => 120,
        ]);
        book_genre::create([
            'name' => "Others",
            'book_category_id' => 121,
        ]);
        book_genre::create([
            'name' => "Adult",
            'book_category_id' => 122,
        ]);
        book_genre::create([
            'name' => "Children",
            'book_category_id' => 122,
        ]);

        book_genre::create([
            'name' => "Fave Reads Under Php500",
            'book_category_id' => 123,
        ]);
        book_genre::create([
            'name' => "From Page to Screen",
            'book_category_id' => 124,
        ]);
        book_genre::create([
            'name' => "Fully Booked Picks",
            'book_category_id' => 125,
        ]);
        book_genre::create([
            'name' => "Great Reads in Small Packages",
            'book_category_id' => 126,
        ]);
        book_genre::create([
            'name' => "Now in Paperback",
            'book_category_id' => 127,
        ]);
        book_genre::create([
            'name' => "Reading Allies",
            'book_category_id' => 128,
        ]);
        book_genre::create([
            'name' => "Staff Picks",
            'book_category_id' => 129,
        ]);
        book_genre::create([
            'name' => "Autobiography",
            'book_category_id' => 130,
        ]);
        book_genre::create([
            'name' => "Philippine Books",
            'book_category_id' => 131,
        ]);
        book_genre::create([
            'name' => "Understand yourself",
            'book_category_id' => 132,
        ]);
        book_genre::create([
            'name' => "Award Winners",
            'book_category_id' => 133,
        ]);
        book_genre::create([
            'name' => "Discover Filipino Reads",
            'book_category_id' => 134,
        ]);
        book_genre::create([
            'name' => "Comics & Graphic Novels",
            'book_category_id' => 135,
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_genres');
    }
};
