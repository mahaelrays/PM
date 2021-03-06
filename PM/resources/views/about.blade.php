
@extends('index')
@section('content')
<!--===============================
    CONTENT
===================================-->
<form method="POST" action="http://localhost:8000/contact" accept-charset="UTF-8">
<div class="fixed-bg">
    <img src="images/1.jpg">
</div>


<div class="main-content">
    <div class="container">
        <h1 class="main-heading">من نحن</h1>

        <div class="text-center div-padding">
            <p>رواد في الابداع الفني الرقمي لصنع الصورة الاحترافية.</p>
            <p>نعمل في صانع الصورة بفرق متخصصة ونسخر كافة الوسائل التقنية الحديثة لتعزيز مكانة عملائنا.</p>
            <p>الإبداع مزيج بين المنطق والخيال ... هكذا نحن </p>

            <a href="http://training.aljazeera.net/mritems/Documents/2016/2/16/e782075b14c84729a88e703e0776f66a_100.pdf" target="_blank" class="btn btn-white margin"><span>تحميل بروفايل الشركة</span></a>
            <a href="/gallery" class="btn btn-white margin"><span>عرض اعمالنا</span></a>
        </div>


        <div class="div-small-padding">
            <h1 class="main-heading">عملائنا</h1>

            <div class="row">
                <div class="col-xs-2 col-sm-1 no-padding text-center">
                    <a class="owl-btn prev-pro margin"><span class="fa fa-angle-right"></span></a>
                </div>

                <div class="col-xs-8 col-sm-10 no-padding">
                    <div id="owl-demo-products" class="owl-carousel-clients">
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-1.jpg">
                                <img src="images/logo-1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-2.jpg">
                                <img src="images/logo-2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-3.jpg">
                                <img src="images/logo-3.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-1.jpg">
                                <img src="images/logo-1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-2.jpg">
                                <img src="images/logo-2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-3.jpg">
                                <img src="images/logo-3.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-1.jpg">
                                <img src="images/logo-1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-2.jpg">
                                <img src="images/logo-2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-3.jpg">
                                <img src="images/logo-3.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-1.jpg">
                                <img src="images/logo-1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-2.jpg">
                                <img src="images/logo-2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-3.jpg">
                                <img src="images/logo-3.jpg" alt="img">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-2 col-sm-1 no-padding text-center">
                    <a class="owl-btn next-pro margin"><span class="fa fa-angle-left"></span></a>
                </div>
            </div>
        </div>

    </div>
</div>
</form>
@stop
