@php
$users = DB::table('users')
    ->where('id', Auth::user()->id)
    ->get();

foreach ($users as $user) {
    // echo $user->email;
}
@endphp

@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-lg-9">
                {{--  --}}
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                            role="tab" aria-controls="pills-profile" aria-selected="true">التعليمات</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                            aria-controls="pills-home" aria-selected="true">الأهداف التعليمية</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                            aria-controls="pills-home" aria-selected="false">الأهداف التعليمية</a>
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
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab3" data-toggle="pill" href="#pills-contact3" role="tab"
                            aria-controls="pills-contact3" aria-selected="false">المكتبة الإئرائية</a>
                    </li>
                </ul>
                {{--  --}}

                {{-- بداية محتوى الموديول --}}
                <div class="tab-content" id="pills-tabContent" style="margin-top: 30px">

                    {{-- الأهداف التعليمية --}}
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <p dir="RTL"
                            style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Open Sans";text-align:right;'>
                            <strong><span style='font-size:19px;line-height:107%;font-family:"Open Sans";'>
                                    الهدف العام للموديول /
                                    &nbsp;
                                </span></strong>
                        </p>
                        <p dir="RTL"
                            style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Open Sans";text-align:right;'>
                            <span style='font-size:19px;line-height:107%;font-family:"Open Sans";'>
                                إكتساب مهارات إعداد مشهد كرتونى ووضع الشخصيات داخل المشهد

                            </span>
                        </p>
                        <p dir="RTL"
                            style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Open Sans";text-align:right;'>
                            <strong><span style='font-size:19px;line-height:107%;font-family:"Open Sans";'>الأهداف
                                    الإجرائية:</span></strong>
                        </p>
                        <p dir="RTL"
                            style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Open Sans";text-align:right;'>
                            <strong><span style='font-size:19px;line-height:107%;font-family:"Open Sans";'>عزيزى الطالب/ة
                                    عليك بعد دراسة هذا الموديول
                                    أن تكون قادرا على أن </span></strong>
                        </p>
                        <ol style="list-style-type: decimal;margin-left:-0.5in;">
                            <li><span style='line-height:150%;font-family:"Open Sans";'>
                               	تعد مشروع جديد برنامج Cartoon Animator

                                </span></li>
                            </p>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>تعرض ملفات العمل للبرنامج
                                    </span></li>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>  تعدل فى خصائص عناصر العمل داخل البرنامج
                                    </span></li>
                            <li><span style='line-height:150%;font-family:"Open Sans";'> توضح خطوات إدارج شخصيات لمساحة العمل بالبرنامج
                                    </span></li>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>تعرض خصائص الشخصيات المدرجة داخل البرنامج
                                        </span></li>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>تضيف مشهد متكامل للبرنامج
                                        </span></li>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>تعدل على وضعيات الشخصيات
                                        </span></li>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>تشرح خطوات إدراج عناصر المشهد
                                        </span></li>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>تطبق خطوات تغير تعبيرات الوجه للشخصيات
                                        </span></li>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>تميز بين خطوات إدراج صورة للمشهد
                                        </span></li>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>تستخدم أدوات تحرير العناصر
                                        </span></li>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>	تعرض خطوات إضافة عظام للشخصيات
                                   &nbsp;</span></li>
                        </ol>

                        {{-- ////////////////////////////// Support
                        ////////////////////////////// --}}
                        {{-- automatic Support --}}

                        @if ($user->support === 'automatic')
                            <div id="manual">
                                <strong>الدعم والمساعدة</strong>
                                <video width="320" height="200" controls>
                                    <source src="./video/module3/automatic support/الاهداف الموديول الثالث.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @endif

                        {{-- manual Support --}}

                        @if ($user->support === 'manual')
                            <hr>
                            <p style="text-align: center;"><span style="font-size: 28px;"><span
                                        style='font-family: "Arial Black", Gadget, sans-serif; color: rgb(228, 135, 15);'><strong>
                                            الدعم والمساعدة</strong></span></span>
                            </p>
                            <p style="text-align: center">
                                <button type="button" class="btn btn-primary" onclick="text1()">نص</button>
                                <button type="button" class="btn btn-primary" onclick="photo1()">صورة</button>
                                <button type="button" class="btn btn-primary" onclick="video1()">فيديو</button>
                            </p>
                            {{-- دعم نصي --}}
                            <div class="imgbox" id="box1.1" style="display: none; margin-top: 20px">
                                <p>لكى تتمكن من الدراسة داخل بيئة التعلم الافتراضية عليك التعرف على الأهداف التعليمية
                                    للموديول اولا&nbsp;</p>
                                <p>الهدف العام للموديول :&nbsp;</p>
                                <p>إكتساب مهارات إعداد مشهد كرتونى ووضع الشخصيات داخل المشهد&nbsp;</p>
                                <p>الأهداف الإجرائية&nbsp;</p>
                                <ul>
                                    <li style="line-height: 2;">تعد مشروع جديد برنامج Cartoon Animator</li>
                                    <li style="line-height: 2;">تعرض ملفات العمل للبرنامج </li>
                                    <li style="line-height: 2;">تعدل فى خصائص عناصر العمل </li>
                                    <li style="line-height: 2;">توضح خطوات إدارج شخصيات لمساحة العمل
                                        </li>
                                    <li style="line-height: 2;">تعرض خصائص الشخصيات المدرجة داخل البرنامج </li>
                                    <li style="line-height: 2;">تضيف مشهد متكامل للبرنامج
                                        &nbsp;</li>
                                    <li style="line-height: 2;">تعدل على وضعيات الشخصيات </li>
                                    <li style="line-height: 2;">تشرح خطوات إدراج عناصر المشهد  </li>
                                    <li style="line-height: 2;">تطبق خطوات تغير تعبيرات الوجه للشخصيات </li>
                                    <li style="line-height: 2;">تميز بين خطوات إدراج صورة للمشهد </li>
                                    <li style="line-height: 2;">تستخدم أدوات تحرير العناصر </li>
                                    <li style="line-height: 2;">تعرض خطوات إضافة عظام للشخصيات</li>

                                </ul>
                            </div>
                            {{-- دعم مصور --}}
                            <div class="imgbox" id="box2.1" style="display: none">
                                <p style="text-align: center"><img src="./video/module3/Manual support/الاهداف -01.jpg"
                                        alt="Girl in a jacket" width="800" height="600"></p>
                            </div>
                            {{-- دعم مرئي --}}
                            <div class="imgbox" id="box3.1" style="display: none">
                                <p style="text-align: center"><video width="800" height="600" controls>
                                        <source src="./video/module3/automatic support/الاهداف الموديول الثالث.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video></p>
                            </div>
                        @endif


                    </div>

                    {{-- التعليمات --}}
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <p dir="RTL"
                            style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'>
                            <span style='font-size:19px;line-height:107%;font-family:"Open Sans";'>عزيزى الطالب/ة عليك إتباع
                                الخطوات التالية لضمان اتمام دراسة الموديول بنجاح :&nbsp;</span>
                        </p>
                        <ul style="list-style-type: undefined;margin-left:-0.5in;">
                            <li><span
                                    style='line-height:107%;font-family:"Open Sans";font-family:"Open Sans";font-size:14.0pt;'>الإطلاع
                                    على الهدف العام لدراسة الموديول&nbsp;</span></li>
                            <li><span
                                    style='line-height:107%;font-family:"Open Sans";font-family:"Open Sans";font-size:14.0pt;'>الاطلاع
                                    على الاهداف الإجرائية لدراسة الموديول&nbsp;</span></li>
                            <li><span
                                    style='line-height:107%;font-family:"Open Sans";font-family:"Open Sans";font-size:14.0pt;'>الإطلاع
                                    على الخطة الزمنية لدراسة الموديول&nbsp;</span></li>
                            <li><span
                                    style='line-height:107%;font-family:"Open Sans";font-family:"Open Sans";font-size:14.0pt;'>يمكنك
                                    الاستعانة بوسائط الدعم المتاحة فى كل نافذة، لتتمكن من عملية الدراسة بنجاح&nbsp;</span>
                            </li>
                            <li><span
                                    style='line-height:107%;font-family:"Open Sans";font-family:"Open Sans";font-size:14.0pt;'>الإطلاع
                                    على محتوى الموديول بدقة متوافر محتوى نصى &ndash; فيديو</span></li>
                            <li><span
                                    style='line-height:107%;font-family:"Open Sans";font-family:"Open Sans";font-size:14.0pt;'>تسليم
                                    النشاط فى الوقت المحدد&nbsp;</span></li>
                            <li><span
                                    style='line-height:107%;font-family:"Open Sans";font-family:"Open Sans";font-size:14.0pt;'>الإجابة
                                    عن اسئلة التقييم البنائى للموديول&nbsp;</span></li>
                            <li><span
                                    style='line-height:107%;font-family:"Open Sans";font-family:"Open Sans";font-size:14.0pt;'>يلزم
                                    اجتياز الموديول بنسبة 90% للانتقال للموديول التالى&nbsp;</span></li>
                        </ul>
                        {{-- ////////////////////////////// Support
                        ////////////////////////////// --}}
                        {{-- automatic Support --}}

                        @if ($user->support === 'automatic')
                            <div id="manual">
                                <strong>الدعم والمساعدة</strong>
                                <video width="320" height="200" controls>
                                    <source src="./video/module1/automatic support/التعليمات .mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @endif

                        {{-- manual Support --}}

                        @if ($user->support === 'manual')
                            <hr>
                            <p style="text-align: center;"><span style="font-size: 28px;"><span
                                        style='font-family: "Arial Black", Gadget, sans-serif; color: rgb(228, 135, 15);'><strong>الدعم
                                            والمساعدة</strong></span></span>
                            </p>
                            <p style="text-align: center">
                                <button type="button" class="btn btn-primary" onclick="text2()">نص</button>
                                <button type="button" class="btn btn-primary" onclick="photo2()">صورة</button>
                                <button type="button" class="btn btn-primary" onclick="video2()">فيديو</button>
                            </p>
                            {{-- دعم نصي --}}
                            <div class="imgbox" id="box1.2" style="display: none; margin-top: 20px">
                                <p>عليك عزيزى الطالب/ة اتباع التعليمات التالية لضمان اتمام دراسة الموديول بنجاح
                                    &nbsp;</p>
                                <p> الموديول الثالث:  &nbsp;</p>
                                <p>مهارات إنتاج فيديو كرتونى ثنائى البعد باستخدام  Cartoon Animator &nbsp;</p>
                                <p>تعليمات الموديول &nbsp;</p>
                                <ul>
                                    <li style="line-height: 2;">تعرف على بيانات الباحثة أدوات التواصل لكى تتمكن من التواصل
                                        فى حالة الضرورة </li>
                                    <li style="line-height: 2;">اطلع على الخطة الزمنية لدراسة الموديول </li>
                                    <li style="line-height: 2;">اطلع على الجدول الزمنى لدراسة الموديول </li>
                                    <li style="line-height: 2;">اطلع على محتوى الموديول ومتوافر لديك سواء محتوى نصى وفيديو
                                        التعليمية</li>
                                    <li style="line-height: 2;">قم بتنفيذ النشاط وتسليمه فى الوقت المحدد </li>
                                    <li style="line-height: 2;">- بعد دراستك الموديول وتسليم النشاط قم بأداء التقييم البنائى
                                        للموديول، ولا يسمح لك بالانتقال إلى الموديول الثالى
                                        إلا فى حالة حصولك على درجة الاتقان (85%) &nbsp;</li>
                                    <li style="line-height: 2;">ويسمح لك بإعادة دراسة محتوى الموديول وإعادة الاختبار عدة
                                        مرات فى حالة عدم تحقيق درجة الاتقان.</li>
                                    <li style="line-height: 2;">تتيح لك البيئة اساليب دعم ومساعدة لكى تتمكن من اتمام المهام
                                            عليك الاطلاع عليها اسفل الشاشة</li>

                                </ul>
                            </div>
                            {{-- دعم مصور --}}
                            <div class="imgbox" id="box2.2" style="display: none">
                                <p style="text-align: center"><img src="./video/module3/Manual support/تعليمات-01.jpg"
                                        alt="Girl in a jacket" width="800" height="600"></p>
                            </div>
                            {{-- دعم مرئي --}}
                            <div class="imgbox" id="box3.2" style="display: none">
                                <p style="text-align: center"><video width="800" height="600" controls>
                                        <source src="./video/module1/automatic support/التعليمات .mp4 " type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video></p>
                            </div>
                        @endif


                    </div>

                    {{-- المحتوى التعليمي --}}
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="container" style="margin-top: 60px">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p><span
                                            style="color: rgb(228, 40, 7); font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                    style="font-size: 24px;">الدرس الأول</span></strong></span></p>
                                    <p><span
                                            style="color: rgb(251, 178, 99); font-family: 'Open Sans', Charcoal, sans-serif;"><span
                                                style="font-size: 20px; color: rgb(0, 0, 0);"><strong>
                                                    سوف نتعرف فى هذا الدرس على كيفية إنشاء مشروع جديد والتعامل مع محتويات البرنامج
                                                </strong></span></span></p>
                                    <p><a href="https://drive.google.com/file/d/1I3odlDvhfhxLEUKgnU-9kCbGBO3gpH1D/view?usp=sharing"
                                            rel="noopener noreferrer" target="_blank"><span
                                                style="font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                        style="font-size: 20px; color: rgb(28, 146, 181);">
                                                        تحميل المحتوى نصى
                                                    </span></strong></span></a></p>
                                </div>
                                <div class="col-sm-6" style="">
                                    <video width="320" height="240" controls>
                                        <source src="./video/module3/le1 M3.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p><a href="https://www.facebook.com/dina.gwida.5/" target="_blank"><span
                                                style="font-family: 'Open Sans', Charcoal, sans-serif; font-size: 20px; "
                                                rel="noopener noreferrer"><strong><span
                                                        style="color: rgb(28, 146, 181);">التواصل مع
                                                        الباحثة</span></strong></span></a></p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-6">
                                    <p><span
                                            style="color: rgb(228, 40, 7); font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                    style="font-size: 24px;">الدرس الثاني</span></strong></span></p>
                                    <p><span
                                            style="color: rgb(251, 178, 99); font-family: 'Open Sans', Charcoal, sans-serif;"><span
                                                style="font-size: 20px; color: rgb(0, 0, 0);"><strong>
                                                    سوف نتعرف فى هذا الدرس على كيفية أدراج شخصيات جاهزة والتعديل عليها


                                                </strong></span></span></p>
                                    <p><a href="https://drive.google.com/file/d/1g-zuSZuH6srnjEfmftkibcVOKUoO9ueq/view?usp=sharing"
                                            rel="noopener noreferrer" target="_blank"><span
                                                style="font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                        style="font-size: 20px; color: rgb(28, 146, 181);">تحميل المحتوى
                                                        نصى</span></strong></span></a></p>
                                </div>
                                <div class="col-sm-6" style="">
                                    <video width="320" height="240" controls>
                                        <source src="./video/module3/le2 M3.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p><a href="https://www.facebook.com/dina.gwida.5/" target="_blank"><span
                                                style="font-family: 'Open Sans', Charcoal, sans-serif; font-size: 20px; "
                                                rel="noopener noreferrer"><strong><span
                                                        style="color: rgb(28, 146, 181);">التواصل مع
                                                        الباحثة</span></strong></span></a></p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-6">
                                    <p><span
                                            style="color: rgb(228, 40, 7); font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                    style="font-size: 24px;">الدرس الثالث</span></strong></span></p>
                                    <p><span
                                            style="color: rgb(251, 178, 99); font-family: 'Open Sans', Charcoal, sans-serif;"><span
                                                style="font-size: 20px; color: rgb(0, 0, 0);"><strong>
                                                    سوف نتعرف فى هذا الدرس على كيفية التعديل على تفاصيل الشخصيات

                                                </strong></span></span></p>
                                    <p><a href="https://drive.google.com/file/d/1CYnvFdb4-1Z1512LxHnBGXCBDJ0DkKIY/view?usp=sharing"
                                            rel="noopener noreferrer" target="_blank"><span
                                                style="font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                        style="font-size: 20px; color: rgb(28, 146, 181);">تحميل المحتوى
                                                        نصى</span></strong></span></a></p>
                                </div>
                                <div class="col-sm-6" style="">
                                    <video width="320" height="240" controls>
                                        <source src="./video/module3/le3 m3 .mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p><a href="https://www.facebook.com/dina.gwida.5/" target="_blank"><span
                                                style="font-family: 'Open Sans', Charcoal, sans-serif; font-size: 20px; "
                                                rel="noopener noreferrer"><strong><span
                                                        style="color: rgb(28, 146, 181);">التواصل مع
                                                        الباحثة</span></strong></span></a></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p><span
                                            style="color: rgb(228, 40, 7); font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                    style="font-size: 24px;">الدرس الرابع</span></strong></span></p>
                                    <p><span
                                            style="color: rgb(251, 178, 99); font-family: 'Open Sans', Charcoal, sans-serif;"><span
                                                style="font-size: 20px; color: rgb(0, 0, 0);"><strong>
                                                سوف نتعرف فى هذا الدرس على كيفية تغير ملامح الشخصيات

                                                </strong></span></span></p>
                                    <p><a href="https://drive.google.com/file/d/12pizx4xR00GUs4CCER4m_mnC3E1tI_ny/view?usp=sharing"
                                            rel="noopener noreferrer" target="_blank"><span
                                                style="font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                        style="font-size: 20px; color: rgb(28, 146, 181);">تحميل المحتوى
                                                        نصى</span></strong></span></a></p>
                                </div>
                                <div class="col-sm-6" style="">
                                    <video width="320" height="240" controls>
                                        <source src="./video/module3/le4 M3.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p><a href="https://www.facebook.com/dina.gwida.5/" target="_blank"><span
                                                style="font-family: 'Open Sans', Charcoal, sans-serif; font-size: 20px; "
                                                rel="noopener noreferrer"><strong><span
                                                        style="color: rgb(28, 146, 181);">التواصل مع
                                                        الباحثة</span></strong></span></a></p>
                                </div>
                            </div>
                            <hr>


                        </div>

                        {{-- ////////////////////////////// Support
                        ////////////////////////////// --}}
                        {{-- automatic Support --}}

                        @if ($user->support === 'automatic')
                            <div id="manual">
                                <strong>الدعم والمساعدة</strong>
                                <video width="320" height="200" controls>
                                    <source src="./video/module3/automatic support/support content 3 .mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @endif

                        {{-- manual Support --}}

                        @if ($user->support === 'manual')
                            <hr>
                            <p style="text-align: center;"><span style="font-size: 28px;"><span
                                        style='font-family: "Arial Black", Gadget, sans-serif; color: rgb(228, 135, 15);'><strong>الدعم
                                            والمساعدة</strong></span></span>
                            </p>
                            <p style="text-align: center">
                                <button type="button" class="btn btn-primary" onclick="text3()">نص</button>
                                <button type="button" class="btn btn-primary" onclick="photo3()">صورة</button>
                                <button type="button" class="btn btn-primary" onclick="video3()">فيديو</button>
                            </p>
                            {{-- دعم نصي --}}
                            <div class="imgbox" id="box1.3" style="display: none; margin-top: 20px">
                                <p> للحصول على مصادر للعمل يمكنك البحث على المصادر التالية :
                                    &nbsp;</p>
                                {{-- <p>تعريف عبدالعزيز طلبه 2010 :&nbsp;</p>
                                <p>بأنه عبارة عن برنامج فيديو مقسم إلى أجزاء صغيرة، هذه الأجزاء يمكن أن تتألف من تتابعات
                                    حركية وإطارات ثابتة، وأسئلة ، وقوائم،&nbsp;</p>
                                <p>بينما تكون إستجابات الطالب عن طريق الكمبيوتر هى المحددة لعدد تتابع مشاهد الفيديو، وعليها
                                    يتأثر شكل وطبيعة المواد أو المعلومات المعروضة.&nbsp;</p> --}}
                                <ul>
                                    <li style="line-height: 2;">Pixabay </li>
                                    <li style="line-height: 2;">Freepik</li>
                                    <li style="line-height: 2;">Pexel </li>
                                    <li style="line-height: 2;">Pngtree
                                        </li>
                                    {{-- <li style="line-height: 2;"> أهمية الفيديو التفاعلى :</li>
                                    <li style="line-height: 2;">يذكر أشرف الكحيل (2017) من خصائص الفيديو التفاعلى
                                        - يحلل الفيديو الأفكار المعقدة إلى لقطات يمكن معالجتها بسهولة، فهو يقلل من حمل
                                        القراءة بالنسبة إلى المتعلم، من خلال تقديم المحتوى كمرئيات جذابة&nbsp;</li>
                                    <li style="line-height: 2;"> يقدم الفيديو معلومات باستخدام سرد، مما يسمح للمتعلم
                                        بالأحتفاظ بالمحتوى بشكل أكثر فاعلية.</li> --}}
                                </ul>
                            </div>
                            {{-- دعم مصور --}}
                            <div class="imgbox" id="box2.3" style="display: none">
                                <p style="text-align: center"><img src="./video/module3/Manual support/محتوى.png"
                                        alt="Girl in a jacket" width="800" height="600"></p>
                            </div>
                            {{-- دعم مرئي --}}
                            <div class="imgbox" id="box3.3" style="display: none">
                                <p style="text-align: center"><video width="800" height="600" controls>
                                        <source src="./video/module3/automatic support/support content 3 .mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video></p>
                            </div>
                        @endif


                    </div>

                    {{-- الأنشطة التعليمية --}}
                    <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab1">
                        <p style="text-align: center;"><span style="color: rgb(249, 121, 50);"><strong><span
                                        style="font-size: 22px; font-family: 'Open Sans', Charcoal, sans-serif;">النشاط
                                        الأول</span></strong></span></p>
                        <p style="text-align: center;"><span style="font-family: 'Open Sans', Charcoal, sans-serif;"><span
                                    style="font-size: 20px;">
                                 قم بإ عداد مشهد كرتونى لتعليم الوضوء  أو التعليم الالكترونى يتناسب مع مهارات الموديول التى اكتسبتها 

                                </span></span></p>
                        <p style="text-align: center;"><span style="font-family: 'Open Sans', Charcoal, sans-serif;"><span
                                    style="font-size: 22px;">&nbsp;</span></span></p>
                        {{-- File Upload --}}
                        <form action="{{ route('file.upload.post1') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <br>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-lg btn-pill btn-block btn-outline-success"
                                        style="border-radius: 22px; width:150px;">ارفق النشاط</button>
                                </div>

                            </div>
                        </form>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                                {{-- <p>{{ url('/') }}/uploads/{{ Session::get('file') }}</p> --}}
                            </div>
                            {{-- <img src="uploads/{{ Session::get('file') }}"> --}}

                        @endif

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{-- End of file upload --}}

                        {{-- ////////////////////////////// Support
                        ////////////////////////////// --}}
                        {{-- automatic Support --}}

                        @if ($user->support === 'automatic')
                            <div id="manual">
                                <strong>الدعم والمساعدة</strong>
                                <video width="320" height="200" controls>
                                    <source src="./video/module3/automatic support/support activitie 3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @endif

                        {{-- manual Support --}}

                        @if ($user->support === 'manual')
                            <hr>
                            <p style="text-align: center;"><span style="font-size: 28px;"><span
                                        style='font-family: "Arial Black", Gadget, sans-serif; color: rgb(228, 135, 15);'><strong>الدعم
                                            والمساعدة</strong></span></span>
                            </p>
                            <p style="text-align: center">
                                <button type="button" class="btn btn-primary" onclick="text4()">نص</button>
                                <button type="button" class="btn btn-primary" onclick="photo4()">صورة</button>
                                <button type="button" class="btn btn-primary" onclick="video4()">فيديو</button>
                            </p>
                            {{-- دعم نصي --}}
                            <div class="imgbox" id="box1.4" style="display: none; margin-top: 20px">
                                <p>عزيزى الطالب لكى تتمكن من إجراء النشاط التعليمى
                                    &nbsp;</p>

                                <ul>
                                    <li style="line-height: 2;">قم بالاطلاع على المكتبة الأثرائية </li>
                                    <li style="line-height: 2;">استخدام محركات البحث المختلفة </li>
                                    <li style="line-height: 2;">قم بتنفيذ النشاط وتسليمه فى الموعد المحدد </li>
                                    <li style="line-height: 2;">عليك بضغط الملف وارفاقه بصيغة Rar ثم الضغط على زر ارفاق النشاط لتسليم النشاط</li>
                                    <li style="line-height: 2;">فى حالة وجود اى صعوبة يمكنك التواصل مع الباحثة عبر
                                        بيانات التواصل المختلفة </li>
                                    {{-- <li style="line-height: 2;">يحدد مراحل إنتاج الفيديو الرقمى التفاعلى</li>
                                    <li style="line-height: 2;">يعدد تطبيقات التربوية والتعليمية للفيديو الرقمى
                                        التفاعلى&nbsp;</li>
                                    <li style="line-height: 2;">يذكر معايير تصميم الفيديو الرقمى التفاعلى</li> --}}
                                </ul>
                            </div>
                            {{-- دعم مصور --}}
                            <div class="imgbox" id="box2.4" style="display: none">
                                <p style="text-align: center"><img src="./video/module3/Manual support/نشاط.jpg"
                                        alt="Girl in a jacket" width="800" height="600"></p>
                            </div>
                            {{-- دعم مرئي --}}
                            <div class="imgbox" id="box3.4" style="display: none">
                                <p style="text-align: center"><video width="800" height="600" controls>
                                        <source src="./video/module3/automatic support/support activitie 3.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video></p>
                            </div>
                        @endif



                    </div>

                    {{-- التقييم البنائي --}}
                    <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                        <form action="module3Result" method="get">

                            <div class="body_next">
                                {{-- Question --}}
                                <section class="section_next">
                                    <h4 style="color: brown">إخترالإجابة الصحيحة من بين الإختيارات التالية:  </h4>
                                    <div class="form-group">
                                        <h3>-	لادراج صورة داخل برنامج Cartoon animator 4  يتم الضغط على أمر

                                             </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q1" value="1" required /> New Project
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="2" required /> Create media
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="3" required /> Composer
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="4" required /> Scene
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <h4 style="color: brown">إخترالإجابة الصحيحة من بين الإختيارات التالية:  </h4>
                                    <div class="form-group">
                                        <h3>لإدراج مشهد كامل يتم أختيار امر  </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q2" value="1" required /> Prop
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="2" required /> Create media
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="3" required /> Scene
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="4" required /> Import PSD
                                            </li>

                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <h4 style="color: brown">إخترالإجابة الصحيحة من بين الإختيارات التالية:  </h4>
                                    <div class="form-group">
                                        <h3> يتم اضافة الشخصيات داخل برنامج Cartoon Animator 4  من خلال امر  </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q3" value="1" required /> animation
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="2" required /> Scene


                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="3" required /> Prop

                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="4" required />Actor


                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                  {{-- Question --}}
                                  <section class="section_next">
                                    <h4 style="color: brown">إخترالإجابة الصحيحة من بين الإختيارات التالية:  </h4>
                                    <div class="form-group">
                                        <h3> يستخدم أمر Composer  فى  </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q4" value="1" required /> تحرير العناصر 
                                            </li>
                                            <li>
                                                <input type="radio" name="q4" value="2" required /> نقل العناصر داخل المشهد 

                                            </li>
                                            <li>
                                                <input type="radio" name="q4" value="3" required /> دوران العناصر

                                            </li>
                                            <li>
                                                <input type="radio" name="q4" value="4" required />تحديد العناصر 


                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                   {{-- Question --}}
                                   <section class="section_next">
                                    <h4 style="color: brown">إخترالإجابة الصحيحة من بين الإختيارات التالية:  </h4>
                                    <div class="form-group">
                                        <h3> يتم التعامل مع ملامح الوجه بإستخدام أمر: </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q5" value="1" required /> Face Key editor 
                                            </li>
                                            <li>
                                                <input type="radio" name="q5" value="2" required /> Head 3d move 

                                            </li>
                                            <li>
                                                <input type="radio" name="q5" value="3" required /> Template

                                            </li>
                                            <li>
                                                <input type="radio" name="q5" value="4" required />Facial Animation 


                                            </li>
                                        </ol>
                                    </div>
                                </section>
                             
                                {{-- Question --}}
                                <section class="section_next">
                                    <h4 style="color: brown">إخترالإجابة الصحيحة من بين الإختيارات التالية: </h4>
                                    <div class="form-group">
                                        <h3> -	يستخدم أمر transform  لتحرير العناصر
                                            </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q6" value="1" required /> صح
                                            </li>
                                            <li>
                                                <input type="radio" name="q6" value="2" required /> خطأ
                                            </li>

                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <h4 style="color: brown">إخترالإجابة الصحيحة من بين الإختيارات التالية: </h4>
                                    <div class="form-group">
                                        <h3>يمكن التعديل على شخصيات برنامج Cartoon Animator   </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q7" value="1" required /> صح
                                            </li>
                                            <li>
                                                <input type="radio" name="q7" value="2" required /> خطأ
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <h4 style="color: brown">إخترالإجابة الصحيحة من بين الإختيارات التالية: </h4>
                                    <div class="form-group">
                                        <h3>يستخدم أمر Create head  لتحويل صورة ثابتة كملامح وجه لشخصية داخل البرنامج   </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q8" value="1" required /> صح
                                            </li>
                                            <li>
                                                <input type="radio" name="q8" value="2" required /> خطأ
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <h4 style="color: brown">إخترالإجابة الصحيحة من بين الإختيارات التالية: </h4>
                                    <div class="form-group">
                                        <h3>تستخدم إداة Edit Pose  فى تعديل عظام الشخصيات وتحريكها   </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q9" value="1" required /> صح
                                            </li>
                                            <li>
                                                <input type="radio" name="q9" value="2" required /> خطأ
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <h4 style="color: brown">إخترالإجابة الصحيحة من بين الإختيارات التالية: </h4>
                                    <div class="form-group">
                                        <h3>يستخدم أمر  Face puppet  لتغير تعبيرات ملامح الوجه للشخصيات   </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q10" value="1" required /> صح
                                            </li>
                                            <li>
                                                <input type="radio" name="q10" value="2" required /> خطأ
                                            </li>
                                        </ol>
                                    </div>
                                </section>

                            </div>
                            <input type="hidden" name="id" value={{ Auth::user()->id }} />
                            <input type="submit" value="تسليم الإجابات" name="submit" class="btn btn-sm btn-primary"
                                style="margin-top: 20px; margin-right: 200px" />
                        </form>

                        {{-- ////////////////////////////// Support
                        ////////////////////////////// --}}
                        {{-- automatic Support --}}

                        @if ($user->support === 'automatic')
                            <div id="manual">
                                <strong>الدعم والمساعدة</strong>
                                <video width="320" height="200" controls>
                                    <source src="./video/module1/automatic support/التقييم البنائى .mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @endif


                        {{-- manual Support --}}
                        @if ($user->support === 'manual')
                            <hr>
                            <p style="text-align: center;"><span style="font-size: 28px;"><span
                                        style='font-family: "Arial Black", Gadget, sans-serif; color: rgb(228, 135, 15);'><strong>الدعم
                                            والمساعدة</strong></span></span>
                            </p>
                            <p style="text-align: center">
                                <button type="button" class="btn btn-primary" onclick="text5()">نص</button>
                                <button type="button" class="btn btn-primary" onclick="photo5()">صورة</button>
                                <button type="button" class="btn btn-primary" onclick="video5()">فيديو</button>
                            </p>
                            {{-- دعم نصي --}}
                            <div class="imgbox" id="box1.5" style="display: none; margin-top: 20px">
                                <p> بعد دراستك الموديول وتسليم النشاط قم بأداء الاختبار البعدى للموديول،
                                    ، ولا يسمح لك بالانتقال إلى الموديول الثانى إلا فى حالة حصولك على درجة الاتقان (85%) ،
                                    &nbsp;</p>
                                <p>ويسمح لك بإعادة دراسة محتوى الموديول وإعادة الاختبار عدة مرات فى حالة عدم تحقيق درجة
                                    الاتقان.&nbsp;</p>
                                <p>- تأكيد من إجابتك أولا ولا تترك اى سؤال فارغ لكى تتمكن من تسليم اجابتك &nbsp;</p>

                                <ul>
                                    {{-- <li style="line-height: 2;">يذكر مفهوم الفيديو الرقمى التفاعلى</li>
                                    <li style="line-height: 2;">يعدد مميزات الفيديو الرقمى التفاعلى</li>
                                    <li style="line-height: 2;">يستنتج محتويات الفيديو الرقمى التفاعلى</li>
                                    <li style="line-height: 2;">يحدد أسباب استخدام الفيديو الرقمى التفاعلى فى العملية
                                        التعليمية</li>
                                    <li style="line-height: 2;">يحدد مراحل إنتاج الفيديو الرقمى التفاعلى</li>
                                    <li style="line-height: 2;">يعدد تطبيقات التربوية والتعليمية للفيديو الرقمى
                                        التفاعلى&nbsp;</li>
                                    <li style="line-height: 2;">يذكر معايير تصميم الفيديو الرقمى التفاعلى</li> --}}
                                </ul>
                            </div>
                            {{-- دعم مصور --}}
                            <div class="imgbox" id="box2.5" style="display: none">
                                <p style="text-align: center"><img src="./video/module1/Manual support/التقييم.jpg"
                                        alt="Girl in a jacket" width="800" height="600"></p>
                            </div>
                            {{-- دعم مرئي --}}
                            <div class="imgbox" id="box3.5" style="display: none">
                                <p style="text-align: center"><video width="800" height="600" controls>
                                        <source src="./video/module1/automatic support/التقييم البنائى .mp4"
                                            type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video></p>
                            </div>
                        @endif


                    </div>


                    {{-- المكتبة الإثرائية --}}
                    <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact-tab3">
                        <div class="row" style="margin-bottom: 20px; text-align: center">
                            <p
                                style="font-size: 20px; font-family: 'Open Sans', Charcoal, sans-serif; text-align: center; font-weight: bold">
                                نماذج Cartoon Animator  <a
                                    href="https://www.youtube.com/watch?v=kjFmOAobi4Y&list=RDCMUCgigyhFYBO-trin-NBtJWeQ&start_radio=1&t=0"
                                    rel="noopener noreferrer" target="_blank"><strong>اضغط هنا </strong></a></p>

                        </div>
                        <hr>

                        <div class="row" style="margin-bottom: 20px; text-align: center">
                            <p
                                style="font-size: 20px; font-family: 'Open Sans', Charcoal, sans-serif; text-align: center; font-weight: bold">
                                انواع الشخصيات داخل Cartoon Animator  <a
                                    href="https://www.youtube.com/watch?v=yRlV7aMB7O8"
                                    rel="noopener noreferrer" target="_blank"><strong>اضغط هنا </strong></a></p>
                        </div>
                        <hr>
                        {{-- ////////////////////////////// Support
                        ////////////////////////////// --}}
                        {{-- automatic Support --}}

                        @if ($user->support === 'automatic')
                            <div id="manual">
                                <strong>الدعم والمساعدة</strong>
                                <video width="320" height="200" controls>
                                    <source src="./video/module1/automatic support/المكتبة .mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @endif

                        {{-- manual Support --}}
                        @if ($user->support === 'manual')
                            <hr>
                            <p style="text-align: center;"><span style="font-size: 28px;"><span
                                        style='font-family: "Arial Black", Gadget, sans-serif; color: rgb(228, 135, 15);'><strong>الدعم
                                            والمساعدة</strong></span></span>
                            </p>
                            <p style="text-align: center">
                                <button type="button" class="btn btn-primary" onclick="text6()">نص</button>
                                <button type="button" class="btn btn-primary" onclick="photo6()">صورة</button>
                                <button type="button" class="btn btn-primary" onclick="video6()">فيديو</button>
                            </p>
                            {{-- دعم نصي --}}
                            <div class="imgbox" id="box1.6" style="display: none; margin-top: 20px">
                                للحصول على معلومات اضافبة <p>عزيزى الطالب مرفق إليك مصادر اثرائية داخل المكتبة
                                    &nbsp;</p>
                                <p>اطلع على محتويات المكتبة الاثرائية بصورة جيدة&nbsp;</p>

                                <ul>
                                    {{-- <li style="line-height: 2;">يذكر مفهوم الفيديو الرقمى التفاعلى</li>
                                    <li style="line-height: 2;">يعدد مميزات الفيديو الرقمى التفاعلى</li>
                                    <li style="line-height: 2;">يستنتج محتويات الفيديو الرقمى التفاعلى</li>
                                    <li style="line-height: 2;">يحدد أسباب استخدام الفيديو الرقمى التفاعلى فى العملية
                                        التعليمية</li>
                                    <li style="line-height: 2;">يحدد مراحل إنتاج الفيديو الرقمى التفاعلى</li>
                                    <li style="line-height: 2;">يعدد تطبيقات التربوية والتعليمية للفيديو الرقمى
                                        التفاعلى&nbsp;</li>
                                    <li style="line-height: 2;">يذكر معايير تصميم الفيديو الرقمى التفاعلى</li> --}}
                                </ul>
                            </div>
                            {{-- دعم مصور --}}
                            <div class="imgbox" id="box2.6" style="display: none">
                                <p style="text-align: center"><img
                                        src="./video/module1/Manual support/المكتبة الاثرائية.jpg" alt="Girl in a jacket"
                                        width="800" height="600"></p>
                            </div>
                            {{-- دعم فيديو --}}
                            <div class="imgbox" id="box3.6" style="display: none">
                                <p style="text-align: center"><video width="800" height="600" controls>
                                        <source src="./video/module1/automatic support/المكتبة .mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video></p>
                            </div>
                        @endif



                    </div>
                </div>
                {{-- نهاية محتوى الموديول --}}
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="jzdbox1 jzdbasf jzdcal">

                    <div class="jzdcalt">April 2021</div>

                    <span>Th</span>
                    <span>Fr</span>
                    <span>Sa</span>
                    <span>Su</span>
                    <span>Mo</span>
                    <span>Tu</span>
                    <span>We</span>


                    <span class="jzdb">
                        <!--BLANK-->
                    </span>
                    <span class="jzdb">
                        <!--BLANK-->
                    </span>
                    <span class="jzdb">
                        <!--BLANK-->
                    </span>
                    <span class="jzdb">
                        <!--BLANK-->
                    </span>
                    <span class="jzdb">
                        <!--BLANK-->
                    </span>
                    <span class="jzdb">
                        <!--BLANK-->
                    </span>
                    <span>1</span>
                    <span >2</span>
                    <span >3</span>
                    <span >4</span>
                    <span >5</span>
                    <span>6</span>
                    <span >7</span>
                    <span>8</span>
                    <span>9</span>
                    <span>10</span>
                    <span>11</span>
                    <span >12</span>
                    <span class="circle" data-title="دراسة الموديول"
                    style="background-color: #f4f085; color: black">13</span>
                    <span class="circle" data-title="دراسة الموديول"
                    style="background-color: #f4f085; color: black">14</span>
                    <span class="circle" data-title="الإختبارات" style="background-color: #97ceaf; color: black">15</span>
                    <span class="circle" data-title="تسليم الأنشطة"
                    style="background-color: #aca1cc; color: black">16</span>
                    <span>17</span>
                    <span>18</span>
                    <span>19</span>
                    <span>20</span>
                    <span >21</span>
                    <span >22</span>
                    <span>23</span>
                    <span>24</span>
                    <span>25</span>
                    <span>26</span>
                    <span>27</span>
                    <span>28</span>
                    <span>29</span>
                    <span>30</span>
                    <span class="jzdb">
                        <!--BLANK-->
                    </span>
                    <span class="jzdb">
                        <!--BLANK-->
                    </span>
                    <span class="jzdb">
                        <!--BLANK-->
                    </span>
                    <span class="jzdb">
                        <!--BLANK-->
                    </span>
                    <span class="jzdb">
                        <!--BLANK-->
                    </span>
                    <span class="jzdb">
                        <!--BLANK-->
                    </span>
                </div>
            </div>
        </div>


    </div>
@endsection
