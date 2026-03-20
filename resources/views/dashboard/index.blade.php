@extends('layouts.app')

@section('title', 'Finalgo Dashboard')

@section('content')

<div class="relative flex min-h-screen flex-col">
    
    <main class="flex-1 w-full max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8 flex flex-col gap-6 sm:gap-8">

        @include('dashboard.components.period-filter')
        
        @include('dashboard.components.alert-strip')

        @include('dashboard.components.summary-cards')

        @include('dashboard.components.category-overview')

        @include('dashboard.components.transactions-table')

    </main>

    @include('dashboard.components.floating-action-button')

</div>

@endsection