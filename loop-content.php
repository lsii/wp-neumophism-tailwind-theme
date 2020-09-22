
<article <?php post_class('article-list'); ?>>

    <a href="<?php the_permalink(); ?>">

    <div class="text ">
      <!--タイトル-->

      <div class="font-sans nm-flat-gray-200-lg rounded-lg   w-full  p-4 text-center">
          <!-- <span class="text-base md:text-sm text-teal-500 font-bold">&lt;</span>
          <a
            href="#"
            class="text-base md:text-sm text-teal-500 font-bold no-underline hover:underline"
          >
            BACK TO BLOG
          </a> -->
          <h1
            class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl"
          >
            <?php the_title(); ?>
          </h1>
          <p class="text-sm md:text-base font-normal text-gray-600">
            <!--投稿日を表示-->
            <span class="article-date">
                <i class="far fa-clock"></i>
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date(); ?>
                </time>
            </span>

            <!--著者を表示-->
            <span class="article-author">
                <i class="fas fa-user"></i><?php the_author(); ?>
            </span>

            <span class="">
                <!--カテゴリ-->
                <?php if (!is_category() && has_category()) : ?>
                <span class="cat-data">
                    <?php
                    $postcat = get_the_category();
                    echo $postcat[0]->name;
                    ?>
                </span>
                <?php endif; ?>
            </span>
          </p>
        </div>


        <!--Post Content-->

        <div class="py-8 appearance-none rounded-lg nm-inset-gray-200 leading-5 px-8 py-4 mt-0 flex-grow ">

            <!--抜粋-->
            <?php the_excerpt(); ?>

        </div>

      <!--Tags -->
      <div class="text-base md:text-sm text-gray-500 px-4 py-6">
        Tags:
        <a
          href="#"
          class="text-base md:text-sm text-teal-500 no-underline hover:underline"
        >
          Link
        </a>
        .
        <a
          href="#"
          class="text-base md:text-sm text-teal-500 no-underline hover:underline"
        >
          Link
        </a>
      </div>

      </div><!--end text-->
  </a>

</article>