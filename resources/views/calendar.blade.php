@extends('layouts/master')

@section('title', 'Calendar')

@section('content')

    <div class="flex flex-wrap pt-8">
        <div class="w-full md:w-1/3 mx-auto p-3">

            @livewire('calendar', [
                'minDate' => Carbon\Carbon::now()->subMonth(2)->toDateString(),
                'maxDate' => Carbon\Carbon::now()->addMonth(2)->toDateString(),
            ])

        </div>
    </div>

@endsection