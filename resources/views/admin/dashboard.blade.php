@extends('layouts.admin')

@section('content')

<x-hero-banner />

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mt-6">
    <x-stat-card title="Stories" :value="$storyCount">
        <x-heroicon-o-book-open class="w-7 h-7" />
    </x-stat-card>

    <x-stat-card title="Photos" :value="$photoCount">
        <x-heroicon-o-photo class="w-7 h-7" />
    </x-stat-card>

    <x-stat-card title="Bookings" :value="$bookingCount">
        <x-heroicon-o-calendar-days class="w-7 h-7" />
    </x-stat-card>

    <x-stat-card title="Messages" :value="$messageCount">
        <x-heroicon-o-chat-bubble-left-right class="w-7 h-7" />
    </x-stat-card>
</div>
<x-quick-actions />
@endsection