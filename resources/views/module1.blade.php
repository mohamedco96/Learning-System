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
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab3" data-toggle="pill" href="#pills-contact3" role="tab"
                    aria-controls="pills-contact3" aria-selected="false">المكتبة الإئرائية</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent" style="margin-top: 30px">
            {{-- الأهداف التعليمية --}}
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <p dir="RTL"
                    style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'>
                    <strong><span style='font-size:19px;line-height:107%;font-family:"Arial",sans-serif;'>الهدف العام
                            للموديول:&nbsp;</span></strong>
                </p>
                <p dir="RTL"
                    style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'>
                    <span style='font-size:19px;line-height:107%;font-family:"Arial",sans-serif;'>إكتساب مفهوم الفيديو
                        الرقمى التفاعلى ومميزاته وإمكاناته</span>
                </p>
                <p dir="RTL"
                    style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'>
                    <strong><span style='font-size:19px;line-height:107%;font-family:"Arial",sans-serif;'>الأهداف
                            الإجرائية:</span></strong>
                </p>
                <ol style="list-style-type: decimal;margin-left:-0.5in;">
                    <li><span style='line-height:150%;font-family:"Arial",sans-serif;'>يذكر مفهوم الفيديو الرقمى
                            التفاعلى</span></li>
                    <li><span style='line-height:150%;font-family:"Arial",sans-serif;'>يعدد مميزات الفيديو الرقمى
                            التفاعلى</span></li>
                    <li><span style='line-height:150%;font-family:"Arial",sans-serif;'>يستنتج محتويات الفيديو الرقمى
                            التفاعلى</span></li>
                    <li><span style='line-height:150%;font-family:"Arial",sans-serif;'>يحدد أسباب استخدام الفيديو الرقمى
                            التفاعلى فى العملية التعليمية</span></li>
                    <li><span style='line-height:150%;font-family:"Arial",sans-serif;'>يحدد مراحل إنتاج الفيديو الرقمى
                            التفاعلى</span></li>
                    <li><span style='line-height:150%;font-family:"Arial",sans-serif;'>يعدد تطبيقات التربوية والتعليمية
                            للفيديو الرقمى التفاعلى&nbsp;</span></li>
                    <li><span style='line-height:150%;font-family:"Arial",sans-serif;'>يذكر معايير تصميم الفيديو الرقمى
                            التفاعلى</span></li>
                </ol>

            </div>

            {{-- التعليمات --}}
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <p dir="RTL"
                    style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'>
                    <span style='font-size:19px;line-height:107%;font-family:"Arial",sans-serif;'>عزيزى الطالب/ة عليك إتباع
                        الخطوات التالية لضمان اتمام دراسة الموديول بنجاح :&nbsp;</span>
                </p>
                <ul style="list-style-type: undefined;margin-left:-0.5in;">
                    <li><span
                            style='line-height:107%;font-family:"Arial",sans-serif;font-family:"Arial",sans-serif;font-size:14.0pt;'>الإطلاع
                            على الهدف العام لدراسة الموديول&nbsp;</span></li>
                    <li><span
                            style='line-height:107%;font-family:"Arial",sans-serif;font-family:"Arial",sans-serif;font-size:14.0pt;'>الاطلاع
                            على الاهداف الإجرائية لدراسة الموديول&nbsp;</span></li>
                    <li><span
                            style='line-height:107%;font-family:"Arial",sans-serif;font-family:"Arial",sans-serif;font-size:14.0pt;'>الإطلاع
                            على الخطة الزمنية لدراسة الموديول&nbsp;</span></li>
                    <li><span
                            style='line-height:107%;font-family:"Arial",sans-serif;font-family:"Arial",sans-serif;font-size:14.0pt;'>الاطلاع
                            على الجدول الزمنى الخاص بالموديول&nbsp;</span></li>
                    <li><span
                            style='line-height:107%;font-family:"Arial",sans-serif;font-family:"Arial",sans-serif;font-size:14.0pt;'>الإطلاع
                            على محتوى الموديول بدقة متوافر محتوى نصى &ndash; فيديو</span></li>
                    <li><span
                            style='line-height:107%;font-family:"Arial",sans-serif;font-family:"Arial",sans-serif;font-size:14.0pt;'>تسليم
                            النشاط فى الوقت المحدد&nbsp;</span></li>
                    <li><span
                            style='line-height:107%;font-family:"Arial",sans-serif;font-family:"Arial",sans-serif;font-size:14.0pt;'>الإجابة
                            عن اسئلة التقييم البنائى للموديول&nbsp;</span></li>
                    <li><span
                            style='line-height:107%;font-family:"Arial",sans-serif;font-family:"Arial",sans-serif;font-size:14.0pt;'>يلزم
                            اجتياز الموديول بنسبة 90% للانتقال للموديول التالى&nbsp;</span></li>
                </ul>
            </div>

            {{-- المحتوى التعليمي --}}
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="container" style="margin-top: 60px">
                    <div class="row">
                        <div class="col-sm-6">
                            <p><span style="color: rgb(251, 178, 99); font-family: Impact, Charcoal, sans-serif;"><strong><span
                                            style="font-size: 24px;">الدرس الأول</span></strong></span></p>
                            <p><span style="color: rgb(251, 178, 99); font-family: Impact, Charcoal, sans-serif;"><span
                                        style="font-size: 20px; color: rgb(0, 0, 0);"><strong>
                                            سوف نتعرف فى هذا الدرس على مفهوم الفيديو الرقمى التفاعلى ومميزاته
                                        </strong></span></span></p>
                            <p><a href="https://drive.google.com/file/d/1mWhVuvR-JD0KMyD08E6wc_fHDCY1ahXl/view?usp=sharing"
                                    rel="noopener noreferrer" target="_blank"><span
                                        style="font-family: Impact, Charcoal, sans-serif;"><strong><span
                                                style="font-size: 20px; color: rgb(28, 146, 181);">تحميل المحتوى
                                                نصى</span></strong></span></a></p>
                        </div>
                        <div class="col-sm-6" style="">
                            <video width="320" height="240" controls>
                                <source src="./video/01.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <p><a href="#"><span
                                        style="font-family: Impact, Charcoal, sans-serif; font-size: 24px; "><strong><span
                                                style="color: rgb(28, 146, 181);">التواصل مع
                                                الباحثة</span></strong></span></a></p>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-6">
                            <p><span style="color: rgb(251, 178, 99); font-family: Impact, Charcoal, sans-serif;"><strong><span
                                            style="font-size: 24px;">الدرس الثاني</span></strong></span></p>
                            <p><span style="color: rgb(251, 178, 99); font-family: Impact, Charcoal, sans-serif;"><span
                                        style="font-size: 20px; color: rgb(0, 0, 0);"><strong>
                                            سوف نتعرف فى هذا الدرس على محتويات الفيديو الرقمى التفاعلى ومراحل إنتاج الفيديو
                                            التفاعلى
                                        </strong></span></span></p>
                            <p><a href="https://drive.google.com/file/d/1b-bkyFMig71Wz7SHqU7mmczI1KJpOcn-/view?usp=sharing"
                                    rel="noopener noreferrer" target="_blank"><span
                                        style="font-family: Impact, Charcoal, sans-serif;"><strong><span
                                                style="font-size: 20px; color: rgb(28, 146, 181);">تحميل المحتوى
                                                نصى</span></strong></span></a></p>
                        </div>
                        <div class="col-sm-6" style="">
                            <video width="320" height="240" controls>
                                <source src="./video/01.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <p><a href="#"><span
                                        style="font-family: Impact, Charcoal, sans-serif; font-size: 24px; "><strong><span
                                                style="color: rgb(28, 146, 181);">التواصل مع
                                                الباحثة</span></strong></span></a></p>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-6">
                            <p><span style="color: rgb(251, 178, 99); font-family: Impact, Charcoal, sans-serif;"><strong><span
                                            style="font-size: 24px;">الدرس الثالث</span></strong></span></p>
                            <p><span style="color: rgb(251, 178, 99); font-family: Impact, Charcoal, sans-serif;"><span
                                        style="font-size: 20px; color: rgb(0, 0, 0);"><strong>
                                            سوف نتعرف فى هذا الدرس على التطبيقات التربوية للفيديو التفاعلى فى العملية
                                            التعليمية ومعايير إنتاجه
                                        </strong></span></span></p>
                            <p><a href="https://drive.google.com/file/d/1OHe43XBHhptzdDmCtdrmGVnU_1eJUmy1/view?usp=sharing"
                                    rel="noopener noreferrer" target="_blank"><span
                                        style="font-family: Impact, Charcoal, sans-serif;"><strong><span
                                                style="font-size: 20px; color: rgb(28, 146, 181);">تحميل المحتوى
                                                نصى</span></strong></span></a></p>
                        </div>
                        <div class="col-sm-6" style="">
                            <video width="320" height="240" controls>
                                <source src="./video/01.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <p><a href="#"><span
                                        style="font-family: Impact, Charcoal, sans-serif; font-size: 24px; "><strong><span
                                                style="color: rgb(28, 146, 181);">التواصل مع
                                                الباحثة</span></strong></span></a></p>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>

            {{-- الأنشطة التعليمية --}}
            <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab1">
                <p style="text-align: center;"><span style="color: rgb(249, 121, 50);"><strong><span
                                style="font-size: 22px; font-family: Impact, Charcoal, sans-serif;">النشاط
                                الأول</span></strong></span></p>
                <p style="text-align: center;"><span style="font-family: Impact, Charcoal, sans-serif;"><span
                            style="font-size: 28px;">
                            اكتب مقالا لا يتعدى 150 كلمة عن مفهوم الفيديو الرقمى التفاعلى واستخداماته فى العملية التعليمية
                        </span></span></p>
                <p style="text-align: center;"><span style="font-family: Impact, Charcoal, sans-serif;"><span
                            style="font-size: 28px;">&nbsp;</span></span></p>
                <button class="btn btn-lg btn-pill btn-block btn-outline-success  " type="button"
                    style="border-radius: 22px; width:150px;">
                    ارفق النشاط
                </button>
            </div>

            {{-- التقييم البنائي --}}
            <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2"> 
                <form action="score3" method="get">

                    <div class="body_next">
                        {{-- Question --}}
                        <section class="section_next">
                            <div class="form-group">
                                <h3>يستخدم الفيديو الرقمى التفاعلى فى </h3>
                                <ol dir="rtl">
                                    <li>
                                        <input type="radio" name="q1" value="1" required /> تعزيز التعلم النشط 
                                    </li>
                                    <li>
                                        <input type="radio" name="q1" value="2" required /> تنمية مهارات المتعلم 
                                    </li>
                                    <li>
                                        <input type="radio" name="q1" value="3" required /> زيادة ثقة المتعلم 
                                    </li>
                                    <li>
                                        <input type="radio" name="q1" value="4" required /> توفير الوقت 
                                    </li>
                                </ol>
                            </div>
                        </section>
                        {{-- Question --}}
                        <section class="section_next">
                            <div class="form-group">
                                <h3>تستخدم مرحلة التخطيط فى </h3>
                                <ol dir="rtl">
                                    <li>
                                        <input type="radio" name="q2" value="1" required /> انطلاق الفكرة
                                    </li>
                                    <li>
                                        <input type="radio" name="q2" value="2" required /> كتابة السيناريو 
                                    </li>
                                    <li>
                                        <input type="radio" name="q2" value="3" required /> انتاج المشاهد
                                    </li>
                                    <li>
                                        <input type="radio" name="q2" value="4" required /> تصدير و نشر الفيديو 
                                    </li>

                                </ol>
                            </div>
                        </section>
                        {{-- Question --}}
                        <section class="section_next">
                            <div class="form-group">
                                <h3> يعد من معايير انتاج الفيديو الرقمى التفاعلى </h3>
                                <ol dir="rtl">
                                    <li>
                                        <input type="radio" name="q3" value="1" required /> طول مدة عرض الفيديو 
                                    </li>
                                    <li>
                                        <input type="radio" name="q3" value="2" required /> الاعتماد على مؤثرات صوتية بصورة كبيرة 
                                    </li>
                                    <li>
                                        <input type="radio" name="q3" value="3" required /> استخدام عناصر توجيه الانتباه 
                                    </li>
                                    <li>
                                        <input type="radio" name="q3" value="4" required />التركيز على عنصر واحد فقط داخل المشهد 
                                    </li>
                                </ol>
                            </div>
                        </section>
                        {{-- Question --}}
                        <section class="section_next">
                            <div class="form-group">
                                <h3> يعد الفيديو الرقمى التفاعلى مقاطع فيديو مترابطة ذات معنى وتحتوى على عناصر تفاعلية </h3>
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
                                <h3>يستخدم الفيديو التفاعلى اداة لحل المشكلات الدراسية </h3>
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
                    <input type="submit" value="Submit" name="submit" class="btn btn-sm btn-primary"
                        style="margin-top: 20px; margin-right: 200px" />
                </form>
            </div>


            {{-- المكتبة الإئرائية --}}
            <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact-tab3">
                <div class="row" style="margin-bottom: 20px; text-align: center">
                    <p><strong><span style="font-size: 20px; font-family: Impact, Charcoal, sans-serif;">مفهوم الفيديو
                                الرقمى التفاعلى</span></strong></p>
                    <div style="margin-right: 530px">
                        <a
                            href="https://www.edutrapedia.com/%D8%A7%D9%84%D9%81%D9%8A%D8%AF%D9%8A%D9%88-%D8%A7%D9%84%D8%AA%D9%81%D8%A7%D8%B9%D9%84%D9%8A-%D9%88%D8%AF%D9%88%D8%B1%D9%87-%D9%81%D9%8A-%D8%A7%D9%84%D8%B9%D9%85%D9%84%D9%8A%D8%A9-%D8%A7%D9%84%D8%AA%D8%B1%D8%A8%D9%88%D9%8A%D8%A9-article-325">
                            <button class="btn btn-lg btn-pill btn-block btn-outline-success" type="button"
                                style="border-radius: 22px; width:150px; ">
                                تحميل الكتاب
                            </button> </a>
                    </div>
                </div>
                <hr>

                <div class="row" style="margin-bottom: 20px; text-align: center">
                    <p><strong><span style="font-size: 20px; font-family: Impact, Charcoal, sans-serif;">
                                استخدامات الفيديو التفاعلى فى العملية التعليمية
                            </span></strong></p>
                    <div style="margin-right: 530px">
                        <a
                            href="https://www.new-educ.com/%D8%AA%D9%88%D8%B8%D9%8A%D9%81-%D8%AA%D9%82%D9%86%D9%8A%D8%A7%D8%AA-%D8%A7%D9%84%D9%81%D9%8A%D8%AF%D9%8A%D9%88-%D8%A7%D9%84%D8%AA%D9%81%D8%A7%D8%B9%D9%84%D9%8A">
                            <button class="btn btn-lg btn-pill btn-block btn-outline-success" type="button"
                                style="border-radius: 22px; width:150px; ">
                                تحميل الكتاب
                            </button> </a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
