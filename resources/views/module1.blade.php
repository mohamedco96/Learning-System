@extends('layouts.main')

@section('content')
    <div class="container" style="margin-right: 100px; margin-top: 50px">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">الأهداف التعليمية</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">التعليمات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                    aria-controls="pills-contact" aria-selected="false">المحتوى التعليمي</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab1" data-toggle="pill" href="#pills-contact1" role="tab"
                    aria-controls="pills-contact1" aria-selected="false">الأنشطة التعليمية</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact2" role="tab"
                    aria-controls="pills-contact2" aria-selected="false">التقييم البنائي</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent" style="margin-top: 30px">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> 
                <ol>
                    <li style="line-height: 2;"><strong><span style="color: rgb(0, 0, 0); font-family: Impact, Charcoal, sans-serif;">يذكر مفهوم الفيديو الرقمي التفاعلي .</span></strong></li>
                    <li style="line-height: 2;"><span style="font-family: Impact, Charcoal, sans-serif;"><span style="color: rgb(0, 0, 0);"><strong>يعدد مميزات الفيديو الرقمي التفاعلي .</strong></span></span></li>
                    <li style="line-height: 2;"><span style="font-family: Impact, Charcoal, sans-serif;"><span style="color: rgb(0, 0, 0);"><strong>يقارن بين الفيديو الرقمي والفيديو الرقمي التفاعلي .</strong></span></span></li>
                    <li style="line-height: 2;"><span style="font-family: Impact, Charcoal, sans-serif;"><span style="color: rgb(0, 0, 0);"><strong>يحدد أسباب استخدام الفيديو الرقمي التفاعلي في العملية التعليمية .</strong></span></span></li>
                    <li style="line-height: 2;"><span style="font-family: Impact, Charcoal, sans-serif;"><span style="color: rgb(0, 0, 0);"><strong>يحدد مكونات الفيديو الرقمي التفاعلي .</strong></span></span></li>
                    <li style="line-height: 2;"><span style="font-family: Impact, Charcoal, sans-serif;"><span style="color: rgb(0, 0, 0);"><strong>يعدد مواصفات الفيديو الرقمي التفاعلي الفعال .</strong></span></span></li>
                    <li style="line-height: 2;"><strong><span style="color: rgb(0, 0, 0); font-family: Impact, Charcoal, sans-serif;">يشرح معايير تصميم الفيديو الرقمي التفاعلي .</span></strong></li>
                </ol>
          
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> لكن لا بد أن
                أوضح
                لك أن كل هذه الأفكار المغلوطة حول استنكار النشوة وتمجيد الألم نشأت بالفعل،
                وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة البشرية، فلا أحد يرفض أو يكره أو يتجنب الشعور
                بالسعادة،</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"> لكن لا بد أن
                أوضح
                لك أن كل هذه الأفكار المغلوطة حول استنكار النشوة وتمجيد الألم نشأت بالفعل،
                وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة البشرية، فلا أحد يرفض أو يكره أو يتجنب الشعور
                بالسعادة،</div>
            <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab1"> لكن لا بد أن
                أوضح
                لك أن كل هذه الأفكار المغلوطة حول استنكار النشوة وتمجيد الألم نشأت بالفعل،
                وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة البشرية، فلا أحد يرفض أو يكره أو يتجنب الشعور
                بالسعادة،</div>
            <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2"> لكن لا بد أن
                أوضح
                لك أن كل هذه الأفكار المغلوطة حول استنكار النشوة وتمجيد الألم نشأت بالفعل،
                وسأعرض لك التفاصيل لتكتشف حقيقة وأساس تلك السعادة البشرية، فلا أحد يرفض أو يكره أو يتجنب الشعور
                بالسعادة،</div>
        </div>
    </div>
@endsection
