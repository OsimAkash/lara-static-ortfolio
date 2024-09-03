<x-layout class="!w-full">
    <div class="flex flex-col justify-center h-full text-white">
        <h4 class="bold font-semibold text-3xl mb-5">{{ $homeContent['greetings'] }} </h4>
        <h2 class="font-bold text-6xl uppercase tracking-widest mb-8">{{ $homeContent['author'] }}</h2>
        <h3 class="font-medium text-4xl mb-8 leading-normal">{!! $homeContent['description'] !!}</h3>
        <a href="/projects"
            class="uppercase text-lg tracking-wider bg-transparent text-white/80 hover:bg-white/80 px-8 py-3 border border-white/60 self-start hover:text-slate-800 transition-all">see
            my works</a>
            
    </div>
    
</x-layout>