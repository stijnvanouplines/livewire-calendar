<div class="select-none">
    <div class="flex justify-between items-center mb-8">
        <button
            type="button"
            wire:click="setByMonth({{ $currentMonth - 1 }})"
            class="
                flex items-center mr-3 focus:outline-none
                @if ($this->showPreviousArrow()) text-gray-800 cursor-pointer @endif
                @if (!$this->showPreviousArrow()) text-gray-400 cursor-default @endif
            "
            @if (!$this->showPreviousArrow()) disabled @endif
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-8 w-8">
                <path class="heroicon-ui" d="M14.7 15.3a1 1 0 0 1-1.4 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 0 1 1.4 1.4L11.42 12l3.3 3.3z"/>
            </svg>
        </button>

        <div class="text-lg font-bold uppercase text-gray-700">
            @if ($currentMonth === 1) January {{ $currentYear }} @endif
            @if ($currentMonth === 2) February {{ $currentYear }} @endif
            @if ($currentMonth === 3) March {{ $currentYear }} @endif
            @if ($currentMonth === 4) April {{ $currentYear }} @endif
            @if ($currentMonth === 5) May {{ $currentYear }} @endif
            @if ($currentMonth === 6) June {{ $currentYear }} @endif
            @if ($currentMonth === 7) July {{ $currentYear }} @endif
            @if ($currentMonth === 8) August {{ $currentYear }} @endif
            @if ($currentMonth === 9) September {{ $currentYear }} @endif
            @if ($currentMonth === 10) October {{ $currentYear }} @endif
            @if ($currentMonth === 11) November {{ $currentYear }} @endif
            @if ($currentMonth === 12) December {{ $currentYear }} @endif
        </div>

        <button
            type="button"
            wire:click="setByMonth({{ $currentMonth + 1 }})"
            class="
                flex items-center ml-3 focus:outline-none
                @if ($this->showNextArrow()) text-gray-800 cursor-pointer @endif
                @if (!$this->showNextArrow()) text-gray-400 cursor-default  @endif
            "
            @if (!$this->showNextArrow()) disabled @endif
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-8 w-8">
                <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
            </svg>
        </button>
    </div>

    <div class="flex flex-no-wrap justify-between mb-2">
        <div class="w-1/7 font-medium lowercase text-center text-gray-500">mon</div>
        <div class="w-1/7 font-medium lowercase text-center text-gray-500">tue</div>
        <div class="w-1/7 font-medium lowercase text-center text-gray-500">wed</div>
        <div class="w-1/7 font-medium lowercase text-center text-gray-500">thu</div>
        <div class="w-1/7 font-medium lowercase text-center text-gray-500">fri</div>
        <div class="w-1/7 font-medium lowercase text-center text-gray-500">sat</div>
        <div class="w-1/7 font-medium lowercase text-center text-gray-500">sun</div>
    </div>

    @foreach ($calendar as $days)
        <div class="flex flex-no-wrap justify-between">

            @foreach ($days as $day)
                <div class="flex justify-center w-1/7 py-1">
                    <button
                        type="button"
                        wire:click="setByDay({{ $day['day'] }})"
                        class="
                            flex items-center justify-center m-auto w-8 md:w-12 h-8 md:h-12  p-1 font-medium border border-white rounded-full focus:outline-none
                            @if ($day['current'] && !$day['selected']) border-gray-400 hover:border-gray-400 @endif
                            @if ($day['disabled']) text-gray-400 hover:border-white cursor-default @endif
                            @if (!$day['disabled']) hover:border-blue-700 cursor-pointer @endif
                            @if ($day['selected']) text-white border-blue-700 bg-blue-700 @endif
                        "
                        @if ($day['disabled']) disabled @endif
                    >
                        @if (is_null($day['day']))
                            &nbsp;
                        @else
                            {{ $day['day'] }}
                        @endif
                    </button>
                </div>
            @endforeach

        </div>
    @endforeach
</div>