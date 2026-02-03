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
                <span class="section-header text-5xl opacity-10">01</span>
                <p class="mt-8 font-sans text-xs uppercase leading-relaxed tracking-widest text-white/40">
                    A curated arsenal of technologies. From core languages to modern frameworks, I leverage the right tools
                    to architect robust, scalable, and elegant digital solutions.
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
                                    @foreach ($skills->get('tool', collect()) as $s)
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
                <span class="section-header text-5xl opacity-10">02</span>
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
                                Software is more than just code; it's about solving real-world problems.
                                I build applications that not only function flawlessly but also deliver tangible value and impact, ensuring a seamless user experience.
                            </p>
                            <p class="text-lg opacity-60">
                                My approach combines technical excellence with a deep understanding of user needs,
                                resulting in products that are both powerful and intuitive.
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
        <h2 class="content__title" data-splitting data-effect28>
            <a cursor-class="arrow" href="mailto:ottomandora@gmail.com" class="font-12 flex items-center justify-center gap-4 font-medium !text-[#ddc4a4] transition-colors duration-300 hover:!text-white">
                <span>Contact me</span>
                <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </a>
        </h2>
    </div>

    <div class="content">
        <p>
            Whether you have a question, a project in mind, or just want to connect,
            I'm here to listen. Let's turn your digital aspirations into
            tangible, high-performance realities.
        </p>
        <div class="mt-8 flex items-center justify-center gap-8">
            <a href="https://t.me/bepbep" cursor-class="arrow" target="_blank" class="group text-white/40 transition-colors duration-300 hover:text-white">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 11.944 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                </svg>
            </a>
            <a href="https://www.linkedin.com/in/ottomandora" target="_blank" class="group text-white/40 transition-colors duration-300 hover:text-white">
                <svg class="h-6 w-6 fill-current" cursor-class="arrow" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                </svg>
            </a>
            <a href="https://github.com/ottoxan" cursor-class="arrow" target="_blank" class="group text-white/40 transition-colors duration-300 hover:text-white">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                </svg>
            </a>
            <a href="https://www.instagram.com/sscev" cursor-class="arrow" target="_blank" class="group text-white/40 transition-colors duration-300 hover:text-white">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" id="meteor-icon-kit__solid-instagram" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.9962 0.0078125C8.73824 0.0078125 8.32971 0.021622 7.05019 0.080003C5.77333 0.138241 4.90129 0.341051 4.13824 0.637622C3.34938 0.944146 2.68038 1.35434 2.01343 2.02124C1.34652 2.68819 0.936333 3.35719 0.629809 4.14605C0.333238 4.9091 0.130429 5.78115 0.0721905 7.058C0.0138095 8.33753 0 8.74605 0 12.0041C0 15.262 0.0138095 15.6705 0.0721905 16.9501C0.130429 18.2269 0.333238 19.099 0.629809 19.862C0.936333 20.6509 1.34652 21.3199 2.01343 21.9868C2.68038 22.6537 3.34938 23.0639 4.13824 23.3705C4.90129 23.667 5.77333 23.8698 7.05019 23.9281C8.32971 23.9864 8.73824 24.0002 11.9962 24.0002C15.2542 24.0002 15.6627 23.9864 16.9422 23.9281C18.2191 23.8698 19.0911 23.667 19.8542 23.3705C20.643 23.0639 21.312 22.6537 21.979 21.9868C22.6459 21.3199 23.0561 20.6509 23.3627 19.862C23.6592 19.099 23.862 18.2269 23.9202 16.9501C23.9786 15.6705 23.9924 15.262 23.9924 12.0041C23.9924 8.74605 23.9786 8.33753 23.9202 7.058C23.862 5.78115 23.6592 4.9091 23.3627 4.14605C23.0561 3.35719 22.6459 2.68819 21.979 2.02124C21.312 1.35434 20.643 0.944146 19.8542 0.637622C19.0911 0.341051 18.2191 0.138241 16.9422 0.080003C15.6627 0.021622 15.2542 0.0078125 11.9962 0.0078125ZM7.99748 12.0041C7.99748 14.2125 9.78776 16.0028 11.9962 16.0028C14.2047 16.0028 15.995 14.2125 15.995 12.0041C15.995 9.79557 14.2047 8.00529 11.9962 8.00529C9.78776 8.00529 7.99748 9.79557 7.99748 12.0041ZM5.836 12.0041C5.836 8.60181 8.594 5.84381 11.9962 5.84381C15.3984 5.84381 18.1564 8.60181 18.1564 12.0041C18.1564 15.4062 15.3984 18.1642 11.9962 18.1642C8.594 18.1642 5.836 15.4062 5.836 12.0041ZM18.3998 7.03996C19.1949 7.03996 19.8394 6.39548 19.8394 5.60043C19.8394 4.80538 19.1949 4.16086 18.3998 4.16086C17.6048 4.16086 16.9603 4.80538 16.9603 5.60043C16.9603 6.39548 17.6048 7.03996 18.3998 7.03996Z"
                            fill="currentColor"></path>
                    </g>
                </svg>
            </a>
        </div>
    </div>
</main>
