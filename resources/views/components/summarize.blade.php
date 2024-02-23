@props([
    'sum' => null,
    'labelSum' => null,
    'count' => null,
    'labelCount' => null,
    'min' => null,
    'labelMin' => null,
    'max' => null,
    'labelMax' => null,
    'avg' => null,
    'labelAvg' => null,
    'custom' => null,
    'labelCustom' => null
])

<div class="text-xs">
    @if ($sum !== null)
        <span>@if($labelSum){!! $labelSum !!}:@endif {{ $sum }}</span>
        <br>
    @endif

    @if ($count !== null)
        <span>@if($labelCount){!! $labelCount !!}:@endif {{ $count }}</span>
        <br>
    @endif

    @if ($min !== null)
        <span>@if($labelMin){!! $labelMin !!}:@endif {{ $min }}</span>
        <br>
    @endif

    @if ($max !== null)
        <span>@if($labelMax){!! $labelMax !!}:@endif {{ $max }}</span>
        <br>
    @endif

    @if ($avg !== null)
        <span>@if($labelAvg){!! $labelAvg !!}:@endif {{ $avg }}</span>
        <br>
    @endif

    @if ($custom !== null)
        <span>@if($labelCustom){!! $labelCustom !!}:@endif {{ $custom }}</span>
        <br>
    @endif
</div>
