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
                                إكتساب مهارة إضافة مؤثرات صوتية وحركات إنتقالية

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
                               	تعدد طرق إدراج صوت لبرنامج Cartoon Animator

                                </span></li>
                            </p>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>تميز بين خطوات إدراج صوت من ملفات الجهاز
                                    التفاعلى</span></li>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>تطبق خطوات تسجيل الصوت داخل البرنامج
                                    التفاعلى فى العملية التعليمية</span></li>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>تجرب خطوات إضافة المؤثرات الإنتقالية بين المشاهد
                                    التفاعلى</span></li>
                            {{-- <li><span style='line-height:150%;font-family:"Open Sans";'>تعدد تطبيقات التربوية والتعليمية
                                    للفيديو الرقمى التفاعلى&nbsp;</span></li>
                            <li><span style='line-height:150%;font-family:"Open Sans";'>تذكر معايير تصميم الفيديو الرقمى
                                    التفاعلى</span></li> --}}
                        </ol>

                        {{-- ////////////////////////////// Support
                        ////////////////////////////// --}}
                        {{-- automatic Support --}}

                        @if ($user->support === 'automatic')
                            <div id="manual">
                                <strong>الدعم والمساعدة</strong>
                                <video width="320" height="200" controls>
                                    <source src="./video/module5/automatic support/الاهداف الموديول الخامس .mp4" type="video/mp4">
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
                                <p>إكتساب مهارة إضافة مؤثرات صوتية وحركات إنتقالية&nbsp;</p>
                                <p>الأهداف الإجرائية&nbsp;</p>
                                <ul>
                                    <li style="line-height: 2;">تعدد طرق إدراج صوت لبرنامج Cartoon Animator</li>
                                    <li style="line-height: 2;">تميز بين خطوات إدراج صوت من ملفات الجهاز </li>
                                    <li style="line-height: 2;">تطبق خطوات تسجيل الصوت داخل البرنامج </li>
                                    <li style="line-height: 2;">تجرب خطوات إضافة المؤثرات الإنتقالية بين المشاهد
                                        </li>
                                    {{-- <li style="line-height: 2;">تحدد مراحل إنتاج الفيديو الرقمى التفاعلى</li>
                                    <li style="line-height: 2;">تعدد تطبيقات التربوية والتعليمية للفيديو الرقمى
                                        التفاعلى&nbsp;</li>
                                    <li style="line-height: 2;">تذكر معايير تصميم الفيديو الرقمى التفاعلى</li> --}}
                                </ul>
                            </div>
                            {{-- دعم مصور --}}
                            <div class="imgbox" id="box2.1" style="display: none">
                                <p style="text-align: center"><img src="./video/module5/Manual support/الاهداف-01.jpg"
                                        alt="Girl in a jacket" width="800" height="600"></p>
                            </div>
                            {{-- دعم مرئي --}}
                            <div class="imgbox" id="box3.1" style="display: none">
                                <p style="text-align: center"><video width="800" height="600" controls>
                                        <source src="./video/module5/automatic support/الاهداف الموديول الخامس .mp4" type="video/mp4">
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
                                    اجتياز الموديول بنسبة 85% للانتقال للموديول التالى&nbsp;</span></li>
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
                                <p>عليك عزيزى الطالب/ة اتباع التعليمات التالية
                                    &nbsp;</p>
                                <p>الموديول الخامس :&nbsp;</p>
                                <p>إكتساب مهارة إضافة مؤثرات صوتية وحركات إنتقالية&nbsp;</p>
                                <p>تعليمات الموديول &nbsp;</p>
                                <ul>
                                    <li style="line-height: 2;">تعرف على بيانات الباحثة أدوات التواصل لكى تتمكن من التواصل
                                        فى حالة الضرورة </li>
                                    <li style="line-height: 2;">اطلع على الخطة الزمنية لدراسة الموديول </li>
                                    <li style="line-height: 2;">اطلع على الجدول الزمنى لدراسة الموديول </li>
                                    <li style="line-height: 2;">اطلع على محتوى الموديول ومتوافر لديك سواء محتوى نصى وفيديو
                                        التعليمية</li>
                                    <li style="line-height: 2;">قم بتنفيذ النشاط وتسليمه فى الوقت المحدد </li>
                                    <li style="line-height: 2;">- بعد دراستك الموديول وتسليم النشاط قم بأداء الاختبار البعدى
                                        للموديول، ولا يسمح لك بالانتقال إلى الموديول الثانى
                                        إلا فى حالة حصولك على درجة الاتقان (85%) &nbsp;</li>
                                    <li style="line-height: 2;">ويسمح لك بإعادة دراسة محتوى الموديول وإعادة الاختبار عدة
                                        مرات فى حالة عدم تحقيق درجة الاتقان.</li>
                                </ul>
                            </div>
                            {{-- دعم مصور --}}
                            <div class="imgbox" id="box2.2" style="display: none">
                                <p style="text-align: center"><img src="./video/module1/Manual support/التعليمات.jpg"
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
                                                 سوف نتعرف فى هذا الدرس على كيفية إضافة تاثيرات انتقالية
                                                </strong></span></span></p>
                                    <p><a href="https://drive.google.com/drive/u/0/folders/1x_IVuz9ixHOq9oms0wDpWg9IYPpK9hFP"
                                            rel="noopener noreferrer" target="_blank"><span
                                                style="font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                        style="font-size: 20px; color: rgb(28, 146, 181);">
                                                        تحميل المحتوى نصى
                                                    </span></strong></span></a></p>
                                </div>
                                <div class="col-sm-6" style="">
                                    <video width="320" height="240" controls>
                                        <source src="./video/module5/le1 m5.mp4" type="video/mp4">
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
                                                    سوف نتعرف فى هذا الدرس على كيفية إضافة صوت للمشاهد

                                                </strong></span></span></p>
                                    <p><a href="https://drive.google.com/drive/u/0/folders/1x_IVuz9ixHOq9oms0wDpWg9IYPpK9hFP"
                                            rel="noopener noreferrer" target="_blank"><span
                                                style="font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                        style="font-size: 20px; color: rgb(28, 146, 181);">تحميل المحتوى
                                                        نصى</span></strong></span></a></p>
                                </div>
                                <div class="col-sm-6" style="">
                                    <video width="320" height="240" controls>
                                        <source src="./video/module5/le2 m5.mp4" type="video/mp4">
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
                                                    سوف نتعرف فى هذا الدرس على كيفية اخراج الفيديو بصيغة Mp4
                                                </strong></span></span></p>
                                    <p><a href="https://drive.google.com/drive/u/0/folders/1x_IVuz9ixHOq9oms0wDpWg9IYPpK9hFP"
                                            rel="noopener noreferrer" target="_blank"><span
                                                style="font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                        style="font-size: 20px; color: rgb(28, 146, 181);">تحميل المحتوى
                                                        نصى</span></strong></span></a></p>
                                </div>
                                <div class="col-sm-6" style="">
                                    <video width="320" height="240" controls>
                                        <source src="./video/module5/le3 m5.mp4" type="video/mp4">
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
                                    <source src="./video/module5/automatic support/le4 m5.mp4" type="video/mp4">
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
                                <p> مفهوم الفيديو الرقمى التفاعلى
                                    &nbsp;</p>
                                <p>تعريف عبدالعزيز طلبه 2010 :&nbsp;</p>
                                <p>بأنه عبارة عن برنامج فيديو مقسم إلى أجزاء صغيرة، هذه الأجزاء يمكن أن تتألف من تتابعات
                                    حركية وإطارات ثابتة، وأسئلة ، وقوائم،&nbsp;</p>
                                <p>بينما تكون إستجابات الطالب عن طريق الكمبيوتر هى المحددة لعدد تتابع مشاهد الفيديو، وعليها
                                    يتأثر شكل وطبيعة المواد أو المعلومات المعروضة.&nbsp;</p>
                                <ul>
                                    <li style="line-height: 2;">تعريف طارق عامر(2015)</li>
                                    <li style="line-height: 2;">بأنه برنامج فيديو مقسم إلى اجزاء صغيرة تتكون من تتابعات
                                        حركية وإطارات ثابتة وقوائم وتكون استجابات المتعلم عن طريق الكمبيوتر هى المحددة
                                        لتتابع لقطات او مشاهدة الفيديو وعليها يتأثر شكل وطبيعة العرض</li>
                                    <li style="line-height: 2;">تعريف الباحثة للفيديو الرقمى التفاعلى</li>
                                    <li style="line-height: 2;">بأنه مقاطع فيديو قصيرة تتكون من لقطات رسوم متحركة ثنائية
                                        البعد وإيقونات تحكم وإستجابة وأسئلة وأنشطة، تسمح للمتعلم بالتحرك داخل الفيديو وفقا
                                        لسرعته وخطة أهداف التعليمية،
                                        وروابط خارجية ؛ وأدوات تفاعل وطرح أسئلة وتغذية راجعة فى ضوء إستجابات المتعلمين.</li>
                                    <li style="line-height: 2;"> أهمية الفيديو التفاعلى :</li>
                                    <li style="line-height: 2;">يذكر أشرف الكحيل (2017) من خصائص الفيديو التفاعلى
                                        - يحلل الفيديو الأفكار المعقدة إلى لقطات يمكن معالجتها بسهولة، فهو يقلل من حمل
                                        القراءة بالنسبة إلى المتعلم، من خلال تقديم المحتوى كمرئيات جذابة&nbsp;</li>
                                    <li style="line-height: 2;"> يقدم الفيديو معلومات باستخدام سرد، مما يسمح للمتعلم
                                        بالأحتفاظ بالمحتوى بشكل أكثر فاعلية.</li>
                                </ul>
                            </div>
                            {{-- دعم مصور --}}
                            <div class="imgbox" id="box2.3" style="display: none">
                                <p style="text-align: center"><img src="./video/module5/Manual support/دعم-محتوى.jpg"
                                        alt="Girl in a jacket" width="800" height="600"></p>
                            </div>
                            {{-- دعم مرئي --}}
                            <div class="imgbox" id="box3.3" style="display: none">
                                <p style="text-align: center"><video width="800" height="600" controls>
                                        <source src="./video/module5/automatic support/le4 m5.mp4" type="video/mp4">
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
                                    قم باضافة المؤثرات الانتقالية بين عناصر المشهد وعليك بتصدير المشهد بصيغة MP4

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
                                    <source src="./video/module5/automatic support/دعم المحتوى الخامس .mp4" type="video/mp4">
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
                                <p style="text-align: center"><img src="./video/module5/Manual support/دعم-نشاط.jpg"
                                        alt="Girl in a jacket" width="800" height="600"></p>
                            </div>
                            {{-- دعم مرئي --}}
                            <div class="imgbox" id="box3.4" style="display: none">
                                <p style="text-align: center"><video width="800" height="600" controls>
                                        <source src="./video/module5/automatic support/دعم المحتوى الخامس .mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video></p>
                            </div>
                        @endif



                    </div>

                    {{-- التقييم البنائي --}}
                    <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                        <form action="module5Result" method="get">

                            <div class="body_next">
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>لمعاينة حركة المشهد الحالى  داخل مساحة العمل : </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q1" value="1" required /> Preview
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="2" required /> Current frame Preview
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="3" required /> Render
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="4" required /> Apply Current Render
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>لإدراج ملف صوت داخل البرنامج Cartoon Animator 4  يتم الضغط على أمر </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q2" value="1" required /> Wave File
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="2" required /> Create Script
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="3" required /> Composer
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="4" required /> Additional Voice
                                            </li>

                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> لتصدير الفيديو بصيغة فيديو يتم الضغط على امر  </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q3" value="1" required /> Save as
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="2" required /> Render Video

                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="3" required />Export

                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="4" required />Save project as


                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> يستخدم أمر  Project setting  لتعديل حجم الفيديو
                                             </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q4" value="1" required /> صح
                                            </li>
                                            <li>
                                                <input type="radio" name="q4" value="2" required /> خطأ
                                            </li>

                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>يتم إضافة صوت من خلال أمر Create Script  </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q5" value="1" required /> صح
                                            </li>
                                            <li>
                                                <input type="radio" name="q5" value="2" required /> خطأ
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
                                تطبيق عملى مشهد سباحة  <a
                                    href="https://www.youtube.com/watch?v=jPdL965vr3M"
                                    rel="noopener noreferrer" target="_blank"><strong>اضغط هنا </strong></a></p>

                        </div>
                        <hr>

                        <div class="row" style="margin-bottom: 20px; text-align: center">
                            <p
                                style="font-size: 20px; font-family: 'Open Sans', Charcoal, sans-serif; text-align: center; font-weight: bold">
                                إنشاء مشهد من الفوتوشوب والكارتون انيميتور  <a
                                    href="https://www.youtube.com/watch?v=vU_ufVQCX50"
                                    rel="noopener noreferrer" target="_blank"><strong>اضغط هنا </strong></a></p>
                        </div>
                        <hr>

                        <div class="row" style="margin-bottom: 20px; text-align: center">
                            <p
                                style="font-size: 20px; font-family: 'Open Sans', Charcoal, sans-serif; text-align: center; font-weight: bold">
                                فيديو عن كيفية الوضوء   <a
                                    href="https://www.youtube.com/watch?v=vU_ufVQCX50"
                                    rel="noopener noreferrer" target="_blank"><strong>اضغط هنا </strong></a></p>
                        </div>

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

                    <span>Su</span>
                    <span>Mo</span>
                    <span>Tu</span>
                    <span>We</span>
                    <span>Th</span>
                    <span>Fr</span>
                    <span>Sa</span>


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
                    <span class="circle" data-title="دراسة الموديول"
                        style="background-color: #f4f085; color: black">2</span>
                    <span class="circle" data-title="دراسة الموديول"
                        style="background-color: #f4f085; color: black">3</span>
                    <span class="circle" data-title="دراسة الموديول"
                        style="background-color: #f4f085; color: black">4</span>
                    <span class="circle" data-title="دراسة الموديول"
                        style="background-color: #f4f085; color: black">5</span>
                    <span class="circle" data-title="دراسة الموديول"
                        style="background-color: #f4f085; color: black">6</span>
                    <span class="circle" data-title="دراسة الموديول"
                        style="background-color: #f4f085; color: black">7</span>
                    <span>8</span>
                    <span>9</span>
                    <span>10</span>
                    <span>11</span>
                    <span class="circle" data-title="الإختبارات" style="background-color: #97ceaf; color: black">12</span>
                    <span class="circle" data-title="الإختبارات" style="background-color: #97ceaf; color: black">13</span>
                    <span class="circle" data-title="الإختبارات" style="background-color: #97ceaf; color: black">14</span>
                    <span>15</span>
                    <span>16</span>
                    <span>17</span>
                    <span>18</span>
                    <span>19</span>
                    <span>20</span>
                    <span class="circle" data-title="تسليم الأنشطة"
                        style="background-color: #aca1cc; color: black">21</span>
                    <span class="circle" data-title="تسليم الأنشطة"
                        style="background-color: #aca1cc; color: black">22</span>
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
