<?php

/**
 * Template Name: Our Solution
 */

get_header();

?>
<?php $our_solution = get_field('our_solution') ?>
<section class="losungen__wrapper-top">
    <div class="container">
        <div class="losungen__wrapper-row">
            <?php if ($our_solution['image']) : ?>
                <div class="losungen__wrapper-column">
                    <div class="losungen__image-wrapper">
                        <img src="<?php echo $our_solution['image']['url'] ?>" alt="<?php echo $our_solution['image']['alt'] ?>">
                    </div>
                </div>
            <?php endif; ?>
            <div class="losungen__wrapper-column2">
                <div class="losungen__content-wrapper">
                    <?php if ($our_solution['heading']) : ?>
                        <h2> <?php echo $our_solution['heading'] ?></h2>
                    <?php endif; ?>
                    <?php if ($our_solution['description']) : ?>
                        <p><?php echo $our_solution['description'] ?></p>
                    <?php endif; ?>
                    <?php if ($our_solution['button']) : ?>
                        <a href="<?php echo $our_solution['button']['url'] ?>" target="<?php echo $our_solution['button']['target'] ? $our_solution['button']['target'] : '_self' ?>">
                            <?php echo $our_solution['button']['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $pricesync_pro = get_field('pricesync_pro') ?>
<section class="losungen__wrapper losungen__wrapper-bg">
    <div class="container">
        <div class="losungen__wrapper-row">
            <div class="losungen__wrapper-column2">
                <div class="losungen__content-wrapper">
                    <?php if ($pricesync_pro['heading']) : ?>
                        <h2> <?php echo $pricesync_pro['heading'] ?></h2>
                    <?php endif; ?>
                    <?php if ($pricesync_pro['description']) : ?>
                        <p><?php echo $pricesync_pro['description'] ?></p>
                    <?php endif; ?>
                    <?php if ($pricesync_pro['button']) : ?>
                        <a href="<?php echo $pricesync_pro['button']['url'] ?>" target="<?php echo $pricesync_pro['button']['target'] ? $pricesync_pro['button']['target'] : '_self' ?>">
                            <?php echo $pricesync_pro['button']['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($pricesync_pro['image']) : ?>
                <div class="losungen__wrapper-column">
                    <div class="losungen__image-wrapper">
                        <img src="<?php echo $pricesync_pro['image']['url'] ?>" alt="<?php echo $pricesync_pro['image']['alt'] ?>">
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php $conversaAssist = get_field('conversaassist') ?>
<section class="losungen__wrapper-bottom">
    <div class="container">
        <div class="losungen__wrapper-row">
            <?php if ($conversaAssist['image']) : ?>
                <div class="losungen__wrapper-column">
                    <div class="losungen__image-wrapper">
                        <img src="<?php echo $conversaAssist['image']['url'] ?>" alt="<?php echo $conversaAssist['image']['alt'] ?>">
                    </div>
                </div>
            <?php endif; ?>
            <div class="losungen__wrapper-column2">
                <div class="losungen__content-wrapper">
                    <?php if ($conversaAssist['heading']) : ?>
                        <h2> <?php echo $conversaAssist['heading'] ?></h2>
                    <?php endif; ?>
                    <?php if ($conversaAssist['description']) : ?>
                        <p><?php echo $conversaAssist['description'] ?></p>
                    <?php endif; ?>
                    <?php if ($conversaAssist['button']) : ?>
                        <a href="<?php echo $conversaAssist['button']['url'] ?>" target="<?php echo $conversaAssist['button']['target'] ? $conversaAssist['button']['target'] : '_self' ?>">
                            <?php echo $conversaAssist['button']['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>