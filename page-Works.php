<?php get_header();?>

    <body>
        <main id="WorksPage">
                <div id="WorksBackBox" class=>
                    <div class="top"></div>
                    <div class="back"></div>
                    <div class="bottom"></div>
                    <div class="right"></div>
                    <div class="left"></div>
                </div>
            
                <article id="WorksPageArea" class="">

                 <!-- WORKs -->

                    <section class="worksPg">
                            <div class="worksTitleBox">
                                <h1 class="worksPageTitle"><span>W</span>ORKS</h1>
                            </div>

                            <div class="worksSubTitleBox">
                                <p class="worksSubTitle"><span>実績</span></p>
                            </div>

                            <div  class="worksPageImgArea">
                                <div class="worksPageImgBox">
                                    <a href="http://port-folio.local/wp-content/uploads/2023/05/Work-respon.png"><img class="worksPageImg" src="<?php echo get_template_directory_uri(); ?>/images/works/Work.png" alt=""></a>
                                    <div class="worksContent">
                                        <h5>模写作品</h5>
                                        <p>制作期間　4日</p>
                                        <p>使用言語　HTML/CSS</p>
                                    </div>
                                </div>
                                <div class="worksPageImgBox">
                                    <a href="http://port-folio.local/wp-content/uploads/2023/05/Work-2-respon.png"><img class="worksPageImg" src="<?php echo get_template_directory_uri(); ?>/images/works/Work 2 .png" alt=""></a>
                                    <div class="worksContent">
                                        <h5>模写作品</h5>
                                        <p>制作期間　5日</p>
                                        <p>使用言語　HTML/CSS, WordPress</p>
                                    </div>
                                </div>
                                <div class="worksPageImgBox">
                                    <a href="http://port-folio.local/wp-content/uploads/2023/05/Work3-respon.png"><img class="worksPageImg" src="<?php echo get_template_directory_uri(); ?>/images/works/Work3.png" alt=""></a>
                                    <div class="worksContent">
                                        <h5>模写作品</h5>
                                        <p>制作期間　5日</p>
                                        <p>使用言語　HTML/CSS WordPress</p>
                                    </div>
                                </div>
                            </div>

                            <div class="WorksPageRM">
                                <button onclick="location.href='<?php echo esc_url( home_url( '/' ) ); ?>'" class="worksBtn" type="button">Back to top...</button>
                                <img  class=worksBtnImg src="<?php echo get_template_directory_uri(); ?>/images/works/button.png">
                            </div>


                           
                    </section>

                    <!-- works　ここまで -->

                </article>
                <?php get_footer(); ?>