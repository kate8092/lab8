    

<?php get_header(); ?>


    <main>
    	        <!-- мeny -->
        <div class="menu-parent">
        	<div class="menu-item"> О нас</div>        	<div class="menu-item">Контакты</div>

        </div>
        <!-- Секция с текстом -->
        <div class="text-section">
    <div class="image-placeholder" style="background-image: url(<?php bloginfo('template_directory')?>/images/1.jpg)"></div>
    <div class="text-content">
        <h1>О нас</h1>
        <p>Мы занимаемся выращиванием и продажей свежей, экологически чистой голубики. Наша миссия — предложить вам натуральный продукт, наполненный вкусом и пользой для здоровья. Голубика, выращенная на наших плантациях, обладает ярким вкусом и богата витаминами, антиоксидантами и минералами.</p>
    </div>
    </div>
            
        </div>

        <!-- Секция с арками -->
        <section class="arcs-section"style="background-image: url(<?php bloginfo('template_directory')?>/images/12.png)">
        <div class="bye">Голубика — это настоящий суперфуд! Она улучшает зрение, укрепляет иммунитет, помогает снизить уровень стресса и заботится о здоровье сердца.</div>
        </section>

        <!-- Секция с карточками -->
        <div class="cards-section">
    <div class="card">
        <img src="http://site/wp-content/uploads/2024/12/3.jpg" alt="Изображение 1">
    </div>
    <div class="card">
        <img src="http://site/wp-content/uploads/2024/12/4.jpg" alt="Изображение 2">
    </div>
    <div class="card">
        <img src="http://site/wp-content/uploads/2024/12/5.jpg" alt="Изображение 3">
    </div>
    </div>


     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <p class="qazx"><?php the_title(); ?></p>
     <?php endwhile; else: ?>
        <p class="qazx"> Записей нет.</p>
      <?php endif; ?>

    </main>
    <?php get_footer(); ?>