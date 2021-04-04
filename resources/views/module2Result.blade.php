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
        $q6 = $_GET['q6'];
        $q7 = $_GET['q7'];
        $q8 = $_GET['q8'];

        $id = $_GET['id'];
        }

        $score=0;


       if($q1 == '3'){
           $score++;
       }
       if($q2 == '1'){
           $score++;
       }
       if($q3 == '4'){
           $score++;
       }
       if($q4 == '2'){
           $score++;
       }
       if($q5 == '2'){
           $score++;
       }
       if($q6 == '1'){
           $score++;
       }
       if($q7 == '1'){
           $score++;
       }
       if($q8 == '2'){
           $score++;
       }


        $percentage = ($score / 8) * 100;

    //     if ($percentage < 85) {

    //     // header('Location:/module1');
    //     // exit();
    // }

    if ($percentage >= 85) {

        $Sql = "UPDATE `users` SET  `module2Score` = $score, `module2Percentage` = $percentage, `module3` = '1' WHERE `users`.`id` = $id ";
        $scoreResult1 = $conn->query($Sql);
        // header('Location:/module2');
        // exit();
        }


        $conn->close();
        ?>

    </div>
    @if ($percentage < 85)
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
                                        <h3>يعد من أهم تطبيقات إنتاج فيديو كرتوني برنامج  </h3>
                                        <ol dir="rtl">
                                            @switch($q1)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئة  Adobe Premiere pro </button>
                                                </li>
                                                <li>
                                                    <h4>Adobe Illustrator  </h4>
                                                </li>
                                                <li>
                                                    <h4>Cartoon Animator 4 </h4>
                                                </li>
                                                <li>
                                                    <h4> Adobe Photoshop </h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Adobe Premiere pro</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">   إجابة خاطئة  Adobe Illustrator</button>
                                                </li>
                                                <li>
                                                    <h4>Cartoon Animator 4</h4>
                                                </li>
                                                <li>
                                                    <h4> Adobe Photoshop</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>Adobe Premiere pro</h4>
                                                </li>
                                                <li>
                                                    <h4>Adobe Illustrator </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة صحيحة   Cartoon Animator 4 </button>
                                                </li>
                                                <li>
                                                    <h4>Adobe Photoshop  </h4>
                                                </li>
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Adobe Premiere pro </h4>
                                                </li>
                                                <li>
                                                    <h4>Adobe Illustrator </h4>
                                                </li>
                                                <li>
                                                    <h4>Cartoon Animator 4 </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة 	Adobe Photoshop </button>
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
                                        <h3>اى مما يلى يعد من إمكانات الفيديو التفاعلى  </h3>
                                        <ol dir="rtl">
                                            @switch($q2)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> الابحار فى محتوى الفيديو      إجابة صحيحة </button>
                                                </li>
                                                <li>
                                                    <h4>سهولة التعديل على محتويات الفيديو من قبل المستخدم </h4>
                                                </li>
                                                <li>
                                                    <h4>سهولة الحذف والاضافة من قبل المستخدم </h4>
                                                </li>
                                                <li>
                                                    <h4>التحكم فى وقت العرض </h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>الابحار فى محتوى الفيديو</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">سهولة التعديل على محتويات الفيديو من قبل المستخدم     إجابة خاطئة </button>
                                                </li>
                                                <li>
                                                    <h4>سهولة الحذف والاضافة من قبل المستخدم </h4>
                                                </li>
                                                <li>
                                                    <h4>التحكم فى وقت العرض </h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>الابحار فى محتوى الفيديو </h4>
                                                </li>
                                                <li>
                                                    <h4>سهولة التعديل على محتويات الفيديو من قبل المستخدم </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">سهولة الحذف والاضافة من قبل المستخدم   إجابة خاطئة </button>
                                                </li>
                                                <li>
                                                    <h4> التحكم فى وقت العرض </h4>
                                                </li>
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>الابحار فى محتوى الفيديو </h4>
                                                </li>
                                                <li>
                                                    <h4>سهولة التعديل على محتويات الفيديو من قبل المستخدم  </h4>
                                                </li>
                                                <li>
                                                    <h4>سهولة الحذف والاضافة من قبل المستخدم  </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;"> التحكم فى وقت العرض      إجابة خاطئة  </button>
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
                                        <h3> لاضافة محتويات داخل المشهد يتم التعامل مع شريط  </h3>
                                        <ol dir="rtl">
                                            @switch($q3)
                                                @case(3)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">إجابة خاطئة   Scene Manager</button>
                                                </li>
                                                <li>
                                                    <h4> Layer Manager </h4>
                                                </li>
                                                <li>
                                                    <h4>Workspace</h4>
                                                </li>
                                                <li>
                                                    <h4>Content manager </h4>
                                                </li>
                                                @break

                                                @case(1)
                                                <li>
                                                    <h4>Scene Manager </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">إجابة خاطئة   Layer Manager </button>
                                                </li>
                                                <li>
                                                    <h4>Workspace</h4>
                                                </li>
                                                <li>
                                                    <h4>Content manager </h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Scene Manager </h4>
                                                </li>
                                                <li>
                                                    <h4>Layer Manager </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   إجابة خاطئة  Workspace</button>
                                                </li>
                                                <li>
                                                    <h4> Content manager </h4>
                                                </li>
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Scene Manager </h4>
                                                </li>
                                                <li>
                                                    <h4> Layer Manager </h4>
                                                </li>
                                                <li>
                                                    <h4>Workspace</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">إجابة صحيحة   Content manager </button>
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
                                        <h3> لإضافة مشروع جديد يتم الضغط على قائمة:  </h3>
                                        <ol dir="rtl">
                                            @switch($q4)
                                                @case(3)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">   إجابة خاطئة  New </button>
                                                </li>
                                                <li>
                                                    <h4> File  </h4>
                                                </li>
                                                <li>
                                                    <h4>Project </h4>
                                                </li>
                                                <li>
                                                    <h4>Edit </h4>
                                                </li>
                                                @break

                                                @case(1)
                                                <li>
                                                    <h4>New </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;"> إجابة صحيحة   File</button>
                                                </li>
                                                <li>
                                                    <h4>Project</h4>
                                                </li>
                                                <li>
                                                    <h4>Edit </h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>New  </h4>
                                                </li>
                                                <li>
                                                    <h4>File </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئة  Project</button>
                                                </li>
                                                <li>
                                                    <h4> Edit </h4>
                                                </li>
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>New</h4>
                                                </li>
                                                <li>
                                                    <h4> File </h4>
                                                </li>
                                                <li>
                                                    <h4>Project </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئة  Edit</button>
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
                                        <h3> يستخدم شريط أدوات الكاميرا للتحكم فى عناصر المشهد من حيث التكرار والنقل
                                             </h3>
                                            <ol dir="rtl">
                                                @switch($q5)
                                                    @case(1)
                                                    <li>
                                                        <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                        style="border-radius: 22px; width:400px;">صح إجابةخاطئة</button>
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
                                                            style="border-radius: 22px; width:400px;"> خطأ إجابة صحيحة</button>
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
                                        <h3>يستخدم برنامج adobe Premiere  فى تحرير وتعديل الفيديوهات  </h3>
                                        <ol dir="rtl">
                                            @switch($q6)
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
                                        <h3>يمكن الوصول إلى امر تكرار  Duplicateمن شريط الادوات  </h3>
                                        <ol dir="rtl">
                                            @switch($q7)
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
                                        <h3>يعد برنامج Photoshop  من البرامج الشهيرة فى إنتاج الفيديو الرقمى التفاعلى </h3>
                                        <ol dir="rtl">
                                            @switch($q8)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">صح إجابة خاطئة</button>
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
                                                        style="border-radius: 22px; width:400px;"> خطأ إجابة صحيحة</button>
                                                </li>
                                                @break

                                                @default
                                                <span>Something went wrong, please try again</span>
                                            @endswitch
                                        </ol>
                                    </div>
                                </section>

                            </div>
{{--                        </p>--}}
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

    @if ($percentage >= 85)
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
                                        <h3>يعد من أهم تطبيقات إنتاج فيديو كرتوني برنامج  </h3>
                                        <ol dir="rtl">
                                            @switch($q1)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">إجابة خاطئة   Adobe Premiere pro </button>
                                                </li>
                                                <li>
                                                    <h4>Adobe Illustrator </h4>
                                                </li>
                                                <li>
                                                    <h4>Cartoon Animator 4 </h4>
                                                </li>
                                                <li>
                                                    <h4> Adobe Photoshop </h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Adobe Premiere pro</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">  إجابة خاطئة  Adobe Illustrator </button>
                                                </li>
                                                <li>
                                                    <h4>Cartoon Animator 4</h4>
                                                </li>
                                                <li>
                                                    <h4> Adobe Photoshop</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>Adobe Premiere pro</h4>
                                                </li>
                                                <li>
                                                    <h4>Adobe Illustrator</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة صحيحة   Cartoon Animator 4  </button>
                                                </li>
                                                <li>
                                                    <h4> Adobe Photoshop</h4>
                                                </li>
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Adobe Premiere pro</h4>
                                                </li>
                                                <li>
                                                    <h4>Adobe Illustrator</h4>
                                                </li>
                                                <li>
                                                    <h4>Cartoon Animator 4 </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة  Adobe Photoshop  </button>
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
                                        <h3>اى مما يلى يعد من إمكانات الفيديو التفاعلى  </h3>
                                        <ol dir="rtl">
                                            @switch($q2)
                                                @case(2)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">  الابحار فى محتوى الفيديو   إجابة صحيحة </button>
                                                </li>
                                                <li>
                                                    <h4>سهولة التعديل على محتويات الفيديو من قبل المستخدم </h4>
                                                </li>
                                                <li>
                                                    <h4>سهولة الحذف والاضافة من قبل المستخدم </h4>
                                                </li>
                                                <li>
                                                    <h4> التحكم فى وقت العرض </h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>الابحار فى محتوى الفيديو </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;"> سهولة التعديل على محتويات الفيديو من قبل المستخدم   إجابة خاطئة </button>
                                                </li>
                                                <li>
                                                    <h4>سهولة الحذف والاضافة من قبل المستخدم </h4>
                                                </li>
                                                <li>
                                                    <h4> التحكم فى وقت العرض </h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>الابحار فى محتوى الفيديو </h4>
                                                </li>
                                                <li>
                                                    <h4>سهولة التعديل على محتويات الفيديو من قبل المستخدم </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  سهولة الحذف والاضافة من قبل المستخدم   إجابة خاطئة </button>
                                                </li>
                                                <li>
                                                    <h4>التحكم فى وقت العرض </h4>
                                                </li>
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>الابحار فى محتوى الفيديو </h4>
                                                </li>
                                                <li>
                                                    <h4>سهولة التعديل على محتويات الفيديو من قبل المستخدم </h4>
                                                </li>
                                                <li>
                                                    <h4>سهولة الحذف والاضافة من قبل المستخدم </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  التحكم فى وقت العرض   إجابة خاطئة  </button>
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
                                        <h3> لاضافة محتويات داخل المشهد يتم التعامل مع شريط  </h3>
                                        <ol dir="rtl">
                                            @switch($q3)
                                                @case(3)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئة  Scene Manager  </button>
                                                </li>
                                                <li>
                                                    <h4> Layer Manager </h4>
                                                </li>
                                                <li>
                                                    <h4> Workspace</h4>
                                                </li>
                                                <li>
                                                    <h4>Content manager </h4>
                                                </li>
                                                @break

                                                @case(1)
                                                <li>
                                                    <h4>Scene Manager </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">  إجابة خاطئة   Layer Manager  </button>
                                                </li>
                                                <li>
                                                    <h4>Workspace </h4>
                                                </li>
                                                <li>
                                                    <h4>Content manager </h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Scene Manager </h4>
                                                </li>
                                                <li>
                                                    <h4>Layer Manager </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">    إجابة خاطئة  Workspace</button>
                                                </li>
                                                <li>
                                                    <h4> Content manager </h4>
                                                </li>
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Scene Manager </h4>
                                                </li>
                                                <li>
                                                    <h4> Layer Manager </h4>
                                                </li>
                                                <li>
                                                    <h4>Workspace </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">    إجابة صحيحة  Content manager </button>
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
                                        <h3>- يستخدم شريط أدوات الكاميرا للتحكم فى عناصر المشهد من حيث التكرار والنقل
                                             </h3>
                                            <ol dir="rtl">
                                                @switch($q4)
                                                    @case(1)
                                                    <li>
                                                        <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                        style="border-radius: 22px; width:400px;">صح إجابةخاطئة</button>
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
                                                            style="border-radius: 22px; width:400px;"> خطأ إجابة صحيحة</button>
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
                                        <h3>يستخدم برنامج adobe Premiere  فى تحرير وتعديل الفيديوهات  </h3>
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
{{--                        </p>--}}
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
