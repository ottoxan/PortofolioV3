<main class="no-scrollbar">
    <div class="intro">
        <h1 class="intro__title">
            <span class="intro__title-pre">Welcome</span>
            <span class="intro__title-sub">To my portofolio<sup><small>2</small></sup></span>
        </h1>
        <span class="intro__info">Please scroll moderately to fully experience the animations.</span>
    </div>
    <div class="content items-center">
        <img cursor-class="arrow" class="w-[30%] rounded-lg" src="{{ asset('images/me.png') }}" alt="me">
    </div>
    <div class="content">
        <h2 class="content__title" data-splitting data-effect20><span class="font-22 font-upper">Developer</span><span class="font-12 font-upper">Life</span></h2>
    </div>
    <div class="content">
        <p>
            A journey of turning <strong>caffeine</strong> into complex systems,
            navigating the delicate balance between "it works on my machine"
            and "why is production on fire?"
        </p>
    </div>
    <div class="grid grid-cols-1 gap-0 p-[var(--page-padding)] lg:grid-cols-12">
        <aside class="hidden border-r border-white/10 py-24 pr-12 lg:col-span-3 lg:block">
            <div class="sticky top-32">
                <span class="section-header text-5xl opacity-10">02</span>
                <p class="mt-8 font-sans text-xs uppercase leading-relaxed tracking-widest text-white/40">
                    I design resilient back-end systems: secure APIs, optimized data layers, and fault-tolerant
                    services that keep applications reliable, performant, and easy to maintain.
                </p>
            </div>
        </aside>
        <div class="lg:col-span-9">
            <article class="py-24 lg:pl-24">
                <div class="grid grid-cols-1 items-start gap-16 md:grid-cols-1">
                    <div class="order-1 grid grid-cols-2 md:order-2">
                        <div class="space-y-12 lg:col-span-7">
                            <div>
                                <h4 class="font-experimental mb-4 border-b border-white/10 pb-2 text-[10px] uppercase tracking-widest opacity-40">Core Languages</h4>
                                <div class="grid grid-cols-2 gap-2 md:grid-cols-3">
                                    @foreach ($skills->get('language', collect()) as $s)
                                        <div class="group border border-white/10 bg-white/5 p-4 transition-colors hover:bg-white/10">
                                            <div class="mb-3 flex items-center justify-between">
                                                <div class="flex items-center gap-3">
                                                    <span class="material-symbols-outlined text-lg text-white/40 transition-colors group-hover:text-white/80">code</span>
                                                    <span class="font-experimental text-[10px] uppercase tracking-widest transition-colors group-hover:text-white/80">{{ $s->skill }}</span>
                                                </div>
                                                <span class="font-experimental text-[10px] text-white/40 transition-colors group-hover:text-white/80">{{ $s->percentage }}%</span>
                                            </div>
                                            <div class="h-[2px] w-full overflow-hidden rounded-full bg-white/5">
                                                <div class="h-full bg-white/40 transition-all duration-500 group-hover:bg-white/80" style="width: {{ $s->percentage }}%"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div>
                                <h4 class="font-experimental mb-4 border-b border-white/10 pb-2 text-[10px] uppercase tracking-widest opacity-40">Frameworks &amp; Libraries</h4>
                                <div class="grid grid-cols-2 gap-2 md:grid-cols-3">
                                    @foreach ($skills->get('framework', collect()) as $s)
                                        <div class="group border border-white/10 bg-white/5 p-4 transition-colors hover:bg-white/10">
                                            <div class="mb-3 flex items-center justify-between">
                                                <div class="flex items-center gap-3">
                                                    <span class="material-symbols-outlined text-lg text-white/40 transition-colors group-hover:text-white/80">vitals</span>
                                                    <span class="font-experimental text-[10px] uppercase tracking-widest transition-colors group-hover:text-white/80">{{ $s->skill }}</span>
                                                </div>
                                                <span class="font-experimental text-[10px] text-white/40 transition-colors group-hover:text-white/80">{{ $s->percentage }}%</span>
                                            </div>
                                            <div class="h-[2px] w-full overflow-hidden rounded-full bg-white/5">
                                                <div class="h-full bg-white/40 transition-all duration-500 group-hover:bg-white/80" style="width: {{ $s->percentage }}%"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div>
                                <h4 class="font-experimental mb-4 border-b border-white/10 pb-2 text-[10px] uppercase tracking-widest opacity-40">Tools &amp; Platforms</h4>
                                <div class="grid grid-cols-2 gap-2 md:grid-cols-3">
                                    @foreach ($skills->get('tools', collect()) as $s)
                                        <div class="group border border-white/10 bg-white/5 p-4 transition-colors hover:bg-white/10">
                                            <div class="mb-3 flex items-center justify-between">
                                                <div class="flex items-center gap-3">
                                                    <span class="material-symbols-outlined text-lg text-white/40 transition-colors group-hover:text-white/80">brush</span>
                                                    <span class="font-experimental text-[10px] uppercase tracking-widest transition-colors group-hover:text-white/80">{{ $s->skill }}</span>
                                                </div>
                                                <span class="font-experimental text-[10px] text-white/40 transition-colors group-hover:text-white/80">{{ $s->percentage }}%</span>
                                            </div>
                                            <div class="h-[2px] w-full overflow-hidden rounded-full bg-white/5">
                                                <div class="h-full bg-white/40 transition-all duration-500 group-hover:bg-white/80" style="width: {{ $s->percentage }}%"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-2 md:order-1">
                        <h2 class="section-header mb-8 text-6xl md:text-8xl">Skills</h2>
                        <div class="narrative-text space-y-6 text-white/80">
                            <p>
                                My expertise is built on a structured architectural foundation,
                                moving from the molecular level of core languages to the sophisticated orchestration of modern
                                frameworks.
                            </p>
                            <p class="text-lg opacity-60">
                                I categorize my technical repertoire into specialized clusters, ensuring that every tool selected serves the greater narrative of the digital environment.
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <aside class="hidden border-b border-r border-t border-white/10 py-24 pr-12 lg:col-span-3 lg:block">
            <div class="sticky top-32">
                <span class="section-header text-5xl opacity-10">01</span>
                <p class="mt-8 font-sans text-xs uppercase leading-relaxed tracking-widest text-white/40">
                    The philosophy remains constant: Every line of code is a brushstroke. Every interface is a
                    gallery space.
                </p>
            </div>
        </aside>
        <div class="lg:col-span-9">
            <article class="border-b border-t border-white/10 py-24 lg:pl-24">
                <div class="grid grid-cols-1 items-start gap-16 md:grid-cols-1">
                    <div class="order-2 md:order-1">
                        <h2 class="section-header mb-8 text-6xl md:text-8xl">Projects</h2>
                        <div class="narrative-text space-y-6 text-white/80">
                            <p>
                                The journey starts with the visible. It's a dialogue between human psychology and
                                technological capability. I approach the front-end not as a layout, but as a
                                narrative flow—where movement, space, and typography guide the user through a
                                curated digital experience.
                            </p>
                            <p class="text-lg opacity-60">
                                I construct environments that breathe. They respond
                                with the grace of a printed magazine yet hold the power of modern software. It is
                                about the tension between the grid and the freedom of high-end aesthetics.
                            </p>
                        </div>
                    </div>
                    <div class="order-1 grid grid-cols-2 gap-5 md:order-2">
                        @foreach ($projects as $p)
                            <a href="{{ $p->link }}" cursor-class="arrow" class="group relative col-span-1 flex aspect-video items-center justify-center overflow-hidden border border-white/10 bg-white/5">
                                <span class="material-symbols-outlined text-[120px] text-white/5">
                                    <img class="h-full w-full object-cover transition-transform duration-1000 group-hover:scale-105" src="{{ strpos($p->image, 'http') === 0 ? $p->image : asset('storage/' . ltrim($p->image, '/')) }}" alt="{{ $p->title }}">
                                </span>
                                <div class="pointer-events-none absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-black/90 to-transparent"></div>
                                <div class="absolute bottom-6 left-6 flex flex-col items-start">
                                    <span class="font-experimental text-[10px] uppercase tracking-widest opacity-40">
                                        {{ is_array($p->code_lang) ? implode(', ', $p->code_lang) : $p->code_lang ?? '' }}
                                    </span>
                                    <span class="narrative-text text-sm">{{ $p->title }}</span>
                                </div>
                                <div class="absolute bottom-6 right-6 flex flex-col items-end">
                                    <span class="border border-white/20 px-3 py-1 text-[10px] uppercase tracking-tighter">
                                        {{ $p->status }}
                                    </span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </article>
        </div>

    </div>
    <div class="content content--full">
        <h2 class="content__title" data-splitting data-effect21><span class="font-20">Beauty</span><span class="font-18">remains</span></h2>
    </div>
    <div class="content">
        <p>The truth is that we are all simply waves in the ocean of existence, arising and falling back into the depths from which we came. And yet, we spend so much of our lives struggling against
            the natural ebb and flow of the universe, trying to hold on to what is fleeting and resist what is inevitable. </p>
    </div>
    <div class="content content--full">
        <h2 class="content__title" data-splitting data-effect23><span class="font-upper font-22">Deeper</span><span class="font-upper font-20">Love</span><span class="font-upper font-18">Light</span>
        </h2>
    </div>
    <div class="content">
        <p>When we let go of our attachment to outcomes, our fear of the unknown, and our need for certainty, we open ourselves up to the infinite possibilities and potentialities of life.</p>
    </div>
    <div class="content content--full">
        <h2 class="content__title" data-splitting data-effect24><span class="font-15 font-upper">Embrace</span></h2>
    </div>
    <div class="content">
        <p>Letting go is not giving up, but rather a courageous act of trust in the universe and in ourselves. So let us embrace the art of letting go, and discover the freedom and joy that lie beyond
            our limited notions of control.</p>
    </div>
    <div class="content">
        <h2 class="content__title content__title--left" data-splitting data-effect25>
            <span class="font-13 font-height-medium font-medium">
                Feel because you have a heart<br>
                And let it guide you through the dark.<br>
                For it's the well of emotions deep,<br>
                That helps you laugh, love, and sleep.<br>
            </span>
        </h2>
    </div>
    <div class="content content--full">
        <h2 class="content__title" data-splitting data-effect26><span class="font-upper font-19">Cosmic</span><span class="font-upper font-23">Symphony</span></h2>
    </div>
    <div class="content">
        <p>Think because you have a mind,
            that makes you unique and one of a kind.
            With it you can learn and grow,
            and see the world from its highest glow.
        </p>
    </div>
    <div class="content">
        <h2 class="content__title" data-splitting data-effect27>
            <span class="font-upper font-19 font-medium">
                Act because you have hands,
                that bring to life your every command.
                With them you can create and build,
                and bring to life what once was stilled.</span>
        </h2>
    </div>
    <div class="content content--full">
        <h2 class="content__title" data-splitting data-effect28><span class="font-12 font-medium">Liberation</span></h2>
    </div>
    <div class="content">
        <p>And when death comes, like the falling night,
            remember the purpose that gave you flight.
            For you were made to make a mark,
            and leave behind a legacy bright and stark.
        </p>
    </div>
    <div class="content">
        <h2 class="content__title" data-splitting data-effect29><span class="font-upper">Discipline</span><span class="font-upper">above</span><span class="font-upper">Motivation</span><span class="font-upper">Always</span></h2>
    </div>
    <div class="content">
        <p>So feel with your heart, think with your mind,
            and act with your hands, one of a kind.
            For you are a gift, full of potential and might,
            a spark of the divine, shining bright.
        </p>
    </div>
</main>
<script src="https://tympanus.net/codrops/adpacks/cda_sponsor.js"></script>
