<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="../dist/css/swiper.min.css">

    <!-- Demo styles -->
    <style>
    html, body {
        position: relative;
        height: 100%;
    }
    body {
  
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 500px;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
    }
    .swiper-slide {
        background-size:100%;
        background-position: center;
        border: 1px solid #FF552E;
    }
    .gallery-top {
        height: 40%;
        width: 100%;
       
    }
    .gallery-top .swiper-container{
        background-size: 20% auto
    }
    .gallery-thumbs {
        height: 10%;
        box-sizing: border-box;
        padding: 10px 0;
    }
    .gallery-thumbs .swiper-slide {
        height: 100%;
        opacity: 0.4;
    }
    .gallery-thumbs .swiper-slide-active {
        opacity: 1;
    }
    
    </style>
</head>
<body>
        <div class="nav"><a href="javascript :;" onClick="javascript :history.back(-1);">返回上一页</a>
            <div class="grey1">
                    <div>
                        <span>收藏</span>
                        <span>分享</span>       
                    </div>
            </div>
    </div>
    <div class="grey">
        <div>
            <span>更新：2019-01-21 12：00：00</span>
            <span>浏览：111人</span>
            <span>1人投递</span>    
        </div>
    </div>
   <div class="content_1">
        <b>狗狗训练火热报名中上海训狗基地有保障的训犬基地</b>
   </div>
    <!-- Swiper -->
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=639364211,768264877&fm=27&gp=0.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(/Application/Mobile/View/Static/images/zhaopin2.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=4073013376,3816411462&fm=27&gp=0.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=639364211,768264877&fm=27&gp=0.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(https://www.baidu.com/link?url=gaHsM1XZAcBhm4f92ZcGV3cf7ss0bXpsKJwrPQAfvz56bkDTAgZet2LgIYXklwDpsCVpCqJFA_ccQ9EsNme3xOwnGbzvk1ela-Vju6_Dx-IxVCOmELHgGLmdcE3BBLqUcnTvrkIilabhY2ofeSe2Q938uHEr8Y8ksMK-oMF6islvoi1xWrhxuRmAc0-dd1A3o-StSQcG2Wukq5UEQqEAlm4CKKvDoLrtpq4-JxAPaX33MidpOI0phbS0U6b9fJOpCSISYULRJl-wH3lyXuV_uTZA9D2k-sizuk90igDZUaU_25kp9Lu57aSYn6adHWa5Z47dehjZ_DNcXfaXyOc-nTK7l_fIp3y1_zIwyKgvU-4ph51YMplLG6PHXQYaTFB-ss7JwkzAV0cZxSr4HL2YVYCvpwDWOZlk3DXWHPJ3ZXiXbUElSXxWg4a6d6bXKW_DnnYhLsYPCTt1fFO0Q5KZUcziXiiPqLOW6mL-lpB7kB1Cbgd0iQ7D_TC7fMuCPh6zhqUpL-gxRAtk5B6tdm4u7-WNNicBumItAk7HZDQY-87peRor-myXRTunr9z1n0SKsVJZrk43cfgmbAw1KK5ol-rF-MjMUhdehyRC0_jrdMgCd480tcYlBEIME0wLGy_j&timg=https%3A%2F%2Fss0.bdstatic.com%2F94oJfD_bAAcT8t7mm9GUKT-xh_%2Ftimg%3Fimage%26quality%3D100%26size%3Db4000_4000%26sec%3D1548317688%26di%3D214ac54945aef92b41988b4d588e1291%26src%3Dhttp%3A%2F%2Fss.moemoe.la%2F0358bb70-203d-11e7-8af4-525400761152.jpg&click_t=1548317713896&s_info=1542_764&wd=&eqid=fb72ecd900017cae000000025c4973f8)"></div>
            <div class="swiper-slide" style="background-image:url(https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=4073013376,3816411462&fm=27&gp=0.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=639364211,768264877&fm=27&gp=0.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(https://www.baidu.com/link?url=gaHsM1XZAcBhm4f92ZcGV3cf7ss0bXpsKJwrPQAfvz56bkDTAgZet2LgIYXklwDpsCVpCqJFA_ccQ9EsNme3xOwnGbzvk1ela-Vju6_Dx-IxVCOmELHgGLmdcE3BBLqUcnTvrkIilabhY2ofeSe2Q938uHEr8Y8ksMK-oMF6islvoi1xWrhxuRmAc0-dd1A3o-StSQcG2Wukq5UEQqEAlm4CKKvDoLrtpq4-JxAPaX33MidpOI0phbS0U6b9fJOpCSISYULRJl-wH3lyXuV_uTZA9D2k-sizuk90igDZUaU_25kp9Lu57aSYn6adHWa5Z47dehjZ_DNcXfaXyOc-nTK7l_fIp3y1_zIwyKgvU-4ph51YMplLG6PHXQYaTFB-ss7JwkzAV0cZxSr4HL2YVYCvpwDWOZlk3DXWHPJ3ZXiXbUElSXxWg4a6d6bXKW_DnnYhLsYPCTt1fFO0Q5KZUcziXiiPqLOW6mL-lpB7kB1Cbgd0iQ7D_TC7fMuCPh6zhqUpL-gxRAtk5B6tdm4u7-WNNicBumItAk7HZDQY-87peRor-myXRTunr9z1n0SKsVJZrk43cfgmbAw1KK5ol-rF-MjMUhdehyRC0_jrdMgCd480tcYlBEIME0wLGy_j&timg=https%3A%2F%2Fss0.bdstatic.com%2F94oJfD_bAAcT8t7mm9GUKT-xh_%2Ftimg%3Fimage%26quality%3D100%26size%3Db4000_4000%26sec%3D1548317688%26di%3D214ac54945aef92b41988b4d588e1291%26src%3Dhttp%3A%2F%2Fss.moemoe.la%2F0358bb70-203d-11e7-8af4-525400761152.jpg&click_t=1548317713896&s_info=1542_764&wd=&eqid=fb72ecd900017cae000000025c4973f8)"></div>
            <div class="swiper-slide" style="background-image:url(https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=4073013376,3816411462&fm=27&gp=0.jpg)"></div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white" style=" background-color:#5BB9ED;opacity: 0.4;"></div>
        <div class="swiper-button-prev swiper-button-white" style=" background-color:#5BB9ED;opacity: 0.4;"></div>
    </div>
    <div class="swiper-container gallery-thumbs" style=" ">
        <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=639364211,768264877&fm=27&gp=0.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(https://www.baidu.com/link?url=gaHsM1XZAcBhm4f92ZcGV3cf7ss0bXpsKJwrPQAfvz56bkDTAgZet2LgIYXklwDpsCVpCqJFA_ccQ9EsNme3xOwnGbzvk1ela-Vju6_Dx-IxVCOmELHgGLmdcE3BBLqUcnTvrkIilabhY2ofeSe2Q938uHEr8Y8ksMK-oMF6islvoi1xWrhxuRmAc0-dd1A3o-StSQcG2Wukq5UEQqEAlm4CKKvDoLrtpq4-JxAPaX33MidpOI0phbS0U6b9fJOpCSISYULRJl-wH3lyXuV_uTZA9D2k-sizuk90igDZUaU_25kp9Lu57aSYn6adHWa5Z47dehjZ_DNcXfaXyOc-nTK7l_fIp3y1_zIwyKgvU-4ph51YMplLG6PHXQYaTFB-ss7JwkzAV0cZxSr4HL2YVYCvpwDWOZlk3DXWHPJ3ZXiXbUElSXxWg4a6d6bXKW_DnnYhLsYPCTt1fFO0Q5KZUcziXiiPqLOW6mL-lpB7kB1Cbgd0iQ7D_TC7fMuCPh6zhqUpL-gxRAtk5B6tdm4u7-WNNicBumItAk7HZDQY-87peRor-myXRTunr9z1n0SKsVJZrk43cfgmbAw1KK5ol-rF-MjMUhdehyRC0_jrdMgCd480tcYlBEIME0wLGy_j&timg=https%3A%2F%2Fss0.bdstatic.com%2F94oJfD_bAAcT8t7mm9GUKT-xh_%2Ftimg%3Fimage%26quality%3D100%26size%3Db4000_4000%26sec%3D1548317688%26di%3D214ac54945aef92b41988b4d588e1291%26src%3Dhttp%3A%2F%2Fss.moemoe.la%2F0358bb70-203d-11e7-8af4-525400761152.jpg&click_t=1548317713896&s_info=1542_764&wd=&eqid=fb72ecd900017cae000000025c4973f8)"></div>
                <div class="swiper-slide" style="background-image:url(https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=4073013376,3816411462&fm=27&gp=0.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=639364211,768264877&fm=27&gp=0.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(https://www.baidu.com/link?url=gaHsM1XZAcBhm4f92ZcGV3cf7ss0bXpsKJwrPQAfvz56bkDTAgZet2LgIYXklwDpsCVpCqJFA_ccQ9EsNme3xOwnGbzvk1ela-Vju6_Dx-IxVCOmELHgGLmdcE3BBLqUcnTvrkIilabhY2ofeSe2Q938uHEr8Y8ksMK-oMF6islvoi1xWrhxuRmAc0-dd1A3o-StSQcG2Wukq5UEQqEAlm4CKKvDoLrtpq4-JxAPaX33MidpOI0phbS0U6b9fJOpCSISYULRJl-wH3lyXuV_uTZA9D2k-sizuk90igDZUaU_25kp9Lu57aSYn6adHWa5Z47dehjZ_DNcXfaXyOc-nTK7l_fIp3y1_zIwyKgvU-4ph51YMplLG6PHXQYaTFB-ss7JwkzAV0cZxSr4HL2YVYCvpwDWOZlk3DXWHPJ3ZXiXbUElSXxWg4a6d6bXKW_DnnYhLsYPCTt1fFO0Q5KZUcziXiiPqLOW6mL-lpB7kB1Cbgd0iQ7D_TC7fMuCPh6zhqUpL-gxRAtk5B6tdm4u7-WNNicBumItAk7HZDQY-87peRor-myXRTunr9z1n0SKsVJZrk43cfgmbAw1KK5ol-rF-MjMUhdehyRC0_jrdMgCd480tcYlBEIME0wLGy_j&timg=https%3A%2F%2Fss0.bdstatic.com%2F94oJfD_bAAcT8t7mm9GUKT-xh_%2Ftimg%3Fimage%26quality%3D100%26size%3Db4000_4000%26sec%3D1548317688%26di%3D214ac54945aef92b41988b4d588e1291%26src%3Dhttp%3A%2F%2Fss.moemoe.la%2F0358bb70-203d-11e7-8af4-525400761152.jpg&click_t=1548317713896&s_info=1542_764&wd=&eqid=fb72ecd900017cae000000025c4973f8)"></div>
            <div class="swiper-slide" style="background-image:url(https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=4073013376,3816411462&fm=27&gp=0.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=639364211,768264877&fm=27&gp=0.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(https://www.baidu.com/link?url=gaHsM1XZAcBhm4f92ZcGV3cf7ss0bXpsKJwrPQAfvz56bkDTAgZet2LgIYXklwDpsCVpCqJFA_ccQ9EsNme3xOwnGbzvk1ela-Vju6_Dx-IxVCOmELHgGLmdcE3BBLqUcnTvrkIilabhY2ofeSe2Q938uHEr8Y8ksMK-oMF6islvoi1xWrhxuRmAc0-dd1A3o-StSQcG2Wukq5UEQqEAlm4CKKvDoLrtpq4-JxAPaX33MidpOI0phbS0U6b9fJOpCSISYULRJl-wH3lyXuV_uTZA9D2k-sizuk90igDZUaU_25kp9Lu57aSYn6adHWa5Z47dehjZ_DNcXfaXyOc-nTK7l_fIp3y1_zIwyKgvU-4ph51YMplLG6PHXQYaTFB-ss7JwkzAV0cZxSr4HL2YVYCvpwDWOZlk3DXWHPJ3ZXiXbUElSXxWg4a6d6bXKW_DnnYhLsYPCTt1fFO0Q5KZUcziXiiPqLOW6mL-lpB7kB1Cbgd0iQ7D_TC7fMuCPh6zhqUpL-gxRAtk5B6tdm4u7-WNNicBumItAk7HZDQY-87peRor-myXRTunr9z1n0SKsVJZrk43cfgmbAw1KK5ol-rF-MjMUhdehyRC0_jrdMgCd480tcYlBEIME0wLGy_j&timg=https%3A%2F%2Fss0.bdstatic.com%2F94oJfD_bAAcT8t7mm9GUKT-xh_%2Ftimg%3Fimage%26quality%3D100%26size%3Db4000_4000%26sec%3D1548317688%26di%3D214ac54945aef92b41988b4d588e1291%26src%3Dhttp%3A%2F%2Fss.moemoe.la%2F0358bb70-203d-11e7-8af4-525400761152.jpg&click_t=1548317713896&s_info=1542_764&wd=&eqid=fb72ecd900017cae000000025c4973f8)"></div>
            <div class="swiper-slide" style="background-image:url(https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=4073013376,3816411462&fm=27&gp=0.jpg)"></div>
        </div>
    </div>
    <div>
            <div style="margin:10px 0;"> 
                </div>
                <div style="margin:10px 0;"> 
                        价格：<span style="color:#FF552E">500元 &nbsp&nbsp&nbsp</span>
                     <span> 类       别：宠物训练</span>
                 </div>
                <div >  区域:<span>&nbsp浦东-陆家嘴 &nbsp&nbsp&nbsp</span><span>联系人：爱宠之家&nbsp&nbsp&nbsp</span><img src="https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=1377547971,3453629665&fm=26&gp=0.jpg" alt="" style="height:30px;width:30px;position: relative;top: 10px;"></div>
                <!-- <img src="//img.58cdn.com.cn/ds/detail/sp-detail@1x.png"> -->
                
                <div class="content_3">
                   <span class="want">查看电话号码</span>
                </div>
    </div>
<div class="h3">
    <h3 style="background:coral;color:cornsilk">详情描述</h3><h3 style="color:grey">相关推荐</h3>
</div>

<div>

   <p><b>担心狗狗在家不听话？如果你有，那么快来报名参加爱家狗狗培训班吧！</b></p> 
   <p><b> 免除您的后顾之忧！</b></p> 
   <p>
        上海宠物学校共有退役训狗师十六名，同时拥有舒适的生活环境和完善的训练设施。打造了具有国际一流水准的标准化星级犬舍、占地面积超大的户外训练场、设施完备的室内训练场、多样化的犬只敏捷性训练器材等专业化训练场地设施，为犬只的畅快生活、闲暇欢愉和专业训练提供了完美的硬件设施保障。
    
        专业训犬师手把手100%教会你纠正你家狗狗的以下不良习惯：适合2月龄-5岁之间的犬只参加狗狗。
   </p>

   <p><b> 训练内容：</b></p> 
    
    
      随地大小便，出门拖拽，乱叫，扑人，咬手，咬家具，撕扯衣服，随地捡食，翻垃圾桶，上床和沙发，牵引不走，攻击主人，攻击陌生人和犬，出门咬牵引绳，乱叼拖鞋，追车，怕洗澡，胆小改善，不接受护理，过度兴奋，独自在家焦虑，挑食，护食，抢食，在电梯里乱闹，吃动物粪便，用双腿爬跨主人，怕上楼梯，冲陌生人叫，追逐人和动物，咬电线，怕鞭炮声等。 
    
       爱家训狗学校为所有在校学员提供快乐生活方式和全套专业护理、美容、健康等服务。 秉承诚信经营、将宠物事业进行到底的服务理念，引导我们的宝宝心理、生理的健康发展
       <p><b>1、住宿环境</b></p> 
    ：
    
      园区严格按照适合狗狗的生活习性建造，室内装潢温馨、舒适。采用顶级的人犬同住的家庭式快乐生活方式，24小时专业宠物护理员为您的宝贝提供一对一的爱心呵护，完全模拟家庭环境。
      <p><b>    2、健康饮食：</b></p> 
 
    
     为狗狗们提供健康的饮食计划，根据宝贝的特点及在家的饮食情况来制定科学的饮食安排，肠胃不好的宝贝在我们这里经过我们专业的护理人员也都可以调理到最佳状态。宠物们能健康饮食，快乐成长是我们宠爱到家最真切的理念！
     <p><b>  3、运动保健：</b></p> 
   
    
      狗狗每天室外活动时间3-5小时，有专业的训练场地、专业的宠物护理人员。随时随地的训练，更有助于改善不好的行为，建立与主人良好的生活习惯。同样的训练时间获得更好的训练效果。


    <p><b>    4、美容护理：</b></p> 
      所有员工都进行美容、护理、饲养管理、兽医知识和犬行为的培训，我们会定期安排为宝贝们洗澡，包括洗毛发、挤肛门腺、清洁耳朵、剪指甲、剪脚底毛等。洗澡吹风同时，美容师会仔细检查宝贝的皮肤，耳朵等，做一次身体检查，保证每一个宝贝是健康的，干净的，漂亮的。问：如果我们在寄养培训期间想念宝宝了怎么办？答：家长可以每周看到自己宝贝的两张相片。 生活照训练照都可以看到。参加爱家专业训练的宝贝狗狗都将获赠一张毕业纪念的 VCD光盘。
    
    接送服务：学校提供舒适的座驾接送狗狗，需提前两天预约。
</div>
<h1>公司介绍</h1>
<div>
   <p>
        高端精品宠物店
        致力于精致的 人性化温和服务
   </p>
   <p>公司图片</p>
   <div>
    <img src="../Static/images/jmpic/1442452784680942491.jpg" alt="">
    <img src="../Static/images/jmpic/1442452784680942491.jpg" alt="">
   </div>
</div>

    <!-- Swiper JS -->
    <script src="../dist/js/swiper.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,
        loop:true,
        loopedSlides: 5, //looped slides should be the same     
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        touchRatio: 0.2,
        loop:true,
        loopedSlides: 5, //looped slides should be the same
        slideToClickedSlide: true
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;
    
    </script>
</body>
<style>
 a{
            text-decoration: none;
        }
    li{
        list-style: none;
    }
    img{
        display: inline-block;
        height: auto;
        max-width: 30%;
    }
.nav{
    height: 50px;
    width: 100%;
    background-color: #5BB9ED;
    color: white;
    text-align: left;
    line-height: 50px;
}
.grey{
    height: 50px;
    text-align: left;
    line-height: 50px;
    color:gray;
    font-size: 10px;
}
.grey1{
    text-align: right;
    color: #FF552E;
    font-size: 14px;
    float:right;
}
.content_1{
    font-size: 20px;
    display: flex;
    justify-content: space-between;
    
}
.content_1 b:nth-last-child(2){
    display: block;
}
.content_1 b:nth-last-child(1){
    display: block;
   color: #FF552E;
}
.content_2{
    padding: 20px 0;
    position: relative;
}
.content_2 img{
position: absolute;
top: 4px;
}
.content_2 span{
position: absolute;
/* left: 20px; */
top: 10px;
}
.want{
    height: 5opx;
    display: block;
    width: 30%;
    line-height: 50px;
    background-color: #FF552E;
    text-align: center;
    color: aliceblue;
    font-size: 20px;
    
}
.content_3{
    display: flex;
    text-align: center;
    justify-content:start;
    align-self:center;
}
.content_3 span{
    text-align: center;
    height: 50px;
    line-height: 50px;
    display: block
}
h4{
    color: grey
}
h3{
    width: 20%;
    padding: 10px;
}
.h3{
    display: flex;
}
.cen_1{
    display: flex;
    justify-content: space-around
}
.photo{
    width: 100%;
    height: 200px;
    background: #FF552E
    
}
</style>
</html>