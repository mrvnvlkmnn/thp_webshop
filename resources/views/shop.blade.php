@extends('layout')
@section('content')
    @if($livewireInput == "index")
        <livewire:shop-index />
    @elseif($livewireInput == "overview")
        <livewire:product-overview :itemID="$itemID">
    @endif
@endsection
