
<?php get_header(); ?>

    <!--Container-->
    <div class="bg-gray-200 container w-full md:max-w-3xl mx-auto pt-20 mt-10">
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
        <div class="nm-flat-gray-200-lg rounded-lg   w-full  p-4 text-center">
          <h2 class="text-2xl font-bold leading-tight mb-4">
            Subscribe to my Newsletter
          </h2>
          <p>
            Get the latest posts delivered right to your inbox
          </p>
          <div class="w-full text-center pt-4">


            <form action="" class="space-y-8">
              <div class="flex flex-col sm:flex-row sm:items-center">
                <label for="name" class="uppercase font-bold text-sm tracking-widest mb-1 sm:mb-0 sm:mr-8 sm:w-1/3">Full name</label>
                <input name="name" id="name" type="text" class="appearance-none rounded-full nm-inset-gray-200 leading-5 px-8 py-4 flex-grow sm:w-2/3" placeholder="John Doe">
              </div>
              <div class="flex flex-col sm:flex-row sm:items-center">
                <label for="email" class="uppercase font-bold text-sm tracking-widest mb-1 sm:mb-0 sm:mr-8 sm:w-1/3">Email</label>
                <input name="email" id="email" type="email" class="appearance-none rounded-full nm-inset-gray-200 leading-5 px-8 py-4 flex-grow sm:w-2/3" placeholder="johndoe@example.com">
              </div>
              <div class="flex flex-col sm:flex-row sm:items-center">
                <label for="dogs-or-cats" class="uppercase font-bold text-sm tracking-widest mb-1 sm:mb-0 sm:mr-8 sm:w-1/3">Dogs or cats?</label>
                <div class="rounded-full nm-flat-gray-200 leading-5 flex-grow sm:w-2/3 relative">
                  <select name="dogs-or-cats" id="dogs-or-cats" class="appearance-none w-full px-8 py-4 bg-transparent font-semibold">
                    <option selected="" disabled="">Please select...</option>
                    <option value="dogs">Dogs</option>
                    <option value="cats">Cats</option>
                  </select>
                  <div class="absolute right-0 top-0 h-full pr-8 flex flex-col justify-center items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="fill-current">
                      <path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path>
                      <path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="flex justify-center sm:justify-end pt-4">
                <button class="rounded-full nm-flat-gray-200 hover:nm-flat-gray-200-lg leading-5 px-8 py-4 uppercase font-bold tracking-widest transition duration-200 ease-in-out transform hover:scale-110">
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
        <!-- <img
          class="w-10 h-10 rounded-full mr-4"
          src="http://i.pravatar.cc/300"
          alt="Avatar of Author"
        /> -->
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
