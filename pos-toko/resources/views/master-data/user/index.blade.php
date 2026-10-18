<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Pengguna</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card>
                <h3 class="text-lg font-semibold mb-4">Daftar Akun Kasir & Admin</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr class="text-left text-gray-500">
                                <th class="py-2 pr-4">Nama</th>
                                <th class="py-2 pr-4">Email</th>
                                <th class="py-2">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="border-t">
                                    <td class="py-2 pr-4">{{ $user->name }}</td>
                                    <td class="py-2 pr-4">{{ $user->email }}</td>
                                    <td class="py-2">{{ $user->role }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $users->links() }}
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>
