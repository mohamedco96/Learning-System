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


       if($q1 == '4'){
           $score++;
       }
       if($q2 == '1'){
           $score++;
       }
       if($q3 == '1'){
           $score++;
       }
       if($q4 == '1'){
           $score++;
       }
       if($q5 == '2'){
           $score++;
       }


        $percentage = ($score / 5) * 100;

    //     if ($percentage < 90) {

    //     // header('Location:/module1');
    //     // exit();
    // }

    if ($percentage >= 85) {

        $Sql = "UPDATE `users` SET  `module4Score` = $score, `module4Percentage` = $percentage, `module5` = '1' WHERE `users`.`id` = $id ";
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
                                        <h3>لتعديل أجزاء الشخصيات والعناصر يستخدم أمر </h3>
                                        <ol dir="rtl">
                                            @switch($q1)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة   Add new sprite  </button>
                                                </li>
                                                <li>
                                                    <h4>Editor pose </h4>
                                                </li>
                                                <li>
                                                    <h4>Character </h4>
                                                </li>
                                                <li>
                                                    <h4> Sprite editor</h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Add new sprite </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">إجابة خاطئة   Editor pose </button>
                                                </li>
                                                <li>
                                                    <h4>Character</h4>
                                                </li>
                                                <li>
                                                    <h4> Sprite editor</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>Add new sprite </h4>
                                                </li>
                                                <li>
                                                    <h4>Editor pose </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئة    Character </button>
                                                </li>
                                                <li>
                                                    <h4> Sprite editor</h4>
                                                </li>
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Add new sprite </h4>
                                                </li>
                                                <li>
                                                    <h4>Editor pose </h4>
                                                </li>
                                                <li>
                                                    <h4>Character </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">    إجابة صحيحة   Sprite editor</button>
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
                                        <h3>لإضافة عظام تحريك الشخصيات بإستخدام: </h3>
                                        <ol dir="rtl">
                                            @switch($q2)
                                                @case(2)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة صحيحة  Create Bone </button>
                                                </li>
                                                <li>
                                                    <h4>Composer</h4>
                                                </li>
                                                <li>
                                                    <h4>Animation </h4>
                                                </li>
                                                <li>
                                                    <h4> Edit Pose</h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Create Bone </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">  إجابة خاطئةComposer</button>
                                                </li>
                                                <li>
                                                    <h4>Animation </h4>
                                                </li>
                                                <li>
                                                    <h4> Edit Pose</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>Create Bone </h4>
                                                </li>
                                                <li>
                                                    <h4>Composer</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   إجابة خاطئة   Animation</button>
                                                </li>
                                                <li>
                                                    <h4> Edit Pose</h4>
                                                </li>
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Create Bone </h4>
                                                </li>
                                                <li>
                                                    <h4>Composer</h4>
                                                </li>
                                                <li>
                                                    <h4>Animation </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   إجابة خاطئة   Edit Pose</button>
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
                                        <h3> 	يتم التعامل مع ملامح الوجه بإستخدام أمر:  </h3>
                                        <ol dir="rtl">
                                            @switch($q3)
                                                @case(3)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة صحيحة  Face Key editor </button>
                                                </li>
                                                <li>
                                                    <h4> Head 3d move </h4>
                                                </li>
                                                <li>
                                                    <h4>Template </h4>
                                                </li>
                                                <li>
                                                    <h4>Facial Animation </h4>
                                                </li>
                                                @break

                                                @case(1)
                                                <li>
                                                    <h4>Face Key editor </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">  إجابة خاطئة  Head 3d move </button>
                                                </li>
                                                <li>
                                                    <h4>Template</h4>
                                                </li>
                                                <li>
                                                    <h4>Facial Animation </h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Face Key editor </h4>
                                                </li>
                                                <li>
                                                    <h4>Head 3d move </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   Template </button>
                                                </li>
                                                <li>
                                                    <h4> Facial Animation </h4>
                                                </li>
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Face Key editor </h4>
                                                </li>
                                                <li>
                                                    <h4> Head 3d move </h4>
                                                </li>
                                                <li>
                                                    <h4>Template</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة   Facial Animation </button>
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
                                        <h3> يستخدم أمر Face Puppet  لتحريك تعبيرات الوجه
                                             </h3>
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
                                        <h3>يستخدم أمر2D motion key Editor لاضافة عظام للشخصيات   </h3>
                                        <ol dir="rtl">
                                            @switch($q5)
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
                                        <h3>لتعديل أجزاء الشخصيات والعناصر يستخدم أمر </h3>
                                        <ol dir="rtl">
                                            @switch($q1)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة   Add new sprite  </button>
                                                </li>
                                                <li>
                                                    <h4>Editor pose </h4>
                                                </li>
                                                <li>
                                                    <h4>Character </h4>
                                                </li>
                                                <li>
                                                    <h4> Sprite editor</h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Add new sprite </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">إجابة خاطئة   Editor pose </button>
                                                </li>
                                                <li>
                                                    <h4>Character</h4>
                                                </li>
                                                <li>
                                                    <h4> Sprite editor</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>Add new sprite </h4>
                                                </li>
                                                <li>
                                                    <h4>Editor pose </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئة    Character </button>
                                                </li>
                                                <li>
                                                    <h4> Sprite editor</h4>
                                                </li>
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Add new sprite </h4>
                                                </li>
                                                <li>
                                                    <h4>Editor pose </h4>
                                                </li>
                                                <li>
                                                    <h4>Character </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">    إجابة صحيحة   Sprite editor</button>
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
                                        <h3>لإضافة عظام تحريك الشخصيات بإستخدام: </h3>
                                        <ol dir="rtl">
                                            @switch($q2)
                                                @case(2)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة صحيحة  Create Bone </button>
                                                </li>
                                                <li>
                                                    <h4>Composer</h4>
                                                </li>
                                                <li>
                                                    <h4>Animation </h4>
                                                </li>
                                                <li>
                                                    <h4> Edit Pose</h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Create Bone </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">  إجابة خاطئةComposer</button>
                                                </li>
                                                <li>
                                                    <h4>Animation </h4>
                                                </li>
                                                <li>
                                                    <h4> Edit Pose</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>Create Bone </h4>
                                                </li>
                                                <li>
                                                    <h4>Composer</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   إجابة خاطئة   Animation</button>
                                                </li>
                                                <li>
                                                    <h4> Edit Pose</h4>
                                                </li>
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Create Bone </h4>
                                                </li>
                                                <li>
                                                    <h4>Composer</h4>
                                                </li>
                                                <li>
                                                    <h4>Animation </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   إجابة خاطئة   Edit Pose</button>
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
                                        <h3> 	يتم التعامل مع ملامح الوجه بإستخدام أمر:  </h3>
                                        <ol dir="rtl">
                                            @switch($q3)
                                                @case(3)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة صحيحة  Face Key editor </button>
                                                </li>
                                                <li>
                                                    <h4> Head 3d move </h4>
                                                </li>
                                                <li>
                                                    <h4>Template </h4>
                                                </li>
                                                <li>
                                                    <h4>Facial Animation </h4>
                                                </li>
                                                @break

                                                @case(1)
                                                <li>
                                                    <h4>Face Key editor </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">  إجابة خاطئة  Head 3d move </button>
                                                </li>
                                                <li>
                                                    <h4>Template</h4>
                                                </li>
                                                <li>
                                                    <h4>Facial Animation </h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Face Key editor </h4>
                                                </li>
                                                <li>
                                                    <h4>Head 3d move </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   Template </button>
                                                </li>
                                                <li>
                                                    <h4> Facial Animation </h4>
                                                </li>
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Face Key editor </h4>
                                                </li>
                                                <li>
                                                    <h4> Head 3d move </h4>
                                                </li>
                                                <li>
                                                    <h4>Template</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة   Facial Animation </button>
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
                                        <h3> يستخدم أمر Face Puppet  لتحريك تعبيرات الوجه
                                             </h3>
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
                                        <h3>يستخدم أمر2D motion key Editor لاضافة عظام للشخصيات   </h3>
                                        <ol dir="rtl">
                                            @switch($q5)
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
