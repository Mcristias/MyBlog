<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-guest-layout>
        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-1 lg:px-1">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-col items-center min-h-screen pt-5 sm:pt-0">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </x-guest-layout>
</html>
