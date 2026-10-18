<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <x-card>
                <h3 class="text-lg font-semibold mb-2">Ringkasan Hari Ini</h3>
                <p class="text-gray-600">Selamat datang, {{ auth()->user()->name }}.</p>
            </x-card>

            <x-card>
                <h3 class="text-lg font-semibold mb-2">Contoh Badge</h3>
                <div class="flex flex-wrap gap-2">
                    @isset($product)
                        <x-badge :stock="$product->stock" />
                        <x-badge :stock="$product->stock" class="shadow-sm uppercase">
                            Stok Khusus: {{ $product->stock }}
                        </x-badge>
                    @else
                        <x-badge :stock="25" />
                    @endisset
                    <x-badge :stock="0" />
                    <x-badge :stock="5" />
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>
