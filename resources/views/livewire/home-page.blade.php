<main class="no-scrollbar">
    <div wire:ignore>
        <div class="intro">
            <h1 class="intro__title">
                <span class="intro__title-pre">Welcome</span>
                <span class="intro__title-sub">To my portofolio<sup><small>2</small></sup></span>

            </h1>
            <div id="click-prompt" class="pointer-events-none absolute inset-0 z-50 flex items-center justify-center">
                <span class="font-experimental animate-pulse text-xs uppercase tracking-[0.2em] text-white/50 transition-all duration-1000 ease-out">
                    [ Click Anywhere ]
                </span>
            </div>
            <script>
                document.addEventListener('click', function() {
                    var prompt = document.getElementById('click-prompt');
                    if (prompt) {
                        var span = prompt.querySelector('span');
                        // Stop animation and set current state
                        span.classList.remove('animate-pulse');

                        // Force a browser reflow to ensure the transition starts from here
                        void span.offsetWidth;

                        // Start the exit transition
                        span.classList.add('opacity-0', 'scale-[3]', 'blur-sm');

                        setTimeout(() => {
                            prompt.remove();
                        }, 1000);
                    }
                }, {
                    once: true
                });
            </script>
            <span class="intro__info">Please scroll moderately to fully experience the animations.</span>
        </div>
        <div class="content" wire:ignore>
            <h2 class="content__title content__title--left" data-splitting data-effect25>
                <span class="font-13 font-height-medium font-medium">
                    Feel because you have a heart<br>
                    And let it guide you through the dark.<br>
                    For it's the well of emotions deep,<br>
                    That helps you laugh, love, and sleep.<br>
                </span>
            </h2>
        </div>

        <!-- About & Skills Section -->
        <section class="show py-32" id="about" wire:ignore.self>
            <div class="mx-auto max-w-7xl px-8">
                <div class="grid grid-cols-1 items-center gap-20 lg:grid-cols-2">
                    <div cursor-class="arrow" class="order-2 lg:order-1">
                        <div class="group relative">
                            <div class="bg-primary/10 group-hover:bg-primary/20 absolute -inset-4 rounded-xl blur-2xl transition-all duration-700"></div>
                            <img alt="About Adrian" class="relative aspect-[4/5] rounded-xl object-cover grayscale transition-all duration-700 hover:grayscale-0" data-alt="professional portrait of a creative developer in a dark minimalist studio setting with dramatic high-contrast lighting" src="{{ asset('images/me.png') }}" />
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <h2 class="font-headline text-on-surface mb-8 text-4xl font-bold md:text-5xl">Blending code with architectural precision.</h2>
                        <div class="text-on-surface-variant font-body space-y-6 text-lg leading-relaxed">
                            <p>I am a developer-designer who bridges the gap between complex engineering and refined aesthetics. My approach is rooted in the "Digital Atelier" philosophy—where every line of code is as intentional as a stroke of a brush.</p>
                            <p>With over 6 years of experience across the stack, I specialize in building high-performance web applications that don't just work flawlessly but feel premium to the touch.</p>
                        </div>
                        <!-- Skill Bento Grid -->
                        <div class="mt-16 grid grid-cols-3 gap-3 md:grid-cols-4 xl:grid-cols-5">
                            @foreach ($skills->get('language', collect())->merge($skills->get('framework', collect())) as $s)
                                <div cursor-class="arrow" class="bg-surface-container border-outline-variant/10 hover:border-primary/30 group rounded-lg border p-3 transition-all md:p-4">
                                    <h4 class="font-headline text-on-surface truncate text-sm font-bold">{{ $s->skill }}</h4>
                                    <p class="font-label text-on-surface-variant mt-1 text-[10px] uppercase tracking-wider">{{ $s->percentage }}% Mastery</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="content z-[-1]" wire:ignore>
            <h2 class="content__title" data-splitting data-effect27>
                <span class="font-upper font-19 font-medium">
                    Act because you have hands,
                    that bring to life your every command.
                    With them you can create and build,
                    and bring to life what once was stilled.</span>
            </h2>
        </div>

        <!-- Selected Projects Section -->
        <section class="bg-surface show py-32" id="work" wire:ignore.self>
            <div class="mx-auto max-w-7xl px-8">
                <div class="mb-20 flex flex-col items-end justify-between gap-8 md:flex-row">
                    <div>
                        <span class="font-label text-primary mb-4 block text-xs uppercase tracking-[0.4em]">Portfolio</span>
                        <h2 class="font-headline text-on-surface text-5xl font-bold md:text-6xl">Selected Work.</h2>
                    </div>
                    <p class="text-on-surface-variant font-body max-w-md text-lg leading-relaxed">A curation of projects focusing on high-end performance and editorial user experiences.</p>
                </div>
                <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
                    @foreach ($projects as $p)
                        <a href="{{ $p->link }}" cursor-class="arrow" class="group cursor-pointer">
                            <div class="border-outline-variant/10 bg-surface-container relative mb-6 flex aspect-[16/10] items-center justify-center overflow-hidden rounded-xl border">
                                @if ($p->image)
                                    <img alt="{{ $p->title }}" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ strpos($p->image, 'http') === 0 ? $p->image : asset('storage/' . ltrim($p->image, '/')) }}" />
                                @else
                                    <span class="font-headline px-6 text-center text-xl uppercase tracking-widest text-white/20">
                                        {{ $p->title }}
                                    </span>
                                @endif
                                <div class="bg-background/20 absolute inset-0 transition-colors duration-500 group-hover:bg-transparent"></div>
                            </div>
                            <div class="flex items-start justify-between">
                                <div>
                                    <h3 class="font-headline text-on-surface group-hover:text-primary text-2xl font-bold transition-colors">{{ $p->title }}</h3>
                                    <p class="text-on-surface-variant font-body mt-2">{{ Str::limit(strip_tags($p->description ?? ''), 60) }}</p>
                                </div>
                                <span class="font-label border-outline-variant rounded-full border px-3 py-1 text-[10px] uppercase tracking-widest">
                                    {{ is_array($p->code_lang) ? implode(', ', $p->code_lang) : $p->code_lang ?? 'Unknown' }}
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>


        <div class="content !pt-[400px]" wire:ignore>
            <h2 class="content__title" data-splitting data-effect29><span class="font-upper">Discipline</span><span class="font-upper">above</span><span class="font-upper">Motivation</span><span class="font-upper">Always</span></h2>
        </div>

        <div class="content content--full !pt-[400px]" wire:ignore>
            <h2 class="content__title" data-splitting data-effect28>
                <a cursor-class="arrow" href="#contact" class="font-12 flex items-center justify-center gap-4 font-medium !text-[#ddc4a4] transition-colors duration-300 hover:!text-white">
                    <span>Reach Out</span>
                    <svg class="h-10 w-10 md:h-16 md:w-16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="translate: none; rotate: none; scale: none; filter: blur(0.1912px) opacity(0.9841); transform-origin: 50% 100%; transform: translate3d(0px, 0px, 0px) scale(0.992, 0.992); will-change: transform, filter;">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </a>
            </h2>
        </div>

    </div>

    <!-- Contact Section -->
    <section class="py-32" id="contact">
        <div class="mx-auto max-w-7xl px-8">
            <div class="grid grid-cols-1 gap-20 lg:grid-cols-2">
                <div class="show" wire:ignore.self>
                    <span class="font-label text-primary mb-4 block text-xs uppercase tracking-[0.4em]">Inquiries</span>
                    <h2 class="font-headline text-on-surface mb-8 text-5xl font-bold md:text-6xl">Let's create something distinct.</h2>
                    <p class="text-on-surface-variant font-body mb-12 max-w-md text-lg leading-relaxed">Whether you have a question, a project in mind, or just want to connect, I'm here to listen. Let's turn your digital aspirations into tangible, high-performance realities.</p>
                    <div class="space-y-6">
                        <a cursor-class="arrow" href="mailto:ottomandora@gmail.com" class="group flex w-fit cursor-pointer items-center gap-4">
                            <div class="bg-surface-container text-primary group-hover:bg-primary group-hover:text-on-primary flex h-12 w-12 items-center justify-center rounded-full transition-all">
                                <span class="material-symbols-outlined">mail</span>
                            </div>
                            <span class="font-headline text-on-surface group-hover:text-primary text-lg font-bold transition-colors md:text-xl">ottomandora@gmail.com</span>
                        </a>
                        <div class="mt-8 flex gap-4">
                            <a href="https://t.me/bepbep" target="_blank" cursor-class="arrow" class="border-outline-variant/30 text-primary hover:bg-primary hover:text-on-primary flex h-12 w-12 items-center justify-center rounded-full border transition-all">
                                <span class="material-symbols-outlined">send</span>
                            </a>
                            <a href="https://www.linkedin.com/in/ottomandora" target="_blank" cursor-class="arrow" class="border-outline-variant/30 text-primary hover:bg-primary hover:text-on-primary flex h-12 w-12 items-center justify-center rounded-full border transition-all">
                                <span class="material-symbols-outlined">work</span>
                            </a>
                            <a href="https://github.com/ottoxan" target="_blank" cursor-class="arrow" class="border-outline-variant/30 text-primary hover:bg-primary hover:text-on-primary flex h-12 w-12 items-center justify-center rounded-full border transition-all">
                                <span class="material-symbols-outlined">code</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-surface border-outline-variant/10 show relative overflow-hidden rounded-xl border p-10 md:p-12" wire:ignore.self>
                    @if (session()->has('message'))
                        <div class="bg-surface/90 absolute inset-0 z-10 flex flex-col items-center justify-center p-8 text-center backdrop-blur-sm">
                            <span class="material-symbols-outlined text-primary mb-4 text-6xl">check_circle</span>
                            <h3 class="font-headline text-on-surface mb-2 text-2xl font-bold">Message Received</h3>
                            <p class="text-on-surface-variant font-body">{{ session('message') }}</p>
                            <button onclick="window.location.reload()" class="border-outline-variant font-label mt-8 rounded-lg border px-6 py-2 text-sm uppercase tracking-widest transition-colors hover:bg-white/5" cursor-class="arrow">Close</button>
                        </div>
                    @endif
                    <form wire:submit.prevent="submitInquiry" class="space-y-8">
                        <div class="group relative space-y-1">
                            <label class="font-label text-on-surface-variant group-focus-within:text-primary block text-[10px] uppercase tracking-[0.2em] transition-colors">Your Name</label>
                            <input wire:model="name" class="border-outline-variant focus:border-primary text-on-surface font-body w-full border-0 border-b bg-transparent py-4 outline-none transition-colors focus:ring-0" placeholder="John Doe" type="text" required />
                        </div>
                        <div class="group relative space-y-1">
                            <label class="font-label text-on-surface-variant group-focus-within:text-primary block text-[10px] uppercase tracking-[0.2em] transition-colors">Email Address</label>
                            <input wire:model="email" class="border-outline-variant focus:border-primary text-on-surface font-body w-full border-0 border-b bg-transparent py-4 outline-none transition-colors focus:ring-0" placeholder="john@example.com" type="email" required />
                        </div>
                        <div class="group relative space-y-1">
                            <label class="font-label text-on-surface-variant group-focus-within:text-primary block text-[10px] uppercase tracking-[0.2em] transition-colors">Project Narrative</label>
                            <textarea wire:model="narrative" class="border-outline-variant focus:border-primary text-on-surface font-body w-full resize-none border-0 border-b bg-transparent py-4 outline-none transition-colors focus:ring-0" placeholder="Tell me about your vision..." rows="4" required></textarea>
                        </div>
                        <button type="submit" class="from-primary to-primary-container text-on-primary font-headline w-full rounded-lg bg-gradient-to-br py-5 font-bold uppercase tracking-widest transition-all hover:opacity-90 active:scale-[0.98]" cursor-class="arrow">
                            <span wire:loading.remove wire:target="submitInquiry">Send Inquiry</span>
                            <span wire:loading wire:target="submitInquiry">Sending...</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
