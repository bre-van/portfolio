@props(['jobPositions', 'educations'])

<x-section anchor="career" title="Carrière">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row">
        <section class="mb-10">
            <header class="my-3">
                <h2 class="text-4xl/14 font-bold text-gray-100">
                    Jobs
                </h2>
                <p class="mt-2 text-neutral-400">
                    Mijn jobs en verantwoordelijkheden doorheen de jaren.
                </p>
            </header>
            <div class="flex-1 lg:pr-20 items-end">
                <div>
                    <ol class="relative border-s border-neutral-800">
                        @foreach ($jobPositions as $job)
                            <li class="ms-6 py-8">
                                <x-jobPositions.job :job="$job"/>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </section>

        <section>
            <header class="mb-8">
                <h2 class="text-4xl/14 font-bold text-gray-100">
                    Opleidingen
                </h2>
                <p class="mt-2 text-neutral-400">Studies, cursussen en relevante trainingen.</p>
            </header>

            <div class="space-y-4">
                @foreach ($educations as $edu)
                    <div
                        class="rounded-2xl border border-neutral-800 bg-neutral-900 p-5 transition hover:border-neutral-700">
                        <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">
                            <div>
                                <h3 class="text-base font-semibold text-gray-100">
                                    {{ $edu->degree }}
                                </h3>
                                <h4 class="text-neutral-400 font-normal">
                                    {{ $edu->institution }}
                                </h4>
                            </div>

                            <x-date-pill>
                                {{ $edu->startDate() }} — {{ $edu->endDate() }}
                            </x-date-pill>
                        </div>

                        @if(!empty($edu->description))
                            <p class="mt-3 text-sm text-neutral-300 leading-relaxed">
                                {{ $edu->description }}
                            </p>
                        @endif
                    </div>
                @endforeach
            </div>
        </section>
    </div>

</x-section>
