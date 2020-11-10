<?php get_header(); ?>

<body data-siteurl="<?php echo get_bloginfo('url'); ?>">
    
    
<!--SECTION1 START-->    
<div class="container" id="section1">
    <div class="intro">
        <h1>Osallistumisen<br>pääotsikko</h1>
        <p>Lyhyt kuvaus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere interdum sem. Quisque liguia eros ullamcorper quis, lacinia quis facilisis sed sapien. Maurus varius diam vitae arcu.</p>
        <a class="button_border" href="#section3">OSALLISTU CTA</a>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/KT-colors.jpg">
</div>
<!--SECTION1 END-->  
    
    
<!--SECTION2 START--> 
<div class="container" id="section2">
        <h2>Kilpailun kuvat otsikko</h2>
        <p id="section2-description">Aikaa osallistua ja äänestää 1.2.2020 asti</p>
        <div class="your-class">
            
            <?php 
                $args = array(
                'post_type' => 'project',
                'posts_per_page' => 100,
                'orderby' => 'date',
                'order' => 'ASC',
                );
                $projects = new WP_Query($args);
                while ($projects->have_posts()) {
                $projects->the_post();
            ?>
                
                <div class="post-element">
                    <img class="contest-photo" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                    <div class="voting">
                        <button class="like__btn like<?php echo get_the_ID(); ?> buttonlike" data-postid="<?php echo get_the_ID(); ?>">
                            <span class="like-text">TYKKÄÄ </span>
                            <span class="like__number like<?php echo get_the_ID(); ?> d-none"><?php the_field('henkilon_saamat_aanet', get_the_ID()); ?></span>
                            <i class="far fa-heart heartlike" id="heart"></i>
                        </button>
                        <div class="social_share">
                            <?php the_excerpt()?>
                        </div>
                        <p>JAA</p>
                    </div>
                    <h4><?php the_title()?></h4>
                    <h5><?php echo get_field('henkilon_nimi')?></h5>
                </div>
                
            <?php }
            wp_reset_query();
            ?>
            
        </div>
    
</div>
<!--SECTION2 END-->  
    
    
<!--SECTION3 START--> 
<div class="container" id="section3">
    <div class="content">
        <div id="info">
            <h2>Osallistu kilpailuun!</h2>
            <p id="section3-paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien.
            </p>
            <p id="section3-paragraph">Mauris varius diam vitae arcu. Sed arcu lectus auctor vitae, consectetuer et venenatis eget velit. Sed augue orci, lacinia eu tincidunt et eleifend nec lacus. Donec ultricies nisl ut felis, suspendisse potenti. Lorem ipsum ligula ut hendrerit mollis, ipsum erat vehicula risus, eu suscipit sem libero nec erat. Aliquam erat volutpat.
            </p>
            <p id="section3-paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. 
            </p>
        </div>
        <div id="form">
            <form method="post" enctype="multipart/form-data">
                <div class="form-element">
                    <input id="photo" class="textinput" type="text" placeholder="Anna kuvalle nimi" required="" name="photo">
                    <label id="photolabel" for="photo">Kuvan otsikko *</label>
                </div>
                <div class="form-element">
                    <input id="name" class="textinput" type="text" placeholder="Maija Meikäläinen" required="" name="name">
                    <label id="namelabel" for="name">Nimi *</label>
                    </div>
                <div class="form-element">
                    <input id="email" class="textinput" type="email" placeholder="maija@meikalainen.fi" required="" name="email">
                    <label id="emaillabel" for="email">Sähköposti *</label>
                </div>
                <div class="file-element">
                    <input class="inputfile" name="choosephoto" id="choosephoto" type="file" data-multiple-caption="{count} files selected" multiple required>
                    <label for="choosephoto" id="choosephoto-label"><span>VALITSE KUVA</span></label>
                </div>
                <div class="form-element" id="terms-element">
                    <label for="terms" id="termslabel">
                    <input type="checkbox" id="terms" required="" name="terms">Hyväksyn kilpailun <a href="#section4">säännöt ja ehdot</a>
                    <span class="checkmark"></span>
                    </label>
                </div>
                <button id="submitform" name="submitBtn" type="submit">OSALLISTU</button>
            </form>
        </div>
    </div>
</div>
<!--SECTION3 END-->    
    
    
<!--SECTION4 START--> 
<div class="container" id="section4">
    <div class="content">
        <div id="competition">
            <h3>Säännöt ja ehdot</h3>
            <p>Kilpailuaika 1.1.2020-1.2.2020</p>
            <p>Kilpailun järjestää Kuvakilpailu</p>
            <p>Lorem ipsum dolor sit amet</p>
            <p>Yms.</p>
        </div>
        <div id="competitionrules">
            <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu. Sed arcu lectus auctor vitae, consectetuer et venenatis eget velit. Sed augue orci, lacinia eu tincidunt et eleifend nec lacus. Donec ultricies nisl ut felis, suspendisse potenti. Lorem ipsum ligula ut hendrerit mollis, ipsum erat vehicula risus, eu suscipit sem libero nec erat. Aliquam erat volutpat. Sed congue augue vitae neque. Nulla consectetuer porttitor pede. Fusce purus morbi tortor magna condimentum vel, placerat id blandit sit amet tortor.
            </p>
            <p>
            Mauris sed libero. Suspendisse facilisis nulla in lacinia laoreet, lorem velit accumsan velit vel mattis libero nisl et sem. Proin interdum maecenas massa turpis sagittis in, interdum non lobortis vitae massa. Quisque purus lectus, posuere eget imperdiet nec sodales id arcu. Vestibulum elit pede dictum eu, viverra non tincidunt eu ligula.
            </p>
            <p>
            Nam molestie nec tortor. Donec placerat leo sit amet velit. Vestibulum id justo ut vitae massa. Proin in dolor mauris consequat aliquam. Donec ipsum, vestibulum ullamcorper venenatis augue. Aliquam tempus nisi in auctor vulputate, erat felis pellentesque augue nec, pellentesque lectus justo nec erat. Aliquam et nisl. Quisque sit amet dolor in justo pretium condimentum.
            </p>
            <p>
            Vivamus placerat lacus vel vehicula scelerisque, dui enim adipiscing lacus sit amet sagittis, libero enim vitae mi. In neque magna posuere, euismod ac tincidunt tempor est. Ut suscipit nisi eu purus. Proin ut pede mauris eget ipsum. Integer vel quam nunc commodo consequat. Integer ac eros eu tellus dignissim viverra. Maecenas erat aliquam erat volutpat. Ut venenatis ipsum quis turpis. Integer cursus scelerisque lorem. Sed nec mauris id quam blandit consequat. Cras nibh mi hendrerit vitae, dapibus et aliquam et magna. Nulla vitae elit. Mauris consectetuer odio vitae augue.
            </p>
        </div>
    </div>
</div>
<!--SECTION4 END-->    
    
</body>

<?php get_footer ()?>
