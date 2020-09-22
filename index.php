
<?php get_header(); ?>

    <!--Container-->
    <div class="container w-full md:max-w-3xl mx-auto pt-20">
      <div
        class="contents w-full px-4 md:px-6 text-xl text-gray-800 leading-normal"
        style="font-family: Georgia, serif"
      >
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>

                <?php get_template_part('loop-content'); ?>

        <!--ここに記事一覧に表示したいコンテンツを記述-->
            <?php endwhile;
        endif; ?><!--ループ終了-->



      <!--Divider-->
      <hr class="border-b-2 border-gray-400 mb-8 mx-4" />

      <!--Subscribe-->
      <div class="container px-4">
        <div class="font-sans bg-white rounded-lg shadow-md p-4 text-center">
          <h2 class="font-bold break-normal text-xl md:text-3xl">
            Subscribe to my Newsletter
          </h2>
          <h3
            class="font-bold break-normal font-normal text-gray-600 text-sm md:text-base"
          >
            Get the latest posts delivered right to your inbox
          </h3>
          <div class="w-full text-center pt-4">
            <form action="#">
              <div
                class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center"
              >
                <input
                  type="email"
                  placeholder="youremail@example.com"
                  class="flex-1 mt-4 appearance-none border border-gray-400 rounded shadow-md p-3 text-gray-600 mr-2 focus:outline-none"
                />
                <button
                  type="submit"
                  class="flex-1 mt-4 block md:inline-block appearance-none bg-teal-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-teal-400"
                >
                  Subscribe
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /Subscribe-->

      <!--Author-->
      <div class="flex w-full items-center font-sans px-4 py-12">
        <img
          class="w-10 h-10 rounded-full mr-4"
          src="http://i.pravatar.cc/300"
          alt="Avatar of Author"
        />
        <div class="flex-1 px-2">
          <p class="text-base font-bold text-base md:text-xl leading-none mb-2">
            Jo Bloggerson
          </p>
          <p class="text-gray-600 text-xs md:text-base">
            Minimal Blog Tailwind CSS template by
            <a
              class="text-teal-500 no-underline hover:underline"
              href="https://www.tailwindtoolbox.com"
              >TailwindToolbox.com</a
            >
          </p>
        </div>
        <div class="justify-end">
          <button
            class="bg-transparent border border-gray-500 hover:border-teal-500 text-xs text-gray-500 hover:text-teal-500 font-bold py-2 px-4 rounded-full"
          >
            Read More
          </button>
        </div>
      </div>
      <!--/Author-->

      <!--Divider-->
      <hr class="border-b-2 border-gray-400 mb-8 mx-4" />

      <!--Next & Prev Links-->
      <div class="font-sans flex justify-between content-center px-4 pb-12">
        <div class="text-left">
          <span class="text-xs md:text-sm font-normal text-gray-600"
            >&lt; Previous Post</span
          ><br />
          <p>
            <a
              href="#"
              class="break-normal text-base md:text-sm text-teal-500 font-bold no-underline hover:underline"
            >
              Blog title
            </a>
          </p>
        </div>
        <div class="text-right">
          <span class="text-xs md:text-sm font-normal text-gray-600">
            Next Post &gt;
          </span>
          <br />
          <p>
            <a
              href="#"
              class="break-normal text-base md:text-sm text-teal-500 font-bold no-underline hover:underline"
            >
              Blog title
            </a>
          </p>
        </div>
      </div>

      <!--/Next & Prev Links-->
    </div>
    <!--/container-->

  </div><!--end contents-->
  <?php get_sidebar(); ?>
</div><!--end container-->
<?php get_footer(); ?>
