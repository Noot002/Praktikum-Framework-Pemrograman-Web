@props([
    'stock' => null,
    'status' => null
])

@php
    // Menentukan label teks dan kelas warna Tailwind CSS berdasarkan logika stok
    if ($stock !== null) {
        if ($stock <= 0) {
            $label = 'Habis';
            $colorClasses = 'bg-red-100 text-red-800 border-red-200';
        } elseif ($stock < 10) {
            $label = 'Menipis';
            $colorClasses = 'bg-yellow-100 text-yellow-800 border-yellow-200';
        } else {
            $label = 'Aman';
            $colorClasses = 'bg-green-100 text-green-800 border-green-200';
        }
    } else {
        $statusLower = strtolower($status ?? 'aman');
        if (in_array($statusLower, ['habis', 'danger', 'out_of_stock'])) {
            $label = 'Habis';
            $colorClasses = 'bg-red-100 text-red-800 border-red-200';
        } elseif (in_array($statusLower, ['menipis', 'warning', 'low_stock'])) {
            $label = 'Menipis';
            $colorClasses = 'bg-yellow-100 text-yellow-800 border-yellow-200';
        } else {
            $label = 'Aman';
            $colorClasses = 'bg-green-100 text-green-800 border-green-200';
        }
    }
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold border {$colorClasses}"]) }}>
    {{ $slot->isEmpty() ? $label : $slot }}
</span>
