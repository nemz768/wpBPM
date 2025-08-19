<?php wp_footer(); ?>


<footer class="footer">
    <div class="footer-rules">

        <?php $logo = get_field("footer-logo");
              $copyright = get_field("footer-copyright");
         if ($logo):
        ?>

        <h1 class="footer-rules-title"><?php echo esc_html($logo);?></h1>

        <?php
        endif;
          if ($copyright):
        ?>
        <p class="footer-rules-subtitle"><?php echo esc_html($copyright);?></p>

        <?php
        endif;

        ?>


    </div>

    <div class="footer-address-links-email-block">
    <div class="footer-address-links-block">
        <div class="footer-address-block">
            <?php
            $info_group = get_field("footer-repeater-info");

            if ($info_group && is_array($info_group)):
            foreach($info_group as $info_item):
            ?>
            <p class="footer-address-text"><?php echo esc_html($info_item["footer-info-text"]);?></p>

            <?php
            endforeach;
            endif;
            ?>
        </div>


       <div class="footer-links-block">
       <?php
       $social_group = get_field("footer-repeater-socials");

       if ($social_group && is_array($social_group)):
       foreach($social_group as $social):

       ?>
            <a href="<?php echo esc_url($social['footer-socials-url']);?>"><img class="footer-link-img" src="<?php echo esc_url($social['footer-socials-img']);?>" alt=""></a>

        <?php
        endforeach;
        endif;


        ?>
        </div>
    </div>

    <?php
    $email = get_field("footer-email");
    if ($email):

    ?>
     <h2 class="footer-email"><?php echo esc_html($email);?></h2>
     <?php
     endif;
     ?>

 </footer>

</body>

</html>