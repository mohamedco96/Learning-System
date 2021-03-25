@extends('layouts.quiz')
@section('content')
    <div>
        <?php
        $servername = 'localhost';
        $username = 'interactive';
        $password = 'g]JX&~id.LBW';
        $dbname = 'interactive';

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
        }

        if (isset($_GET['submit'])) {
        $q1 = $_GET['q1'];
        $q2 = $_GET['q2'];
        $q3 = $_GET['q3'];
        $q4 = $_GET['q4'];
        $q5 = $_GET['q5'];
        
        $id = $_GET['id'];
        }

        $score=0;
        
        
       if($q1 == '1'){
           $score++;
       }
       if($q2 == '2'){
           $score++;
       }
       if($q3 == '3'){
           $score++;
       }
       if($q4 == '1'){
           $score++;
       }
       if($q5 == '1'){
           $score++;
       }


        $percentage = ($score / 5) * 100;

    //     if ($percentage < 90) { 
        
    //     // header('Location:/module1');
    //     // exit();
    // } 
    
    if ($percentage >= 90) {
       
        $Sql = "UPDATE `users` SET  `score3` = $score, `percentage3` = $percentage, `module2` = '1' WHERE `users`.`id` = $id ";
        $scoreResult1 = $conn->query($Sql);
        // header('Location:/module2');
        // exit();
        }

    
        $conn->close();
        ?>

    </div>
    @if ($percentage < 90)
    <div class="container" style="margin-top: 60px">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
                <div class="card" style="margin-top: 60px">
                    <div class="card-block">
                        {{-- <h4 style="text-align: center">درجة الطالب  <strong>{{ $score }}</strong></h4>
                        <h4 style="text-align: center">النسبة المئوية <strong>{{ $percentage }}</strong></h4> --}}
                        <button class="btn btn-lg btn-pill btn-block btn-warning  " type="button" style="font-family: tahoma; margin-right: 350px; border-radius: 22px; width:200px;">درجة الطالب <strong>{{ $score }}</button> <br>
                        <button class="btn btn-lg btn-pill btn-block btn-secondary " type="button" style="font-family: tahoma; margin-right: 350px;  border-radius: 22px; width:200px;">النسبة المئوية <strong>{{ $percentage }}</button> <br>
                        <p >
                            <div class="body_next">
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>يستخدم الفيديو الرقمى التفاعلى فى </h3>
                                        <ol dir="rtl">
                                            @switch($q1)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">تعزيز التعلم النشط   إجابة صحيحة</button>
                                                </li>
                                                <li>
                                                    <h4>تنمية مهارات المتعلم</h4>
                                                </li>
                                                <li>
                                                    <h4>زيادة ثقة المتعلم</h4>
                                                </li>
                                                <li>
                                                    <h4> توفير الوقت</h4>
                                                </li> 
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>تعزيز التعلم النشط</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;"> تنمية مهارات المتعلم إجابة خاطئة</button>
                                                </li>
                                                <li>
                                                    <h4>زيادة ثقة المتعلم</h4>
                                                </li>
                                                <li>
                                                    <h4> توفير الوقت</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>تعزيز التعلم النشط</h4>
                                                </li>
                                                <li>
                                                    <h4>تنمية مهارات المتعلم</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   زيادة ثقة المتعلم إجابة خاطئة</button>
                                                </li>
                                                <li>
                                                    <h4> توفير الوقت</h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>تعزيز التعلم النشط</h4>
                                                </li>
                                                <li>
                                                    <h4>تنمية مهارات المتعلم</h4>
                                                </li>
                                                <li>
                                                    <h4>زيادة ثقة المتعلم</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   توفير الوقت إجابة خاطئة</button>
                                                </li>                                                    
                                                @break

                                                @default
                                                <span>Something went wrong, please try again</span>
                                            @endswitch
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>تستخدم مرحلة التخطيط فى </h3>
                                        <ol dir="rtl">
                                            @switch($q2)
                                                @case(2)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">كتابة السيناريو إجابة صحيحة</button>
                                                </li>
                                                <li>
                                                    <h4>انطلاق الفكرة</h4>
                                                </li>
                                                <li>
                                                    <h4>انتاج المشاهد</h4>
                                                </li>
                                                <li>
                                                    <h4> تصدير و نشر الفيديو</h4>
                                                </li> 
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>كتابة السيناريو</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;"> انطلاق الفكرة إجابة خاطئة</button>
                                                </li>
                                                <li>
                                                    <h4>انتاج المشاهد</h4>
                                                </li>
                                                <li>
                                                    <h4> تصدير و نشر الفيديو</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>كتابة السيناريو</h4>
                                                </li>
                                                <li>
                                                    <h4>انطلاق الفكرة</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   انتاج المشاهد إجابة خاطئة</button>
                                                </li>
                                                <li>
                                                    <h4> تصدير و نشر الفيديو</h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>انتاج المشاهد</h4>
                                                </li>
                                                <li>
                                                    <h4>كتابة السيناريو</h4>
                                                </li>
                                                <li>
                                                    <h4>انطلاق الفكرة</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   تصدير و نشر الفيديو إجابة خاطئة</button>
                                                </li>                                                    
                                                @break

                                                @default
                                                <span>Something went wrong, please try again</span>
                                            @endswitch
                                        </ol>
                                        
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> يعد من معايير إنتاج الفيديو الرقمى التفاعلى </h3>
                                        <ol dir="rtl">
                                            @switch($q3)
                                                @case(3)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">استخدام عناصر توجيه الانتباه إجابة صحيحة</button>
                                                </li>
                                                <li>
                                                    <h4> طول مدة عرض الفيديو</h4>
                                                </li>
                                                <li>
                                                    <h4>الاعتماد على مؤثرات صوتية بصورة كبيرة</h4>
                                                </li>
                                                <li>
                                                    <h4>التركيز على عنصر واحد فقط داخل المشهد</h4>
                                                </li> 
                                                @break

                                                @case(1)
                                                <li>
                                                    <h4>استخدام عناصر توجيه الانتباه</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;"> طول مدة عرض الفيديو إجابة خاطئة</button>
                                                </li>
                                                <li>
                                                    <h4>الاعتماد على مؤثرات صوتية بصورة كبيرة</h4>
                                                </li>
                                                <li>
                                                    <h4>التركيز على عنصر واحد فقط داخل المشهد</h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>استخدام عناصر توجيه الانتباه</h4>
                                                </li>
                                                <li>
                                                    <h4>التركيز على عنصر واحد فقط داخل المشهد</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   الاعتماد على مؤثرات صوتية بصورة كبيرة إجابة خاطئة</button>
                                                </li>
                                                <li>
                                                    <h4> طول مدة عرض الفيديو</h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>استخدام عناصر توجيه الانتباه</h4>
                                                </li>
                                                <li>
                                                    <h4> طول مدة عرض الفيديو</h4>
                                                </li>
                                                <li>
                                                    <h4>الاعتماد على مؤثرات صوتية بصورة كبيرة</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   التركيز على عنصر واحد فقط داخل المشهد إجابة خاطئة</button>
                                                </li>                                                    
                                                @break

                                                @default
                                                <span>Something went wrong, please try again</span>
                                            @endswitch
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> يعد الفيديو الرقمى التفاعلى مقاطع فيديو مترابطة ذات معنى وتحتوى على عناصر
                                            تفاعلية </h3>
                                            <ol dir="rtl">
                                                @switch($q4)
                                                    @case(1)
                                                    <li>
                                                        <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                        style="border-radius: 22px; width:400px;">صح إجابة صحيحة</button>
                                                    </li>
                                                    <li>
                                                        <h4>خطأ</h4>
                                                    </li>
                                                    @break
    
                                                    @case(2)
                                                    <li>
                                                        <h4>صح</h4>
                                                    </li>
                                                    <li>
                                                        <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                            style="border-radius: 22px; width:400px;"> خطأ إجابة خاطئة</button>
                                                    </li>
                                                    @break
    
                                                    @default
                                                    <span>Something went wrong, please try again</span>
                                                @endswitch
                                            </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>يستخدم الفيديو التفاعلى اداة لحل المشكلات الدراسية </h3>
                                        <ol dir="rtl">
                                            @switch($q5)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">صح إجابة صحيحة</button>
                                                </li>
                                                <li>
                                                    <h4>خطأ</h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>صح</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;"> خطأ إجابة خاطئة</button>
                                                </li>
                                                @break

                                                @default
                                                <span>Something went wrong, please try again</span>
                                            @endswitch
                                        </ol>
                                    </div>
                                </section>
    
                            </div>
                        </p>
                        {{-- @if ($score <= 50)
                        <button class="btn btn-lg btn-pill btn-block btn-warning  " type="button" style="margin-right: 350px; border-radius: 22px; width:150px;">منخفض</button> <br>
                        <button class="btn btn-lg btn-pill btn-block btn-secondary " type="button" style="margin-right: 350px;  border-radius: 22px; width:150px;">مرتفع</button> <br>
						@else
						<button class="btn btn-lg btn-pill btn-block btn-secondary  " type="button" style="margin-right: 350px; border-radius: 22px; width:150px;">منخفض</button> <br>
                        <button class="btn btn-lg btn-pill btn-block btn-warning " type="button" style="margin-right: 350px;  border-radius: 22px; width:150px;">مرتفع</button> <br>
                        @endif --}}

                        <a href="./module" class="btn btn-lg btn-pill btn-block btn-info" style="margin-right: 350px;  border-radius: 15px; width:250px;">الموديولات</a>
                        {{-- <button class="btn btn-lg btn-pill btn-block btn-info " type="button" style="margin-right: 350px;  border-radius: 15px; width:250px;">بدء الإختبار القبلي </button> <br> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif

    @if ($percentage >= 90)
    <div class="container" style="margin-top: 60px">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
                <div class="card" style="margin-top: 60px">
                    <div class="card-block">
                        {{-- <h4 style="text-align: center">درجة الطالب  <strong>{{ $score }}</strong></h4>
                        <h4 style="text-align: center">النسبة المئوية <strong>{{ $percentage }}</strong></h4> --}}
                        <button class="btn btn-lg btn-pill btn-block btn-warning  " type="button" style="font-family: tahoma; margin-right: 350px; border-radius: 22px; width:200px;">درجة الطالب <strong>{{ $score }}</button> <br>
                            <button class="btn btn-lg btn-pill btn-block btn-secondary " type="button" style="font-family: tahoma; margin-right: 350px;  border-radius: 22px; width:200px;">النسبة المئوية <strong>{{ $percentage }}</button> <br>
                           <p >
                            <div class="body_next">
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>يستخدم الفيديو الرقمى التفاعلى فى </h3>
                                        <ol dir="rtl">
                                            @switch($q1)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">تعزيز التعلم النشط إجابة صحيحة</button>
                                                </li>
                                                <li>
                                                    <h4>تنمية مهارات المتعلم</h4>
                                                </li>
                                                <li>
                                                    <h4>زيادة ثقة المتعلم</h4>
                                                </li>
                                                <li>
                                                    <h4> توفير الوقت</h4>
                                                </li> 
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>تعزيز التعلم النشط</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;"> تنمية مهارات المتعلم إجابة خاطئة</button>
                                                </li>
                                                <li>
                                                    <h4>زيادة ثقة المتعلم</h4>
                                                </li>
                                                <li>
                                                    <h4> توفير الوقت</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>تعزيز التعلم النشط</h4>
                                                </li>
                                                <li>
                                                    <h4>تنمية مهارات المتعلم</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   زيادة ثقة المتعلم إجابة خاطئة</button>
                                                </li>
                                                <li>
                                                    <h4> توفير الوقت</h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>تعزيز التعلم النشط</h4>
                                                </li>
                                                <li>
                                                    <h4>تنمية مهارات المتعلم</h4>
                                                </li>
                                                <li>
                                                    <h4>زيادة ثقة المتعلم</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   توفير الوقت إجابة خاطئة</button>
                                                </li>                                                    
                                                @break

                                                @default
                                                <span>Something went wrong, please try again</span>
                                            @endswitch
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>تستخدم مرحلة التخطيط فى </h3>
                                        <ol dir="rtl">
                                            @switch($q2)
                                                @case(2)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">كتابة السيناريو إجابة صحيحة</button>
                                                </li>
                                                <li>
                                                    <h4>انطلاق الفكرة</h4>
                                                </li>
                                                <li>
                                                    <h4>انتاج المشاهد</h4>
                                                </li>
                                                <li>
                                                    <h4> تصدير و نشر الفيديو</h4>
                                                </li> 
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>كتابة السيناريو</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;"> انطلاق الفكرة إجابة خاطئة</button>
                                                </li>
                                                <li>
                                                    <h4>انتاج المشاهد</h4>
                                                </li>
                                                <li>
                                                    <h4> تصدير و نشر الفيديو</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>كتابة السيناريو</h4>
                                                </li>
                                                <li>
                                                    <h4>انطلاق الفكرة</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   انتاج المشاهد إجابة خاطئة}</button>
                                                </li>
                                                <li>
                                                    <h4> تصدير و نشر الفيديو</h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>انتاج المشاهد</h4>
                                                </li>
                                                <li>
                                                    <h4>كتابة السيناريو</h4>
                                                </li>
                                                <li>
                                                    <h4>انطلاق الفكرة</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   تصدير و نشر الفيديو إجابة خاطئة</button>
                                                </li>                                                    
                                                @break

                                                @default
                                                <span>Something went wrong, please try again</span>
                                            @endswitch
                                        </ol>
                                        
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> يعد من معايير إنتاج الفيديو الرقمى التفاعلى </h3>
                                        <ol dir="rtl">
                                            @switch($q3)
                                                @case(3)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">استخدام عناصر توجيه الانتباه إجابة صحيحة</button>
                                                </li>
                                                <li>
                                                    <h4> طول مدة عرض الفيديو</h4>
                                                </li>
                                                <li>
                                                    <h4>الاعتماد على مؤثرات صوتية بصورة كبيرة</h4>
                                                </li>
                                                <li>
                                                    <h4>التركيز على عنصر واحد فقط داخل المشهد</h4>
                                                </li> 
                                                @break

                                                @case(1)
                                                <li>
                                                    <h4>استخدام عناصر توجيه الانتباه</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;"> طول مدة عرض الفيديو إجابة خاطئة</button>
                                                </li>
                                                <li>
                                                    <h4>الاعتماد على مؤثرات صوتية بصورة كبيرة</h4>
                                                </li>
                                                <li>
                                                    <h4>التركيز على عنصر واحد فقط داخل المشهد</h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>استخدام عناصر توجيه الانتباه</h4>
                                                </li>
                                                <li>
                                                    <h4>التركيز على عنصر واحد فقط داخل المشهد</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   الاعتماد على مؤثرات صوتية بصورة كبيرة إجابة خاطئة</button>
                                                </li>
                                                <li>
                                                    <h4> طول مدة عرض الفيديو</h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>استخدام عناصر توجيه الانتباه</h4>
                                                </li>
                                                <li>
                                                    <h4> طول مدة عرض الفيديو</h4>
                                                </li>
                                                <li>
                                                    <h4>الاعتماد على مؤثرات صوتية بصورة كبيرة</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   التركيز على عنصر واحد فقط داخل المشهد إجابة خاطئة</button>
                                                </li>                                                    
                                                @break

                                                @default
                                                <span>Something went wrong, please try again</span>
                                            @endswitch
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> يعد الفيديو الرقمى التفاعلى مقاطع فيديو مترابطة ذات معنى وتحتوى على عناصر
                                            تفاعلية </h3>
                                            <ol dir="rtl">
                                                @switch($q4)
                                                    @case(1)
                                                    <li>
                                                        <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                        style="border-radius: 22px; width:400px;">صح إجابة صحيحة</button>
                                                    </li>
                                                    <li>
                                                        <h4>خطأ</h4>
                                                    </li>
                                                    @break
    
                                                    @case(2)
                                                    <li>
                                                        <h4>صح</h4>
                                                    </li>
                                                    <li>
                                                        <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                            style="border-radius: 22px; width:400px;"> خطأ إجابة خاطئة</button>
                                                    </li>
                                                    @break
    
                                                    @default
                                                    <span>Something went wrong, please try again</span>
                                                @endswitch
                                            </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>يستخدم الفيديو التفاعلى اداة لحل المشكلات الدراسية </h3>
                                        <ol dir="rtl">
                                            @switch($q5)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">صح إجابة صحيحة</button>
                                                </li>
                                                <li>
                                                    <h4>خطأ</h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>صح</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;"> خطأ إجابة خاطئة</button>
                                                </li>
                                                @break

                                                @default
                                                <span>Something went wrong, please try again</span>
                                            @endswitch
                                        </ol>
                                    </div>
                                </section>
    
                            </div>
                        </p>
                        {{-- @if ($score <= 50)
                        <button class="btn btn-lg btn-pill btn-block btn-warning  " type="button" style="margin-right: 350px; border-radius: 22px; width:150px;">منخفض</button> <br>
                        <button class="btn btn-lg btn-pill btn-block btn-secondary " type="button" style="margin-right: 350px;  border-radius: 22px; width:150px;">مرتفع</button> <br>
						@else
						<button class="btn btn-lg btn-pill btn-block btn-secondary  " type="button" style="margin-right: 350px; border-radius: 22px; width:150px;">منخفض</button> <br>
                        <button class="btn btn-lg btn-pill btn-block btn-warning " type="button" style="margin-right: 350px;  border-radius: 22px; width:150px;">مرتفع</button> <br>
                        @endif --}}

                        <a href="./module" class="btn btn-lg btn-pill btn-block btn-info" style="margin-right: 350px;  border-radius: 15px; width:250px;">الموديولات</a>
                        {{-- <button class="btn btn-lg btn-pill btn-block btn-info " type="button" style="margin-right: 350px;  border-radius: 15px; width:250px;">بدء الإختبار القبلي </button> <br> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif
@endsection
