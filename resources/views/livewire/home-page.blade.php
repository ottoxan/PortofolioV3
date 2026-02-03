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

    <div class="content !pt-[400px]">
        <h2 class="content__title" data-splitting data-effect29><span class="font-upper">Discipline</span><span class="font-upper">above</span><span class="font-upper">Motivation</span><span class="font-upper">Always</span></h2>
    </div>

    <div class="content content--full !pt-[400px]">
        <h2 class="content__title" data-splitting data-effect28><a cursor-class="arrow" href="mailto:ottomandora@gmail.com" class="font-12 font-medium">Contact me</a></h2>
    </div>

    <div class="content">
        <p>
            Whether you have a question, a project in mind, or just want to connect,
            I'm here to listen. Let's turn your digital aspirations into
            tangible, high-performance realities.
        </p>
        <div class="mt-8 flex items-center justify-center gap-8">
            <a href="https://t.me/ottomandora" cursor-class="arrow" target="_blank" class="group text-white/40 transition-colors duration-300 hover:text-white">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 11.944 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                </svg>
            </a>
            <a href="https://www.linkedin.com/in/ottomandora" target="_blank" class="group text-white/40 transition-colors duration-300 hover:text-white">
                <svg class="h-6 w-6 fill-current" cursor-class="arrow" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                </svg>
            </a>
            <a href="https://github.com/ottomandora" cursor-class="arrow" target="_blank" class="group text-white/40 transition-colors duration-300 hover:text-white">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                </svg>
            </a>
            <a href="https://www.instagram.com/ottomandora" cursor-class="arrow" target="_blank" class="group text-white/40 transition-colors duration-300 hover:text-white">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
            </a>
        </div>
    </div>
</main>
