@extends('../admin-rework/rework')

@section('content')
    <div class="font-bold text-lg">
        Product Resource Management
    </div>
    <div class="form">
        <form action="{{ route("admin-rework.prm.predict") }}" method="POST">
            @csrf
            <div class="flex flex-col gap-5">
                <div class="flex gap-3">
                    <x-input name="start" type="number" title="Start Date"></x-input>
                    <x-input name="end" type="number" title="End Date"></x-input>
                </div>
                <x-input name="data" type="text" title="Data"></x-input>
                <x-button primary={{false}} type="submit">
                    <x-slot name="text">
                        Predict
                    </x-slot>
                </x-button>
            </div>
        </form>
    </div>
    <div class="h-screen">
        <div class="flex flex-col gap-5">

            <div class="w-full flex-1">
                <div class="font-bold text-lg">
                    ARIMA
                </div>
                <div class="data">
                    <div class="start">
                        {{ $arima["start"] ?? "" }}
                    </div>
                    <div class="end">
                        {{ $arima["end"] ?? "" }}
                    </div>
                    <div class="data">
                        @foreach ($arima["predicted"] ?? [] as $item)
                            {{ $item }}
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="flex gap-5 flex-1">
                <div class="flex-1">
                    <div class="font-bold text-lg">
                        SVR
                    </div>
                    <div class="data">
                        <div class="start">
                            {{ $svr["start"] ?? "" }}
                        </div>
                        <div class="end">
                            {{ $svr["end"] ?? "" }}
                        </div>
                        <div class="data">
                            @foreach ($svr["predicted"] ?? [] as $item)
                                {{ $item }}
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="font-bold text-lg">
                        Linear Regression
                    </div>
                    <div class="data">
                        <div class="start">
                            {{ $lr["start"] ?? "" }}
                        </div>
                        <div class="end">
                            {{ $lr["end"] ?? "" }}
                        </div>
                        <div class="data">
                            @foreach ($lr["predicted"] ?? [] as $item)
                                {{ $item }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
