<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kategori</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if (session('success'))
                <div class="p-3 bg-green-100 text-green-700 rounded-md text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <x-card>
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold">Daftar Kategori</h3>
                    <a href="{{ route('categories.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm">
                        Tambah Kategori
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr class="text-left text-gray-500">
                                <th class="py-2 pr-4">Nama</th>
                                <th class="py-2">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                                <tr class="border-t">
                                    <td class="py-2 pr-4">{{ $category->name }}</td>
                                    <td class="py-2">{{ $category->description }}</td>
                                </tr>
                            @empty
                                <tr class="border-t">
                                    <td colspan="2" class="py-4 text-center text-gray-500">Belum ada kategori.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $categories->links() }}
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>
