@extends('../admin-rework/rework')

@section('content')
    <div class="flex gap-5 h-screen">
        <div class="flex flex-col">
            <div class="font-bold text-lg">
                Product Resource Management
            </div>
            <div class="form">
                <form action="{{ route("admin-rework.prm.predict") }}" method="POST">
                    @csrf
                    <div class="flex flex-col gap-5">
                        <x-input name="start" type="number" title="Start Date"></x-input>
                            <x-input name="end" type="number" title="End Date"></x-input>
                        <x-input name="data" type="text" title="Data"></x-input>
                        <x-button primary={{false}} type="submit">
                            <x-slot name="text">
                                Predict
                            </x-slot>
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex-2 w-full">

            {!! $chart->container() !!}

            <script src="{!! $chart->cdn() !!}"></script>

            {!! $chart->script() !!}
        </div>
    </div>
@endsection
