<x-layout class="!w-full lg:!w-4/5 xl:!w-3/5">
    <ol class="relative border-s border-slate-400 mt-10 md:mt-0">
        @foreach($experiences as $experience)
        <li class=" @if (!$loop->last) {{ 'mb-10' }} @endif ms-4">
            <div class="absolute w-3 h-3 bg-slate-400 rounded-full mt-1.5 -start-1.5 border border-slate-100">
            </div>
            <time class="mb-1 text-sm font-normal leading-none text-slate-400">{{ $experience['time']
                }}</time>
            <h3 class="text-lg font-semibold text-slate-100 mb-2">{{ $experience['title'] }}</h3>
            <p class="mb-4 text-base font-normal text-slate-300">{{ $experience['description'] }}</p>
            <a href="{{ $experience['link'] }}" target="_blank"
                class="transition-all inline-flex items-center px-4 py-2 text-sm font-medium text-slate-200 bg-transparent border border-slate-200 rounded-lg hover:bg-gray-100 hover:text-slate-800 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700">Learn
                more <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg></a>
        </li>
        @endforeach
    </ol>
</x-layout>