@extends('layouts.app')

@section('content')
@section('title', '| ' . $criteria->book_type->name . '/' . $criteria->name)
@livewire('criteria-show', ['id' => $criteria->id])
@endsection
