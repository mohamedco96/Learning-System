@php
$users = DB::table('users')->where('id', Auth::user()->id)->get();

foreach ($users as $user) {
// echo $user->email;
}
@endphp

@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-lg-9">
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
                        style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Open Sans";text-align:right;'>
                        <strong><span style='font-size:19px;line-height:107%;font-family:"Open Sans";'>الهدف العام
                                للموديول:&nbsp;</span></strong>
                    </p>
                    <p dir="RTL"
                        style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Open Sans";text-align:right;'>
                        <span style='font-size:19px;line-height:107%;font-family:"Open Sans";'>التعرف على بعض برامج وتطبيقات إنتاج الفيديو 
                            الرقمى التفاعلى والمقارنة بينهما</span>
                    </p>
                    <p dir="RTL"
                        style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Open Sans";text-align:right;'>
                        <strong><span style='font-size:19px;line-height:107%;font-family:"Open Sans";'>الأهداف
                                الإجرائية:</span></strong>
                    </p>
                    <ol style="list-style-type: decimal;margin-left:-0.5in;">
                        <li><span style='line-height:150%;font-family:"Open Sans";'>يحدد ماهية برامج إنتاج الفيديو الرقمى 
                               التفاعلى </span></li>
                        <li><span style='line-height:150%;font-family:"Open Sans";'>يستنتج الإمكانات الفنية والتكنولوجية لإنتاج الفيديو الرقمى 
                                التفاعلى</span></li>
                        <li><span style='line-height:150%;font-family:"Open Sans";'>يذكر أهم برامج إنتاج الفيديو الرقمى 
                                التفاعلى</span></li>
                        <li><span style='line-height:150%;font-family:"Open Sans";'>يقارن بين إمكانات برامج إنتاج الفيديو الرقمى 
                                التفاعلى</span></li>
                        <li><span style='line-height:150%;font-family:"Open Sans";'>يعدد إمكانات برنامج Cartoon Animator4
                            لإنتاج الأفلام الكرتونية </span></li>
                        <li><span style='line-height:150%;font-family:"Open Sans";'>يذكر متطلبات تثبيت برنامج
                            Cartoon Animator4 &nbsp;</span></li>
                        <li><span style='line-height:150%;font-family:"Open Sans";'>ينفذ خطوات تثبيت برنامج
                            Cartoon Animator4</span></li>
                        <li><span style='line-height:150%;font-family:"Open Sans";'>يشغل برنامج 
                                Cartoon Animator4</span></li>
                        <li><span style='line-height:150%;font-family:"Open Sans";'> يفرق بين قوائم برنامج 
                                    Cartoon Animator4</span></li>
                        <li><span style='line-height:150%;font-family:"Open Sans";'>يتحكم فى طرق عرض قوائم  
                                        Cartoon Animator4</span></li>
                    </ol>
    
                </div>
    
                {{-- التعليمات --}}
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <p dir="RTL"
                        style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Open Sans";text-align:right;'>
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
                                style='line-height:107%;font-family:"Open Sans";font-family:"Open Sans";font-size:14.0pt;'>الاطلاع
                                على الجدول الزمنى الخاص بالموديول&nbsp;</span></li>
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
                </div>
    
                {{-- المحتوى التعليمي --}}
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="container" style="margin-top: 60px">
                        <div class="row">
                            <div class="col-sm-6">
                                <p><span style="color: rgb(251, 178, 99); font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                style="font-size: 24px;">الدرس الأول</span></strong></span></p>
                                <p><span style="color: rgb(251, 178, 99); font-family: 'Open Sans', Charcoal, sans-serif;"><span
                                            style="font-size: 20px; color: rgb(0, 0, 0);"><strong>
                                                سوف نتعرف فى هذا الدرس على إمكانات الفيديو الرقمى التفاعلى وبرامج إنتاجه
                                            </strong></span></span></p>
                                <p><a href="https://drive.google.com/drive/u/0/folders/1-je8P0cLQEpngP1Nx7ZJXG5rUoqTbFuw"
                                        rel="noopener noreferrer" target="_blank"><span
                                            style="font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                    style="font-size: 20px; color: rgb(28, 146, 181);">تحميل المحتوى
                                                    نصى</span></strong></span></a></p>
                            </div>
                            <div class="col-sm-6" style="">
                                <video width="320" height="240" controls>
                                    <source src="./video/module2/m2.1.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p><a href="#"><span
                                            style="font-family: 'Open Sans', Charcoal, sans-serif; font-size: 24px; "><strong><span
                                                    style="color: rgb(28, 146, 181);">التواصل مع
                                                    الباحثة</span></strong></span></a></p>
                            </div>
                        </div>
                        <hr>
    
                        <div class="row">
                            <div class="col-sm-6">
                                <p><span style="color: rgb(251, 178, 99); font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                style="font-size: 24px;">الدرس الثاني</span></strong></span></p>
                                <p><span style="color: rgb(251, 178, 99); font-family: 'Open Sans', Charcoal, sans-serif;"><span
                                            style="font-size: 20px; color: rgb(0, 0, 0);"><strong>
                                                سوف نتعرف فى هذا الدرس على برنامج Cartoon Animator4 لانتاج الفيديوهات الكرتونية
                                                وخطوات تثبيت البرنامج
                                            </strong></span></span></p>
                                <p><a href="https://drive.google.com/drive/u/0/folders/1-je8P0cLQEpngP1Nx7ZJXG5rUoqTbFuw"
                                        rel="noopener noreferrer" target="_blank"><span
                                            style="font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                    style="font-size: 20px; color: rgb(28, 146, 181);">تحميل المحتوى
                                                    نصى</span></strong></span></a></p>
                            </div>
                            <div class="col-sm-6" style="">
                                <video width="320" height="240" controls>
                                    <source src="./video/module2/m2.2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p><a href="#"><span
                                            style="font-family: 'Open Sans', Charcoal, sans-serif; font-size: 24px; "><strong><span
                                                    style="color: rgb(28, 146, 181);">التواصل مع
                                                    الباحثة</span></strong></span></a></p>
                            </div>
                        </div>
                        <hr>
    
                        <div class="row">
                            <div class="col-sm-6">
                                <p><span style="color: rgb(251, 178, 99); font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                style="font-size: 24px;">الدرس الثالث</span></strong></span></p>
                                <p><span style="color: rgb(251, 178, 99); font-family: 'Open Sans', Charcoal, sans-serif;"><span
                                            style="font-size: 20px; color: rgb(0, 0, 0);"><strong>
                                                سوف نتعرف فى هذا الدرس واجهة برنامج Cartoon Animator4
                                                
                                            </strong></span></span></p>
                                <p><a href="https://drive.google.com/drive/u/0/folders/1-je8P0cLQEpngP1Nx7ZJXG5rUoqTbFuw"
                                        rel="noopener noreferrer" target="_blank"><span
                                            style="font-family: 'Open Sans', Charcoal, sans-serif;"><strong><span
                                                    style="font-size: 20px; color: rgb(28, 146, 181);">تحميل المحتوى
                                                    نصى</span></strong></span></a></p>
                            </div>
                            <div class="col-sm-6" style="">
                                <video width="320" height="240" controls>
                                    <source src="./video/module2/m2.3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p><a href="#"><span
                                            style="font-family: 'Open Sans', Charcoal, sans-serif; font-size: 24px; "><strong><span
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
                                    style="font-size: 22px; font-family: 'Open Sans', Charcoal, sans-serif;">النشاط
                                    الأول</span></strong></span></p>
                    <p style="text-align: center;"><span style="font-family: 'Open Sans', Charcoal, sans-serif;"><span
                                style="font-size: 28px;">
                                اكتب ورقة بحثية لا تتعدى 150 كلمة عن برامج انتاج الفيديو التفاعلى ومميزات كلا منها 
                            </span></span></p>
                    <p style="text-align: center;"><span style="font-family: 'Open Sans', Charcoal, sans-serif;"><span
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
                                    <h3>يعد من أهم تطبيقات إنتاج فيديوهات كرتونية برنامج  </h3>
                                    <ol dir="rtl">
                                        <li>
                                            <input type="radio" name="q1" value="1" required /> Adobe Premiere pro  
                                        </li>
                                        <li>
                                            <input type="radio" name="q1" value="2" required /> Adobe Illustrator  
                                        </li>
                                        <li>
                                            <input type="radio" name="q1" value="3" required /> Cartoon Animator 4  
                                        </li>
                                        <li>
                                            <input type="radio" name="q1" value="4" required /> Adobe Photoshop  
                                        </li>
                                    </ol>
                                </div>
                            </section>
                            {{-- Question --}}
                            <section class="section_next">
                                <div class="form-group">
                                    <h3>اى مما يلى يعد من إمكانات الفيديو التفاعلى  </h3>
                                    <ol dir="rtl">
                                        <li>
                                            <input type="radio" name="q2" value="1" required /> الابحار فى محتوى الفيديو 
                                        </li>
                                        <li>
                                            <input type="radio" name="q2" value="2" required /> سهولة التعديل على محتويات الفيديو من قبل المستخدم  
                                        </li>
                                        <li>
                                            <input type="radio" name="q2" value="3" required /> سهولة الحذف والاضافة من قبل المستخدم 
                                        </li>
                                        <li>
                                            <input type="radio" name="q2" value="4" required /> التحكم فى وقت العرض  
                                        </li>
    
                                    </ol>
                                </div>
                            </section>
                            {{-- Question --}}
                            <section class="section_next">
                                <div class="form-group">
                                    <h3> لاضافة محتويات داخل المشهد يتم التعامل مع شريط  </h3>
                                    <ol dir="rtl">
                                        <li>
                                            <input type="radio" name="q3" value="1" required /> Content manager  
                                        </li>
                                        <li>
                                            <input type="radio" name="q3" value="2" required /> Scene Manager  
                                        </li>
                                        <li>
                                            <input type="radio" name="q3" value="3" required /> Layer Manager  
                                        </li>
                                        <li>
                                            <input type="radio" name="q3" value="4" required /> Workspace 
                                        </li>
                                    </ol>
                                </div>
                            </section>
                            {{-- Question --}}
                            <section class="section_next">
                                <div class="form-group">
                                    <h3> تستخدم شريط أدوات الكاميرا للتحكم فى عناصر المشهد من حيث التكرار والنقل   </h3>
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
                                    <h3>يستخدم برنامج adobe Premiere  فى تحرير وتعديل الفيديوهات  </h3>
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
                        <p><strong><span style="font-size: 20px; font-family: 'Open Sans', Charcoal, sans-serif;">إمكانات الفيديو
                                  الرقمى التفاعلى  </span></strong></p>
                        <div style="margin-right: 530px">
                            <a
                                href="https://sites.google.com/site/interactivevideo125/home/alamkanat-altlymyh-llfydyw-altfaly">
                                <button class="btn btn-lg btn-pill btn-block btn-outline-success" type="button"
                                    style="border-radius: 22px; width:150px; ">
                                    اضغط هنا
                                </button> </a>
                        </div>
                    </div>
                    <hr>
    
                    <div class="row" style="margin-bottom: 20px; text-align: center">
                        <p><strong><span style="font-size: 20px; font-family: 'Open Sans', Charcoal, sans-serif;">
                            برامج إنتاج الفيديو التفاعلى 
                                </span></strong></p>
                        <div style="margin-right: 530px">
                            <a
                                href="https://bestonebest.com/movie-editing-production-program">
                                <button class="btn btn-lg btn-pill btn-block btn-outline-success" type="button"
                                    style="border-radius: 22px; width:150px; ">
                                    إضغط هنا
                                </button> </a>
                        </div>
                    </div>
                    <hr>
    
                    <div class="row" style="margin-bottom: 20px; text-align: center">
                        <p><strong><span style="font-size: 20px; font-family: 'Open Sans', Charcoal, sans-serif;">
                            برنامج cartoon animator 4  
                                </span></strong></p>
                        <div style="margin-right: 530px">
                            <a
                                href="https://www.shlinks2.com/2019/07/Cartoon-Animator-4-0-Pipeline.html">
                                <button class="btn btn-lg btn-pill btn-block btn-outline-success" type="button"
                                    style="border-radius: 22px; width:150px; ">
                                    إضغط هنا
                                </button> </a>
                        </div>
                    </div>
                    <hr>
    
                    <div class="row" style="margin-bottom: 20px; text-align: center">
                        <p><strong><span style="font-size: 20px; font-family: 'Open Sans', Charcoal, sans-serif;">
                            متطلبات تشغيل البرنامج  
                                </span></strong></p>
                        <div style="margin-right: 530px">
                            <a
                                href="https://www.foxaden.com/2019/05/operating-requirements-cartoon-animator-4.html">
                                <button class="btn btn-lg btn-pill btn-block btn-outline-success" type="button"
                                    style="border-radius: 22px; width:150px; ">
                                    إضغط هنا
                                </button> </a>
                        </div>
                    </div>
                    <hr>
    
                    <div class="row" style="margin-bottom: 20px; text-align: center">
                        <p><strong><span style="font-size: 20px; font-family: 'Open Sans', Charcoal, sans-serif;">
                            تحميل البرنامج   
                                </span></strong></p>
                        <div style="margin-right: 530px">
                            <a
                                href="https://drive.google.com/file/d/1uF3SGpE89BVPEcDevVYnPh4Q0Pbe1_1O/view?usp=sharing">
                                <button class="btn btn-lg btn-pill btn-block btn-outline-success" type="button"
                                    style="border-radius: 22px; width:150px; ">
                                    إضغط هنا
                                </button> </a>
                        </div>
                    </div>
                    <hr>
    
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="jzdbox1 jzdbasf jzdcal">

                <div class="jzdcalt">Jan 2021</div>

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
