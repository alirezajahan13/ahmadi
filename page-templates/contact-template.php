<?php
/*
Template Name: Contact Template
*/
get_header();
?>

<div class="contactPageBack">
    <div class="contactPage mainView highMargined">
        <div class="generalHeading">
            <h1>تماس با ما</h1>
        </div>
        <div class="contactPageContent highPadding lowRadius mediumMargined whiteBg">
            <div class="sectionOne">
                <h3>آدرس</h3>
                <a href="#"><svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.621 8.45c-1.05-4.62-5.08-6.7-8.62-6.7h-.01c-3.53 0-7.57 2.07-8.62 6.69-1.17 5.16 1.99 9.53 4.85 12.28a5.436 5.436 0 0 0 3.78 1.53c1.36 0 2.72-.51 3.77-1.53 2.86-2.75 6.02-7.11 4.85-12.27Zm-8.62 5.01a3.15 3.15 0 1 1 0-6.3 3.15 3.15 0 0 1 0 6.3Z" fill="#3f3f3f"/></svg>تهران ، خیابان فلسطین ، بین خیابان انقلاب و نایبی ، پلاک328</a>
                <h3>شماره تماس</h3>
                <a href="#"><svg width="20" height="20" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" transform="rotate(-90)"><path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480Z" fill="#3f3f3f"/></svg>09125005590</a>
                <h3>ایمیل</h3>
                <a href="#"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 2.75c-1.615 0-3.075.404-4.135 1.388C1.795 5.132 1.25 6.607 1.25 8.5v7c0 1.893.545 3.369 1.615 4.362 1.06.984 2.52 1.388 4.135 1.388h10c1.615 0 3.075-.404 4.135-1.388 1.07-.993 1.615-2.469 1.615-4.362v-7c0-1.893-.545-3.368-1.615-4.362-1.06-.984-2.52-1.388-4.135-1.388H7Zm12.229 5.612a.75.75 0 0 0-.918-1.187l-5.547 4.287a1.25 1.25 0 0 1-1.528 0L5.689 7.175a.75.75 0 1 0-.918 1.187l5.548 4.287a2.75 2.75 0 0 0 3.362 0l5.548-4.287Z" fill="#3f3f3f"/></svg>info@ahmadi.ir</a>
                <h3>روزهای کاری</h3>
                <li>از شنبه تا پنجشنبه</li>
                <li>ساعت 8 الی 20</li>
                <div class="locationPart">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d681.1239918733196!2d51.402771718935995!3d35.70186395673047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snl!4v1698398919120!5m2!1sen!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="sectionTwo">
                <?php echo do_shortcode('[contact-form-7 id="1a3a90b" title="فرم تماس با ما"]') ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>