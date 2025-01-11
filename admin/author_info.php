
<div class="author_info_area">
    <h4><?php echo $contents['title']; ?></h4>
    <div class="author_name"><strong>User Name : </strong><?php echo get_the_author(); ?></div>
    <div class="author_email"><strong> Email ID : </strong><?php the_author_meta('email'); ?></div>
    <div class="author_description"><strong> Author Bio : </strong><?php the_author_meta('description'); ?></div>
    <div><?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?></div>
    <?php 
    if($content):
    ?>
    <div class="author_content"><?php echo $content; ?></div> 
    <?php endif; ?>
</div>
