<?php get_header();?>

    <body>
        <main id="mainBG">
                <div id="BackBox" class="Backno OpacityOff OpacityOn">
                    <div class="top"></div>
                    <div class="back"></div>
                    <div class="bottom"></div>
                    <div class="right"></div>
                    <div class="left"></div>
                </div>
                <!-- TOPPAGE -->
                <section id="topPage" class="">
                    <div class="box">
                        <h1 id="boxe" class="" >PORT FOLIO</h1>
                    </div>
                    
                    <div id="topmark">
                        <img id="mark" class="" src="<?php echo get_template_directory_uri(); ?>/images/Top/マーク.png" alt="">
                    </div>
                    
        
                    <div class="startbox ">
                        <button id="strbox" class="" type="button">START</button>
                        <img  id="topbutton" class="" src="<?php echo get_template_directory_uri(); ?>/images/works/button.png">
                    </div>

                </section>
            
                <!-- TOPPAGE ここまで -->

            
                <article id="Allarea" class="Backno OpacityOff OpacityOn">

                    <!-- SERVICE -->
                    <section class="service ">

                        <div class="serviceTitleBox">
                            <h1 class="serviceTitle"><span>S</span>ERVICE</h1>
                        </div>

                        <div class="serviceSubTitlebox">
                            <p class="serviceSubTitle"><span>サービス</span></p>
                        </div>    

                        <div class="serviceContent">

                            <div class="web">
                                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/service/イラスト1.png" alt="">
                                <div class="Text">
                                    <h3><span>WEBデザイン</span></h3>
                                    <p>テキストテキストテキストテキスト<br>
                                    テキストテキストテキストテキスト<br>
                                    テキストテキストテキストテキスト
                                    </p>
                                </div>
                            </div>

                            <div class="site">
                                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/service/イラスト2.png" alt="">
                                <div class="Text">
                                    <h3><span>サイト制作</span></h3>
                                    <p>テキストテキストテキストテキスト<br>
                                    テキストテキストテキストテキスト<br>
                                    テキストテキストテキストテキスト
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="logo">
                            <div class="logoText">
                                <h3><span>ロゴ・アイコン制作</span></h3>
                                <p>テキストテキストテキストテキスト<br>
                                    テキストテキストテキストテキスト<br>
                                    テキストテキストテキストテキスト
                                    </p>
                            </div>

                            <div class="logoIcon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service/イラスト3.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service/イラスト4.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service/イラスト5.png" alt="">
                            </div>
                        </div>
                    </section>

                 <!-- SERVICEここまで -->


                 <!-- WORKs -->

                    <section class="works">
                            <div class="worksTitleBox">
                                <h1 class="worksTitle"><span>W</span>ORKS</h1>
                            </div>

                            <div class="worksSubTitleBox">
                                <p class="worksSubTitle"><span>実績</span></p>
                            </div>

                            <div  class="worksImgArea">
                                <div class="worksImgBox">
                                    <a href="http://port-folio.local/wp-content/uploads/2023/05/Work-respon.png"><img class="worksImg" src="<?php echo get_template_directory_uri(); ?>/images/works/Work.png" alt=""></a>
                                    <div class="worksContent">
                                        <h5>模写作品</h5>
                                        <p>制作期間　4日</p>
                                        <p>使用言語　HTML/CSS</p>
                                    </div>
                                </div>
                                <div class="worksImgBox">
                                    <a href="http://port-folio.local/wp-content/uploads/2023/05/Work-2-respon.png"><img class="worksImg" src="<?php echo get_template_directory_uri(); ?>/images/works/Work 2 .png" alt=""></a>
                                    <div class="worksContent">
                                        <h5>模写作品</h5>
                                        <p>制作期間　5日</p>
                                        <p>使用言語　HTML/CSS, WordPress</p>
                                    </div>
                                </div>
                                <div class="worksImgBox">
                                    <a href="http://port-folio.local/wp-content/uploads/2023/05/Work3-respon.png"><img class="worksImg" src="<?php echo get_template_directory_uri(); ?>/images/works/Work3.png" alt=""></a>
                                    <div class="worksContent">
                                        <h5>模写作品</h5>
                                        <p>制作期間　5日</p>
                                        <p>使用言語　HTML/CSS WordPress</p>
                                    </div>
                                </div>
                            </div>

                            <div class="readMore">
                                <button onclick="location.href='<?php echo home_url(); ?>/Works'" class="worksBtn" type="button">Read More...</button>
                                <img  class=worksBtnImg src="<?php echo get_template_directory_uri(); ?>/images/works/button.png">
                            </div>
                    </section>

                    <!-- works　ここまで -->

                    <!-- Abouts -->

                    <section class="abouts">

                        <div class="aboutsTitleBox">
                            <h1 class="aboutsTitle"> <span>A</span>BOUTS</h1>
                        </div>

                        <div class="aboutsSubTitleBox">
                            <p class="aboutsSubTitle"><span>プロフィール</span></p>
                        </div>

                        <div class="profile">
                            <div class="PFImgBox">
                                <img  class="PFImg" src="<?php echo get_template_directory_uri(); ?>/images/about/プロフィール.png" alt="">
                            </div>
                            

                            <div class="PFContent">
                                <div class="PFbox1">
                                    <h4>Pen Name</h4>
                                    <p class="name">アンコロ餅</p>
                                </div>

                                <div class="PFbox2">
                                    <h4>所在地</h4>
                                    <p>和歌山</p>
                                </div>

                                <div class="PFbox1">
                                    <h4>連絡先</h4>
                                    <p class="mail">ankororomochi8732@gmail.com</p>
                                </div>

                                <div class="PFbox2">
                                    <h4>取扱業務</h4>
                                    <div  class="PFbox3">
                                        <p>WEBデザイン</p>
                                        <p>サイト制作</p>
                                        <p>ロゴ・アイコン制作</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </article>
                <?php get_footer(); ?>
