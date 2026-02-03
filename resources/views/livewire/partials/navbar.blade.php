<div id="navbar-container" class="p-[var(--page-padding)]">
    <div id="nav">
        <img cursor-class="arrow" class="!h-full" id="btn" src="{{ asset('images/logo.png') }}" alt="Logo">
        <div class="flex items-center gap-4">
            <button id="music-btn" class="contact unbutton uppercase" cursor-class="arrow">
                Sound <span id="music-status">[OFF]</span>
            </button>
            <a class="contact uppercase" cursor-class="arrow" href="#contact">Contact</a>
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
