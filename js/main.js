const btn =document.getElementsByClassName('startbox');
const TopPage = document.getElementById('topPage');
btn[0].addEventListener('click', () => {
    let animation = TopPage.animate(

        [
            {opacity: 1},
            {opacity: 0},
            
        ],

        {
            duration: 2500,
            fill: 'forwards'
            
        }
        );


        animation.addEventListener ('finish', () => {
            const nones = document.getElementById('topPage');
            nones.classList.add('none');   ///TOPページ消える

            const BackPage = document.querySelectorAll('.Backno');
            console.log(BackPage);
            for(i = 0; i < BackPage.length; i++) {
                 BackPage[i].classList.remove('Backno');
                };

            const AlArea = document.querySelectorAll('.OpacityOn');
            
            for(i = 0; i < AlArea.length; i++) {

               let animation = AlArea[i].animate(

                    [
                        {opacity: 0},
                        {opacity: 1},
                        
                    ],
            
                    {
                        duration: 1500,
                        fill: 'forwards'   
                    }
                );
            };

            ScrollReveal().reveal('.serviceTitleBox', { 

                duration: 7000, // アニメーションの完了にかかる時間
                viewFactor: 0, // 0~1,どれくらい見えたら実行するか
                origin: 'top',
                distance: '50px',
            
            });

            ScrollReveal().reveal('.serviceSubTitle', { 

                duration: 7000, // アニメーションの完了にかかる時間
                viewFactor: 0, // 0~1,どれくらい見えたら実行するか
                origin: 'bottom',
                distance: '50px',
            
            });

           

            ScrollReveal().reveal('.web', { 

                duration: 6000, // アニメーションの完了にかかる時間
                viewFactor: 0, // 0~1,どれくらい見えたら実行するか
                origin: 'left',
                distance: '20px',
            
            });

            ScrollReveal().reveal('.site', { 
        
                duration: 6500, // アニメーションの完了にかかる時間
                viewFactor: 0, // 0~1,どれくらい見えたら実行するか
                origin: 'left',
                distance: '50px',
            
            });

            ScrollReveal().reveal('.logo', { 
        
                duration: 8000, // アニメーションの完了にかかる時間
                viewFactor: 0, // 0~1,どれくらい見えたら実行するか
                origin: 'right',
                distance: '50px',
            
            });



            ScrollReveal().reveal('.worksTitleBox', { 

                duration: 3000, // アニメーションの完了にかかる時間
                viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
                origin: 'left',
                distance: '50px',
            
            });
            
            ScrollReveal().reveal('.worksSubTitleBox', { 
        
            duration: 3000, // アニメーションの完了にかかる時間
            viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
            origin: 'bottom',
            distance: '50px',
        
            });
            

            const Works = document.querySelectorAll('.worksImg')
            ScrollReveal().reveal(Works[0],{
                duration: 2500, // アニメーションの完了にかかる時間
                        viewFactor: 0.3, // 0~1,どれくらい見えたら実行するか
                        origin: 'bottom',
                        distance: '50px',
            });
        
            ScrollReveal().reveal(Works[1],{
                duration: 3000, // アニメーションの完了にかかる時間
                        viewFactor: 0.3, // 0~1,どれくらい見えたら実行するか
                        origin: 'bottom',
                        distance: '50px',
            });
        
            ScrollReveal().reveal(Works[2],{
                duration: 4000, // アニメーションの完了にかかる時間
                        viewFactor: 0.3, // 0~1,どれくらい見えたら実行するか
                        origin: 'bottom',
                        distance: '50px',
            });
        
            ScrollReveal().reveal('.readMore',{
                        duration: 2000, // アニメーションの完了にかかる時間
                        viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
        
            });
        
            ScrollReveal().reveal('.aboutsTitleBox',{
                duration: 2000, // アニメーションの完了にかかる時間
                viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
                origin: 'right',
                distance: '100px',
        
        });
        
            ScrollReveal().reveal('.aboutsSubTitleBox',{
                duration: 2000, // アニメーションの完了にかかる時間
                viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
                origin: 'bottom',
                distance: '50px',
        
        });
        
            ScrollReveal().reveal('.PFImgBox',{
                duration: 2000, // アニメーションの完了にかかる時間
                viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
                origin: 'top',
                distance: '100px',
        
            });
        
            ScrollReveal().reveal('.PFbox1',{
                duration: 2000, // アニメーションの完了にかかる時間
                viewFactor: 0.2, // 0~1,どれくらい見えたら実行するか
                origin: 'left',
                distance: '100px',
        
            });
        
            ScrollReveal().reveal('.PFbox2',{
                duration: 2000, // アニメーションの完了にかかる時間
                viewFactor: 0.1, // 0~1,どれくらい見えたら実行するか
                origin: 'right',
                distance: '100px',
        
            });
    
        });

});



    