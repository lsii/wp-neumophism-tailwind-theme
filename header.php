

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<?php wp_head(); ?><!-- システム・プラグイン用 -->
<link
    href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"
    rel="stylesheet"
/>
<!--Replace with your tailwind.css once created-->
</head>


<body class="bg-gray-200 font-sans leading-normal tracking-normal">


<header>
<div class="header-inner bg-gray-200">


<nav id="header" class="fixed w-full z-10 top-0 pt-6">
    <div
    id="progress"
    class="h-1 z-20 top-0"
    style="
        background: linear-gradient(
        to right,
        #4dc0b5 var(--scroll),
        transparent 0
        );
    "
    ></div>

    <div
    class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3"
    >
    <div class="pl-4">
        <a
        class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl"
        href="<?php echo home_url(); ?>"
        >
            <?php bloginfo('name'); ?>
        </a>
    </div>

    <div class="block lg:hidden pr-4">
        <button
        id="nav-toggle"
        class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none"
        >
        <svg
            class="fill-current h-3 w-3"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
        >
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
        </button>
    </div>

    <div
        id="nav-content"
        class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20"
    >

        <ul class="list-reset lg:flex justify-end flex-1 items-center">

        <!--ヘッダーメニュー-->
        <li>
            <div id="header-nav-wrap" class="header-nav-wrap">
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-nav',
                    'container' => 'nav',
                    'container_class' => 'header-nav',
                    'container_id' => 'header-nav',
                    'fallback_cb' => ''
                )); ?>
            </div>
        </li>

        <li class="mr-3">
            <a
            class="inline-block py-2 px-4 text-gray-900 font-bold no-underline"
            href="#"
            >
            Active
            </a>
        </li>
        <li class="mr-3">
            <a
            class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4"
            href="#"
            >
            Link
            </a>
        </li>
        <li class="mr-3">
            <a
            class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4"
            href="#"
            >
            Link
            </a>
        </li>
        </ul>
    </div>
    </div>
</nav>
</div><!--end header-inner-->
</header>
