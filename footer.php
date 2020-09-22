
<footer id="footer" class="footer bg-gray-200 border-t border-gray-400 shadow">
    <div class="footer-inner container max-w-4xl mx-auto flex py-8">
        <div class="w-full mx-auto flex flex-wrap">
            <div class="flex w-full md:w-1/2">
            <div class="px-8">
                <h5 class="font-bold text-gray-900">About</h5>
                <p class="py-4 text-gray-600 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse
                consectetur dapibus velit ut lacinia.
                </p>

                <div class="copyright">
                    <p class="py-4 text-gray-600 text-sm">
                    © 2016 <?php bloginfo('name'); ?>
                    </p>
                </div>
            </div>
            </div>

            <div class="flex w-full md:w-1/2">
            <div class="px-8">
                <h5 class="font-bold text-gray-900">Social</h5>
                <ul class="list-reset items-center text-sm pt-3">
                <li>
                    <a
                    class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1"
                    href="#"
                    >
                    Add social link
                    </a>
                </li>
                <li>
                    <div class="footer-nav-wrap">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'footer-nav',
                            'container' => 'nav',
                            'container_class' => 'footer-nav',
                            'container_id' => 'footer-nav',
                            'fallback_cb' => ''
                        )); ?>
                    </div>
                </li>
                </ul>

            </div>
            </div>
        </div>




    </div><!-- end footer-inner -->
</footer>

<script>
/* Progress bar */
// Source: https://alligator.io/js/progress-bar-javascript-css-variables/
var h = document.documentElement,
b = document.body,
st = 'scrollTop',
sh = 'scrollHeight',
progress = document.querySelector('#progress'),
scroll;
var scrollpos = window.scrollY;
var header = document.getElementById('header');
var navcontent = document.getElementById('nav-content');

document.addEventListener('scroll', function () {
/* Refresh scroll % width */
scroll = ((h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight)) * 100;
progress.style.setProperty('--scroll', scroll + '%');

/* Apply classes for slide in bar */
scrollpos = window.scrollY;

if (scrollpos > 10) {
    header.classList.add('bg-gray-200');
    header.classList.add('shadow');
    navcontent.classList.remove('bg-gray-100');
    navcontent.classList.add('bg-gray-200');
} else {
    header.classList.remove('bg-gray-200');
    header.classList.remove('shadow');
    navcontent.classList.remove('bg-gray-200');
    navcontent.classList.add('bg-gray-100');
}
});

// Javascript to toggle the menu
document.getElementById('nav-toggle').onclick = function () {
document.getElementById('nav-content').classList.toggle('hidden');
};
</script>

<?php wp_footer(); ?><!-- システム・プラグイン用 -->
</body>
</html>
