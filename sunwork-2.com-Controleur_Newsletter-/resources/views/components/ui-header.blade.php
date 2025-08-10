@if(isset($langue))
    @if($langue == 'fr')
        @include('fr.header')
    @elseif($langue == 'pl')
        @include('pl.header')
    @else
        @include('en.header')
    @endif
@else
    {{-- Si $langue n'est pas défini, on met par défaut le footer anglais --}}
    @include('en.header')
@endif    