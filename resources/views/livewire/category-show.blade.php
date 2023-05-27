<div>
    <div class="container">
        <p class="text-dark"><a href="{{ route('home') }}">Home</a> /<a
                href="{{ route('type', $category->book_criteria->book_type->name) }}">
                {{ $category->book_criteria->book_type->name }}</a> /<a
                href="{{ route('criteria', ['type' => $category->book_criteria->book_type->name, 'criteria' => $category->book_criteria->name]) }}">
                {{ $category->book_criteria->name }}</a> / {{ $category->name }}</p>

    </div>

</div>
