@extends('layouts.app')

@props([
    'title' => __('Hata Sayfası'),
    'desc' => __('Hava verileri alınırken bir hata oluştu'),
])

@push('styles')
    {{-- Custom CSS --}}
@endpush

@section('content')
    <h1>{{ __('Hava verileri alınırken bir hata oluştu') }}:</h1>
    <p>{{ $error }}</p>
@endsection

@push('scripts')
    {{-- Custom JS --}}
@endpush

