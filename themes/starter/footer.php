
<!-- section-footer -->
<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__logo">
                <img src="<?= get_template_directory_uri() . '/assets/img/home/logo.svg'?>" alt="header logo">
            </div>
            <div class="footer__links">
                <h3><? _e('[:ru]Контакты[:en]Contacts[:es]Contactos[:]'); ?></h3>
                <div class="footer__contacts">
                <div class="contacts__item">
                        <img src="<?= get_template_directory_uri() . '/assets/img/footer/location.svg'?>">
                        <a href=""><?php echo esc_html(get_option('location')); ?></a>
                </div>
                <div class="contacts__item">
                        <img src="<?= get_template_directory_uri() . '/assets/img/footer/phone.svg'?>">
                        <div class="numbers">
                            <a href="tel:<?php echo esc_html(get_option('uk_phone')); ?>">UK: +<?php echo esc_html(get_option('uk_phone')); ?></a> 
                            <a href="tel:<?php echo esc_html(get_option('russian_phone')); ?>">RU: +<?php echo esc_html(get_option('russian_phone')); ?></a> 
                            <a href="tel:<?php echo esc_html(get_option('cyprus_phone')); ?>">CY: +<?php echo esc_html(get_option('cyprus_phone')); ?></a>
                        </div>
                </div>
                <div class="contacts__item">
                        <img src="<?= get_template_directory_uri() . '/assets/img/footer/mail.svg'?>">
                        <a href="mailto:<?php echo esc_html(get_option('email')); ?>"><?php echo esc_html(get_option('email')); ?></a>
                </div>
                <p class="footer__copywrite">© 2024 <span><?php echo esc_html(get_option('company_name')); ?></span></p>
                </div>
            </div>
            <div class="footer__risks">
                <h3>
                <? _e('[:ru]Уведомление о риске:[:en]Risk Notification:[:es]Notificación de riesgos:[:]'); ?></h3>
                <p><? _e('[:ru]Операции, предлагаемые на данном сайте, могут совершать только совершеннолетние дееспособные лица (не моложе 18 лет). Операции с финансовыми инструментами, предлагаемые на данном сайте, могут рассматриваться как операции с повышенным риском.
                          [:en]Transactions offered on this site may only be carried out by fully capable adults (at least 18 years of age). Transactions with financial instruments offered by this website may be considered high-risk transactions.
                          [:es]Las transacciones ofrecidas en este sitio sólo pueden ser realizadas por adultos plenamente capaces (mayores de 18 años). Las transacciones con instrumentos financieros ofrecidos por este sitio web pueden considerarse transacciones de alto riesgo.
                          [:]'); ?></p>
                <p><? _e('[:ru]Существуют риски частичной или полной потери средств при таких операциях. Соответственно, настоятельно рекомендуется не инвестировать и не торговать средствами, потерю которых в случае неблагоприятного исхода таких сделок вы не можете себе позволить.
                          [:en]There are risks of partial or complete loss of funds in such transactions. Accordingly, you are strongly advised not to Accordingly, you are strongly advised not to invest or trade funds, the loss of which, in the case of an unfavourable outcome of such trades, you cannot afford.
                          [:es]Existen riesgos de pérdida parcial o total de fondos en dichas operaciones. En consecuencia, se le recomienda encarecidamente que no invierta o negocie fondos cuya pérdida, en caso de resultado desfavorable de dichas operaciones, no pueda permitirse.
                          [:]'); ?></p>
                <p><? _e('[:ru]Мы рекомендуем Вам внимательно ознакомиться с нашим Заявлением о рисках (Уведомлением о рисках), Клиентским соглашением и другими регламентирующими документами, прежде чем приступать к совершению операций на данном Веб-сайте.
                          [:en]We recommend you to carefully read our Risk Disclosure Statement (Risk Notice), the Client Agreement and other governing documents before proceeding with transactions on this Website.
                          [:es]Le recomendamos que lea atentamente nuestra Declaración de Divulgación de Riesgos (Aviso de Riesgos), el Contrato de Cliente y otros documentos rectores antes de proceder a realizar transacciones en este sitio web.
                          [:]'); ?></p>
                <div class="partners">
                     <img src="<?= get_template_directory_uri() . '/assets/img/footer/footer_icon-1.svg'?>">
                     <img src="<?= get_template_directory_uri() . '/assets/img/footer/footer_icon-2.svg'?>">
                     <img src="<?= get_template_directory_uri() . '/assets/img/footer/footer_icon-3.svg'?>">
                     <img src="<?= get_template_directory_uri() . '/assets/img/footer/footer_icon-4.svg'?>">
                     <img src="<?= get_template_directory_uri() . '/assets/img/footer/footer_icon-5.svg'?>">
                 </div>
            </div>
        </div>
    </div>
</footer>

<? get_template_part( 'part-templates/part_scroller_top' )?>

</div>
<?php
wp_footer();
?>
</body>

</html>
