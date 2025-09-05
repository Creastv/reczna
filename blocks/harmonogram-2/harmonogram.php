<?php
$harmonogram = get_field('harmonogram');
if ($harmonogram) {
    echo '<div class="harmonogram">';
    foreach ($harmonogram as $item) {
        echo '<div class="harmonogram-item">';
        echo '<h3>' . esc_html($item['tytul']) . '</h3>';
        echo '<div class="harmonogram-opis">' . wp_kses_post($item['opis']) . '</div>';
        echo '</div>';
    }
    echo '</div>';
}
