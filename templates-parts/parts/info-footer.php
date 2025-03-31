<?php

$hastags = get_field('pasek_nad_logotypami', 'options');
$logos = get_field('logotypy', 'options');
$desc = get_field('opis_pod_logotypami', 'options');
?>

<div class="info-partners">
    <?php if ($hastags) : ?>
        <div class="info-partners__hastags">
            <div class="container">
                <?php echo $hastags; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($logos) : ?>
        <div class="info-partners__logos">
            <?php foreach ($logos as $logo) : ?>
                <div class="item">
                    <?php if ($logo['link']): ?>
                        <a href="<?php echo $logo['link']; ?>">
                        <?php endif; ?>
                        <?php if ($logo['logo']): ?>
                            <?php echo $logo['logo']; ?>
                        <?php endif; ?>
                        <?php if ($logo['link']) : ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if ($desc) : ?>
        <div class="info-partners__desc"><?php echo $desc; ?></div>
    <?php endif; ?>
</div>