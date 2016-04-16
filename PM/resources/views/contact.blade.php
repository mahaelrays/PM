
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
        <h1 class="main-heading">تواصل معنا</h1>

        <div class="row">
            <div class="col-xs-12 col-sm-8">
                  
                    {!! Form::open(['route'=>'contact.store','method'=>'post']) !!}
                    <input type="text" placeholder="الاسم" name="name" required>
                    <input type="tel" placeholder="رقم الهاتف" name="tel" required>
                    <input type="email" placeholder="بريدك الالكتروني" name="email" required>
                    <input type="text" placeholder="عنوان الرسالة" name="title_message" required>
                    <textarea placeholder="الرسالة" name="message" required></textarea>
                    <div class="btn btn-white btn-block">
                        <span><input type="submit" value="إشترك"></span>
                    </div>
                    {!! Form::close()!!}
               
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="box black-box text-center">
                    <h3 class="main-heading">تفاصيل الاتصال</h3>

                    <p><i class="fa fa-envelope-o right-fa"></i> <a href="{{URL::asset('mailto:info@pmstu.com')}}">Info@pmstu.com </a></p>
                    <p><i class="fa fa-phone right-fa"></i> 0123456789</p>
                </div>
                <div class="box black-box text-center">
                    <h3 class="main-heading">للاشتراك فالقائمة البريدية</h3>

                    {!! Form::open(['/'=>'contact.storeEmail','method'=>'post']) !!}
                        <input type="email" placeholder="بريدك الالكتروني" name="email2" required>
                        <div class="btn btn-white btn-block">
                            <span><input type="submit" value="إشترك"></span>
                        </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
 
    </div>
</div>
</form>


@stop

