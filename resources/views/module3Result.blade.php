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
        
        
       if($q1 == '2'){
           $score++;
       }
       if($q2 == '3'){
           $score++;
       }
       if($q3 == '4'){
           $score++;
       }
       if($q4 == '2'){
           $score++;
       }
       if($q5 == '1'){
           $score++;
       }


        $percentage = ($score / 5) * 100;

    //     if ($percentage < 85) { 
        
    //     // header('Location:/module1');
    //     // exit();
    // } 
    
    if ($percentage >= 85) {
       
        $Sql = "UPDATE `users` SET  `score3` = $score, `percentage3` = $percentage, `module4` = '1' WHERE `users`.`id` = $id ";
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
                                        <h3>لادراج صورة داخل برنامج Cartoon animator 4  يتم الضغط على أمر</h3>
                                        <ol dir="rtl">
                                            @switch($q1)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئة  New Project </button>
                                                </li>
                                                <li>
                                                    <h4>Create media</h4>
                                                </li>
                                                <li>
                                                    <h4>Composer</h4>
                                                </li>
                                                <li>
                                                    <h4> Scene</h4>
                                                </li> 
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>New Project </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">  إجابة صحيحة  Create media</button>
                                                </li>
                                                <li>
                                                    <h4>Composer</h4>
                                                </li>
                                                <li>
                                                    <h4> Scene</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>New Project </h4>
                                                </li>
                                                <li>
                                                    <h4>Create media</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة Composer</button>
                                                </li>
                                                <li>
                                                    <h4> Scene</h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>New Project </h4>
                                                </li>
                                                <li>
                                                    <h4>Create media</h4>
                                                </li>
                                                <li>
                                                    <h4>Composer </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">    إجابة خاطئة  Scene</button>
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
                                        <h3>لإدراج مشهد كامل يتم أختيار امر  </h3>
                                        <ol dir="rtl">
                                            @switch($q2)
                                                @case(2)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئةProp</button>
                                                </li>
                                                <li>
                                                    <h4>Create media</h4>
                                                </li>
                                                <li>
                                                    <h4>Scene</h4>
                                                </li>
                                                <li>
                                                    <h4> Import PSD</h4>
                                                </li> 
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Prop </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">  إجابة خاطئة  Create media </button>
                                                </li>
                                                <li>
                                                    <h4>Scene</h4>
                                                </li>
                                                <li>
                                                    <h4> Import PSD</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>Prop </h4>
                                                </li>
                                                <li>
                                                    <h4>Create media</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة صحيحة   Scene</button>
                                                </li>
                                                <li>
                                                    <h4>Prop  </h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Prop </h4>
                                                </li>
                                                <li>
                                                    <h4>Create media</h4>
                                                </li>
                                                <li>
                                                    <h4>Scene</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   إجابة خاطئة Import PSD</button>
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
                                        <h3> يتم اضافة الشخصيات داخل برنامج Cartoon Animator 4  من خلال امر  </h3>
                                        <ol dir="rtl">
                                            @switch($q3)
                                                @case(3)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئة	animation</button>
                                                </li>
                                                <li>
                                                    <h4> Scene</h4>
                                                </li>
                                                <li>
                                                    <h4>Prop</h4>
                                                </li>
                                                <li>
                                                    <h4>Actor</h4>
                                                </li> 
                                                @break

                                                @case(1)
                                                <li>
                                                    <h4>animation</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;"> إجابة خاطئة  Scene </button>
                                                </li>
                                                <li>
                                                    <h4>Prop</h4>
                                                </li>
                                                <li>
                                                    <h4>Actor</h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>animation</h4>
                                                </li>
                                                <li>
                                                    <h4>Scene</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة	Prop</button>
                                                </li>
                                                <li>
                                                    <h4> Actor</h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>animation</h4>
                                                </li>
                                                <li>
                                                    <h4>Scene</h4>
                                                </li>
                                                <li>
                                                    <h4>Prop</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">    إجابة صحيحة  Actor </button>
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
                                        <h3> يستخدم أمر transform  لتحرير العناصر 
                                             </h3>
                                            <ol dir="rtl">
                                                @switch($q4)
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
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>يمكن التعديل على شخصيات برنامج Cartoon Animator   </h3>
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
                                        <h3>يستخدم الفيديو الرقمى التفاعلى فى </h3>
                                        <ol dir="rtl">
                                            @switch($q1)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئة  New Project </button>
                                                </li>
                                                <li>
                                                    <h4>Create media</h4>
                                                </li>
                                                <li>
                                                    <h4>Composer</h4>
                                                </li>
                                                <li>
                                                    <h4> Scene</h4>
                                                </li> 
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>New Project </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">  إجابة صحيحة  Create media</button>
                                                </li>
                                                <li>
                                                    <h4>Composer</h4>
                                                </li>
                                                <li>
                                                    <h4> Scene</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>New Project </h4>
                                                </li>
                                                <li>
                                                    <h4>Create media</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة Composer</button>
                                                </li>
                                                <li>
                                                    <h4> Scene</h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>New Project </h4>
                                                </li>
                                                <li>
                                                    <h4>Create media</h4>
                                                </li>
                                                <li>
                                                    <h4>Composer </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">    إجابة خاطئة  Scene</button>
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
                                        <h3>لإدراج مشهد كامل يتم أختيار امر  </h3>
                                        <ol dir="rtl">
                                            @switch($q2)
                                                @case(2)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئةProp</button>
                                                </li>
                                                <li>
                                                    <h4>Create media</h4>
                                                </li>
                                                <li>
                                                    <h4>Scene</h4>
                                                </li>
                                                <li>
                                                    <h4> Import PSD</h4>
                                                </li> 
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Prop </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">  إجابة خاطئة  Create media </button>
                                                </li>
                                                <li>
                                                    <h4>Scene</h4>
                                                </li>
                                                <li>
                                                    <h4> Import PSD</h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>Prop </h4>
                                                </li>
                                                <li>
                                                    <h4>Create media</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة صحيحة   Scene</button>
                                                </li>
                                                <li>
                                                    <h4>Prop  </h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Prop </h4>
                                                </li>
                                                <li>
                                                    <h4>Create media</h4>
                                                </li>
                                                <li>
                                                    <h4>Scene</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">   إجابة خاطئة Import PSD</button>
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
                                        <h3> يتم اضافة الشخصيات داخل برنامج Cartoon Animator 4  من خلال امر  </h3>
                                        <ol dir="rtl">
                                            @switch($q3)
                                                @case(3)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئة	animation</button>
                                                </li>
                                                <li>
                                                    <h4> Scene</h4>
                                                </li>
                                                <li>
                                                    <h4>Prop</h4>
                                                </li>
                                                <li>
                                                    <h4>Actor</h4>
                                                </li> 
                                                @break

                                                @case(1)
                                                <li>
                                                    <h4>animation</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;"> إجابة خاطئة  Scene </button>
                                                </li>
                                                <li>
                                                    <h4>Prop</h4>
                                                </li>
                                                <li>
                                                    <h4>Actor</h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>animation</h4>
                                                </li>
                                                <li>
                                                    <h4>Scene</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة	Prop</button>
                                                </li>
                                                <li>
                                                    <h4> Actor</h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>animation</h4>
                                                </li>
                                                <li>
                                                    <h4>Scene</h4>
                                                </li>
                                                <li>
                                                    <h4>Prop</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">    إجابة صحيحة  Actor </button>
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
                                        <h3> يستخدم أمر transform  لتحرير العناصر 
                                             </h3>
                                            <ol dir="rtl">
                                                @switch($q4)
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
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>يمكن التعديل على شخصيات برنامج Cartoon Animator   </h3>
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
