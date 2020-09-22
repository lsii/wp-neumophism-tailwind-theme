
<?php get_header(); ?>

<!--Container-->
<div class="container w-full md:max-w-3xl mx-auto pt-20">
  <div
    class="contents w-full px-4 md:px-6 text-xl text-gray-800 leading-normal"
    style="font-family: Georgia, serif"
  >

  <?php if (have_posts()) :
        the_post(); ?>

  <article <?php post_class('article-content'); ?>>

  <div class="text">
      <!--タイトル-->

      <div class="font-sans">
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

        </div>


        <!--Post Content-->

        <p class="py-6">
          <!--本文取得-->
          <?php the_content(); ?>
        </p>

      </div><!--end text-->

      </article>


  <?php endif; ?>

  </div><!--end contents-->
  <?php get_sidebar(); ?>
</div><!--end container-->
<?php get_footer(); ?>
