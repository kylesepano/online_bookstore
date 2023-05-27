@extends('layouts.app')

@section('content')
@section('title', '| ' . $category->book_criteria->book_type->name . '/' . $category->book_criteria->name . '/' .
    $category->name)
    @livewire('category-show', ['id' => $category->id])
@endsection
