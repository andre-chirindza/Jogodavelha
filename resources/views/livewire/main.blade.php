<div>
    <section class="row mx-auto pt-50">
        <p>{{$status['player']}}</p>
        @if ($status['success'])
            <div @if ($status['status'] == 'Vencedor') class="alert alert-success" @else class="alert alert-primary"@endif>
                <p>{{$status['status']}}</p>
                @if ($status['status'] == "Vencedor")
                    <p>O jogador {{$status['player']}}</p>
                @endif
            </div>

        @else
            @foreach ($board as $index => $tab)
                @foreach ($tab as $i => $t)
                <div class="col-md-3 col-lg-3 col-xl-3 col-sm-3 square align-content-center m-1" wire:click="state_change({{$index}},{{$i}})">
                    <span class="mx-auto"><i class="{{$icon[$index][$i]}}"></i></span>
                </div>
                {{-- <x-square class="mx-auto" wire:click="status_change({{$i}})" m="{{$status}}"></x-square> --}}
                @endforeach
            @endforeach
        @endif
        {{-- @for ($0; $i<6; $i++)
        @endfor --}}
    </section>
</div>
