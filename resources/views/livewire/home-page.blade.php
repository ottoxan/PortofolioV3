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
    <section class="py-32 show" id="about" wire:ignore.self>
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div cursor-class="arrow" class="order-2 lg:order-1">
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-primary/10 rounded-xl blur-2xl group-hover:bg-primary/20 transition-all duration-700"></div>
                        <img alt="About Adrian" class="relative rounded-xl grayscale hover:grayscale-0 transition-all duration-700 aspect-[4/5] object-cover" data-alt="professional portrait of a creative developer in a dark minimalist studio setting with dramatic high-contrast lighting" src="{{ asset('images/me.png') }}"/>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="font-headline text-4xl md:text-5xl font-bold mb-8 text-on-surface">Blending code with architectural precision.</h2>
                    <div class="space-y-6 text-on-surface-variant text-lg leading-relaxed font-body">
                        <p>I am a developer-designer who bridges the gap between complex engineering and refined aesthetics. My approach is rooted in the "Digital Atelier" philosophy—where every line of code is as intentional as a stroke of a brush.</p>
                        <p>With over 6 years of experience across the stack, I specialize in building high-performance web applications that don't just work flawlessly but feel premium to the touch.</p>
                    </div>
                    <!-- Skill Bento Grid -->
                    <div class="mt-16 grid grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach ($skills->get('language', collect())->merge($skills->get('framework', collect()))->take(6) as $s)
                            <div cursor-class="arrow" class="bg-surface-container p-6 rounded-lg border border-outline-variant/10 hover:border-primary/30 transition-all group">
                                <div class="text-primary mb-3">
                                    <span class="material-symbols-outlined text-3xl">developer_board</span>
                                </div>
                                <h4 class="font-headline font-bold text-on-surface">{{ $s->skill }}</h4>
                                <p class="text-xs font-label text-on-surface-variant uppercase tracking-wider mt-2">{{ $s->percentage }}% Mastery</p>
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
    <section class="py-32 bg-surface show" id="work" wire:ignore.self>
        <div class="max-w-7xl mx-auto px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div>
                    <span class="font-label text-primary tracking-[0.4em] uppercase text-xs mb-4 block">Portfolio</span>
                    <h2 class="font-headline text-5xl md:text-6xl font-bold text-on-surface">Selected Work.</h2>
                </div>
                <p class="text-on-surface-variant font-body max-w-md text-lg leading-relaxed">A curation of projects focusing on high-end performance and editorial user experiences.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                @foreach ($projects as $p)
                    <a href="{{ $p->link }}" cursor-class="arrow" class="group cursor-pointer">
                        <div class="relative aspect-[16/10] overflow-hidden rounded-xl border border-outline-variant/10 bg-surface-container mb-6 flex items-center justify-center">
                            @if ($p->image)
                                <img alt="{{ $p->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ strpos($p->image, 'http') === 0 ? $p->image : asset('storage/' . ltrim($p->image, '/')) }}"/>
                            @else
                                <span class="font-headline px-6 text-center text-xl uppercase tracking-widest text-white/20">
                                    {{ $p->title }}
                                </span>
                            @endif
                            <div class="absolute inset-0 bg-background/20 group-hover:bg-transparent transition-colors duration-500"></div>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="font-headline text-2xl font-bold text-on-surface group-hover:text-primary transition-colors">{{ $p->title }}</h3>
                                <p class="text-on-surface-variant mt-2 font-body">{{ Str::limit(strip_tags($p->description ?? ''), 60) }}</p>
                            </div>
                            <span class="font-label text-[10px] border border-outline-variant px-3 py-1 rounded-full uppercase tracking-widest">
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
                <svg class="h-10 w-10 md:h-16 md:w-16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="translate: none; rotate: none; scale: none; filter: blur(0.1912px) opacity(0.9841); transform-origin: 50% 100%; transform: translate3d(0px, 0px, 0px) scale(0.992, 0.992); will-change: transform, filter;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
            </a>
        </h2>
    </div>

    </div>

    <!-- Contact Section -->
    <section class="py-32" id="contact">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <div class="show" wire:ignore.self>
                    <span class="font-label text-primary tracking-[0.4em] uppercase text-xs mb-4 block">Inquiries</span>
                    <h2 class="font-headline text-5xl md:text-6xl font-bold text-on-surface mb-8">Let's create something distinct.</h2>
                    <p class="text-on-surface-variant font-body text-lg max-w-md leading-relaxed mb-12">Whether you have a question, a project in mind, or just want to connect, I'm here to listen. Let's turn your digital aspirations into tangible, high-performance realities.</p>
                    <div class="space-y-6">
                        <a cursor-class="arrow" href="mailto:ottomandora@gmail.com" class="flex items-center gap-4 group cursor-pointer w-fit">
                            <div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-all">
                                <span class="material-symbols-outlined">mail</span>
                            </div>
                            <span class="font-headline font-bold text-lg md:text-xl text-on-surface group-hover:text-primary transition-colors">ottomandora@gmail.com</span>
                        </a>
                        <div class="flex gap-4 mt-8">
                            <a href="https://t.me/bepbep" target="_blank" cursor-class="arrow" class="w-12 h-12 rounded-full border border-outline-variant/30 flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-all">
                                <span class="material-symbols-outlined">send</span>
                            </a>
                            <a href="https://www.linkedin.com/in/ottomandora" target="_blank" cursor-class="arrow" class="w-12 h-12 rounded-full border border-outline-variant/30 flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-all">
                                <span class="material-symbols-outlined">work</span>
                            </a>
                            <a href="https://github.com/ottoxan" target="_blank" cursor-class="arrow" class="w-12 h-12 rounded-full border border-outline-variant/30 flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-all">
                                <span class="material-symbols-outlined">code</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-surface p-10 md:p-12 rounded-xl border border-outline-variant/10 relative overflow-hidden show" wire:ignore.self>
                    @if (session()->has('message'))
                        <div class="absolute inset-0 bg-surface/90 backdrop-blur-sm z-10 flex flex-col items-center justify-center text-center p-8">
                            <span class="material-symbols-outlined text-6xl text-primary mb-4">check_circle</span>
                            <h3 class="font-headline text-2xl font-bold text-on-surface mb-2">Message Received</h3>
                            <p class="text-on-surface-variant font-body">{{ session('message') }}</p>
                            <button onclick="window.location.reload()" class="mt-8 border border-outline-variant px-6 py-2 rounded-lg text-sm uppercase tracking-widest font-label hover:bg-white/5 transition-colors" cursor-class="arrow">Close</button>
                        </div>
                    @endif
                    <form wire:submit.prevent="submitInquiry" class="space-y-8">
                        <div class="space-y-1 group relative">
                            <label class="font-label text-[10px] text-on-surface-variant uppercase tracking-[0.2em] block transition-colors group-focus-within:text-primary">Your Name</label>
                            <input wire:model="name" class="w-full bg-transparent border-0 border-b border-outline-variant py-4 focus:ring-0 focus:border-primary transition-colors text-on-surface font-body outline-none" placeholder="John Doe" type="text" required/>
                        </div>
                        <div class="space-y-1 group relative">
                            <label class="font-label text-[10px] text-on-surface-variant uppercase tracking-[0.2em] block transition-colors group-focus-within:text-primary">Email Address</label>
                            <input wire:model="email" class="w-full bg-transparent border-0 border-b border-outline-variant py-4 focus:ring-0 focus:border-primary transition-colors text-on-surface font-body outline-none" placeholder="john@example.com" type="email" required/>
                        </div>
                        <div class="space-y-1 group relative">
                            <label class="font-label text-[10px] text-on-surface-variant uppercase tracking-[0.2em] block transition-colors group-focus-within:text-primary">Project Narrative</label>
                            <textarea wire:model="narrative" class="w-full bg-transparent border-0 border-b border-outline-variant py-4 focus:ring-0 focus:border-primary transition-colors text-on-surface font-body resize-none outline-none" placeholder="Tell me about your vision..." rows="4" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-br from-primary to-primary-container text-on-primary py-5 rounded-lg font-headline font-bold tracking-widest uppercase hover:opacity-90 active:scale-[0.98] transition-all" cursor-class="arrow">
                            <span wire:loading.remove wire:target="submitInquiry">Send Inquiry</span>
                            <span wire:loading wire:target="submitInquiry">Sending...</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
