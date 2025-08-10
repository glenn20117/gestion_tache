    @if(isset($langue))
    @if($langue == 'fr')
        @include('fr.footer')
    @elseif($langue == 'pl')
        @include('pl.footer')
    @else
        @include('en.footer')
    @endif
@else
    {{-- Si $langue n'est pas défini, on met par défaut le footer anglais --}}
    @include('en.footer')
@endif
