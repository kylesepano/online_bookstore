@extends('layouts.app')

@section('content')
@section('title', '| ' . $type->name)
@livewire('type-show', ['id' => $type->id])
@endsection
