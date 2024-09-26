@php
        $array = [
                [
                    'number' => 23,
                    'desc' => "Meningkatkan efisiensi proses belajar.",
                    'color' => "#FF5733"
                ],
                [
                    'number' => 45,
                    'desc' => "Memperluas jaringan alumni.",
                    'color' => "#33FF57"
                ],
                [
                    'number' => 67,
                    'desc' => "Menyediakan sumber daya tambahan.",
                    'color' => "#3357FF"
                ],
                [
                    'number' => 12,
                    'desc' => "Menumbuhkan rasa solidaritas.",
                    'color' => "#F1C40F"
                ],
                [
                    'number' => 88,
                    'desc' => "Meningkatkan peluang karir.",
                    'color' => "#8E44AD"
                ],
                [
                    'number' => 56,
                    'desc' => "Mengembangkan keterampilan baru.",
                    'color' => "#E67E22"
                ],
            ];
@endphp
<div class="flex flex-wrap mt-4 justify-center">
    @foreach ($array as $item)
    <div class="w-[4/5] md:w-32 mx-2 mb-4 border-b-4 pb-4 text-center" style="border-color: {{ $item['color'] }};">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">
            {{ $item['number'] }}%<span class="text-lg text-gray-600"> persen</span>
        </h2>
        <p class="text-gray-700 text-xs max-w-xs mx-auto">{{ $item['desc'] }}</p>
    </div>
    @endforeach
</div>

</div>
       