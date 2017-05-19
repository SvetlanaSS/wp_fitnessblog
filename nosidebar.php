<?php
/*
Template Name: Full Width Page with No Sidebar
*/

require_once 'functions.php';

get_header(); ?>

    <div id="primary" class="site-content">
        <div id="content" role="main">

            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
                <?php comments_template( '', true ); ?>
            <?php endwhile; // end of the loop. ?>
            <h2 class="header-center">I TEACH WOMEN HOW TO LOVE THEIR BODIES AND EMPOWER THEIR LIVES</h2>
            <p>As a coach, speaker, and writer, my mission is to help women stand in their power. What that means is really unique to every woman, but it essentially revolves around practicing authenticity, ownership, and self-love. I teach women that we all have the power to define ourselves and to change that definition anytime we choose.</p>
            <p>What you’ll find on this website is an amalgamation of mindset skills, fitness musings, lifestyle guidance and mindful parenting.</p>
            <p>I’ve worked as a personal trainer and fitness coach for over 15 years, served as an Arabic linguist in the United States Air Force, have been writing since I was eight years old, and birthed a witty and hilarious baby boy ten years ago. My central focus is to help empower women through strength and bring wild and warm energy wherever I go.</p>
            <hr>
            <h2 class="header-center">WHO I AM</h2>
            <p>Lifestyle and Fitness Coach, Writer, Entrepreneur, Veteran, Mom, Feminist, Woman on a mission.</p>
            <h2 class="header-center">THINGS I LOVE</h2>
            <p>Books, bulldogs, traveling, wine, a stiff and spicy bloody Mary, yoga, mermaids, tattoos, vintage typewriters, fashion, collecting vinyl, the ocean, tacos, champagne cocktails, fried chicken, coffee, pumping iron, hiking, smiling, Harry Potter, music, girl talk, breakfast burritos, and of course, my son–the 10 year old feminist.</p>
            <h2 class="header-center">WHERE TO FIND ME</h2>
            <p>Click the “contact” tab above for inquires on speaking engagements, workshops, seminars, or contributions. I love traveling for speaking gigs and would definitely love to come to your city. If you have any questions, feel free to ask them there as well; I often shoot videos and write articles based on these inquiries.</p>

        </div>
    </div>

<?php get_footer(); ?>
