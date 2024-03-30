<?

/*
    Template Name: Contacts
*/


get_header();

?>

<? _e('[:ru][:en][:]'); ?>
<main class="content">
    <? get_template_part('part-templates/part_subheader'); ?>
    <section class="contacts">
        <div class="container">
            <div class="wrap">
                <div class="contacts__links">
                    <h2>
                        <? _e('[:ru]
                               [:en]Get in touch
                               [:]'); ?>
                    </h2>
                    <div class="contacts__item">
                        <h3>
                            <? _e('[:ru]
                                   [:en]Office address
                                   [:]'); ?>
                        </h3>
                        <div class="contacts__item-str">
                            <img src="<?= get_template_directory_uri() . '/assets/img/contacts/location.svg' ?>" alt="">
                            <a href="">
                                <?php echo esc_html(get_option('location')); ?>
                            </a>
                        </div>
                    </div>
                    <div class="contacts__item">
                        <h3>
                            <? _e('[:ru]
                                   [:en]Phone number
                                   [:]'); ?>
                        </h3>
                        <div class="contacts__item-str">
                            <img src="<?= get_template_directory_uri() . '/assets/img/contacts/phone.svg' ?>" alt="">
                            <a href="tel:<?php echo esc_html(get_option('uk_phone')); ?>"><?php echo esc_html(get_option('uk_phone')); ?></a>
                        </div>
                    </div>
                    <div class="contacts__item">
                        <h3>
                            <? _e('[:ru]
                                   [:en]E-mail
                                   [:]'); ?>
                        </h3>
                        <div class="contacts__item-str">
                            <img src="<?= get_template_directory_uri() . '/assets/img/contacts/location.svg' ?>" alt="">
                            <a href="mailto:<?php echo esc_html(get_option('email')); ?>"><?php echo esc_html(get_option('email')); ?></a>
                        </div>
                    </div>
                </div>
                <div class="feedback">
                    <form action="#" class="form__content" id="contacts-form" method="post">
                        <div class="contacts__block">
                            <p>
                                <? _e('[:ru]
                                       [:en]Name
                                       [:]'); ?>
                            </p>
                            <input type="text" required="" id="fname" name="name">
                        </div>
                        <div class="contacts__block">
                            <p>
                                <? _e('[:ru]
                                       [:en]Phone number
                                       [:]'); ?>
                            </p>
                            <input type="tel"  required="" id="input-phone" name="phone">
                        </div>
                        <div class="contacts__block">
                            <p>
                                <? _e('[:ru]
                                       [:en]Email
                                       [:]'); ?>
                            </p>
                            <input type="email"  required="" id="email" name="email">
                        </div>
                        <div class="contacts__block">
                            <p>
                                <? _e('[:ru]
                                       [:en]Comment
                                       [:]'); ?>
                            </p>
                            <textarea id="comment" name="comment" type="text"></textarea>
                        </div>
                        <button href="" class="btn-common" data-link="log" id="submitBtn">
                            <? _e('[:ru][:en]Button[:]'); ?>
                        </button>
                    </form>
                    <span id="successMessage" style="display: none;">
                        Form submitted successfully! </span>
                </div>

            </div>
        </div>
    </section>
</main>



<? get_footer() ?>