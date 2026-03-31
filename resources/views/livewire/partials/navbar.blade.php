<div id="navbar-container" class="p-[var(--page-padding)]">
    <div id="nav">
        <img cursor-class="arrow" class="!h-full" id="btn" src="{{ asset('images/logo.png') }}" alt="Logo">
        <div class="flex items-center gap-4">
            <button id="music-btn" class="contact unbutton uppercase" cursor-class="arrow">
                Sound <span id="music-status">[OFF]</span>
            </button>
            <a class="contact uppercase !text-[#ddc4a4] flex flex-row items-center" cursor-class="arrow" href="#contact">Reach out
                <svg class="h-6 w-6 mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="translate: none; rotate: none; scale: none; filter: blur(0.1912px) opacity(0.9841); transform-origin: 50% 100%; transform: translate3d(0px, 0px, 0px) scale(0.992, 0.992); will-change: transform, filter;">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <audio id="bg-music" loop autoplay>
        <source src="{{ asset('audio/bg.mp3') }}" type="audio/mpeg">
    </audio>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var audio = document.getElementById("bg-music");
            var btn = document.getElementById("music-btn");
            var status = document.getElementById("music-status");
            var isPlaying = false;

            function togglePlay() {
                if (isPlaying) {
                    audio.pause();
                } else {
                    audio.play();
                }
            }

            audio.onplaying = function() {
                isPlaying = true;
                status.innerHTML = "[ON]";
            };

            audio.onpause = function() {
                isPlaying = false;
                status.innerHTML = "[OFF]";
            };

            // Attempt autoplay
            var playPromise = audio.play();
            if (playPromise !== undefined) {
                playPromise.then(_ => {
                    // Autoplay started!
                }).catch(error => {
                    // Autoplay was prevented.
                    status.innerHTML = "[OFF]";
                    // Fallback: Play on first user interaction
                    var playOnInteraction = function() {
                        audio.play();
                        document.removeEventListener('click', playOnInteraction);
                    };
                    document.addEventListener('click', playOnInteraction);
                });
            }

            btn.addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent ensuring the document click doesn't double-trigger if that was the interaction
                togglePlay();
            });
        });
    </script>
</div>
