<aside class="sidebar">
    <nav class="sidebar-nav">
    <h3><span><?php the_title(); ?></span></h3> 
    <?php wp_nav_menu(array('menu' => 'Sidebar')); ?>
        <script>
            $(document).ready(function(){
                $("h3 span").click(function(){
                    $(this).parent().next().slideToggle();
                });
            });
        </script>
    </nav>
</aside>
 