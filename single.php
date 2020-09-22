
<?php get_header(); ?>

<!--Container-->
<div class="container w-full md:max-w-3xl mx-auto pt-20 mt-10">
  <div
    class="contents w-full px-4 md:px-6 text-xl text-gray-800 leading-normal"
    style="font-family: Georgia, serif"
  >

  <?php if (have_posts()) :
        the_post(); ?>

  <article <?php post_class('article-content'); ?>>

  <div class="text">
      <!--タイトル-->

      <div class="font-sans nm-flat-gray-200-lg rounded-lg w-full p-4 text-center">
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
          <!--本文取得-->
          <?php the_content(); ?>
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

        <div class="article-tag">
          <?php the_tags('<ul><li>タグ： </li><li>', '</li><li>', '</li></ul>'); ?>
        </div>
        <!-- <a
          href="#"
          class="text-base md:text-sm text-teal-500 no-underline hover:underline"
        >
          Link
        </a> -->
      </div>

      </div><!--end text-->

      </article>


  <?php endif; ?>

  </div><!--end contents-->
  <?php get_sidebar(); ?>
</div><!--end container-->
<?php get_footer(); ?>
