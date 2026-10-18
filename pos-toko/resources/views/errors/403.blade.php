<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Akses Ditolak</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <x-card>
                <h3 class="text-lg font-semibold mb-2">403 — Anda tidak memiliki akses ke halaman ini.</h3>
                <p class="text-gray-600">{{ $message ?? 'Akses Ditolak! Anda tidak memiliki izin untuk membuka halaman ini.' }}</p>
                <a href="{{ route('dashboard') }}" class="inline-block mt-4 text-indigo-600 hover:text-indigo-800">
                    Kembali ke Dashboard
                </a>
            </x-card>
        </div>
    </div>
</x-app-layout>
