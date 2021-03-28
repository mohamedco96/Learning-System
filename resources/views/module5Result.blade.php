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
       if($q2 == '1'){
           $score++;
       }
       if($q3 == '2'){
           $score++;
       }
       if($q4 == '2'){
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
    
    if ($percentage >= 85) {
       
        $Sql = "UPDATE `users` SET  `score3` = $score, `percentage3` = $percentage, `module2` = '1' WHERE `users`.`id` = $id ";
        $scoreResult1 = $conn->query($Sql);
        // header('Location:/module2');
        // exit();
        }

    
        $conn->close();
        ?>

    </div>
    @if ($percentage < 850)
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
                                        <h3>لمعاينة حركة المشهد الحالى  داخل مساحة العمل </h3>
                                        <ol dir="rtl">
                                            @switch($q1)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة  Preview</button>
                                                </li>
                                                <li>
                                                    <h4>Current frame Preview </h4>
                                                </li>
                                                <li>
                                                    <h4>Render </h4>
                                                </li>
                                                <li>
                                                    <h4> Apply Current Render </h4>
                                                </li> 
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Preview</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">إجابة صحيحة  Current frame Preview </button>
                                                </li>
                                                <li>
                                                    <h4> Render </h4>
                                                </li>
                                                <li>
                                                    <h4> Apply Current Render </h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4> Preview</h4>
                                                </li>
                                                <li>
                                                    <h4> Current frame Preview</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">إجابة خاطئة   Render</button>
                                                </li>
                                                <li>
                                                    <h4> Apply Current Render </h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4> Preview</h4>
                                                </li>
                                                <li>
                                                    <h4> Current frame Preview</h4>
                                                </li>
                                                <li>
                                                    <h4>Render </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">إجابة خاطئة   Apply Current Render </button>
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
                                        <h3> لإدراج ملف صوت داخل البرنامج Cartoon Animator 4  يتم الضغط على أمر</h3>
                                        <ol dir="rtl">
                                            @switch($q2)
                                                @case(2)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">إجابة صحيحة  Wave File </button>
                                                </li>
                                                <li>
                                                    <h4> Create Script </h4>
                                                </li>
                                                <li>
                                                    <h4> Composer </h4>
                                                </li>
                                                <li>
                                                    <h4>Additional Voice   </h4>
                                                </li> 
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4> Wave File </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">   إجابة خاطئة  Create Script </button>
                                                </li>
                                                <li>
                                                    <h4> Composer </h4>
                                                </li>
                                                <li>
                                                    <h4>Additional Voice  </h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>Wave File  </h4>
                                                </li>
                                                <li>
                                                    <h4> Create Script </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">     إجابة خاطئة  Composer </button>
                                                </li>
                                                <li>
                                                    <h4> Additional Voice </h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Wave File </h4>
                                                </li>
                                                <li>
                                                    <h4> Create Script </h4>
                                                </li>
                                                <li>
                                                    <h4> Composer</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">       إجابة خاطئة  Additional Voice </button>
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
                                        <h3>لتصدير الفيديو بصيغة فيديو يتم الضغط على امر  </h3>
                                        <ol dir="rtl">
                                            @switch($q3)
                                                @case(3)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئة   Save as</button>
                                                </li>
                                                <li>
                                                    <h4> Render Video </h4>
                                                </li>
                                                <li>
                                                    <h4>Export </h4>
                                                </li>
                                                <li>
                                                    <h4>Save project as</h4>
                                                </li> 
                                                @break

                                                @case(1)
                                                <li>
                                                    <h4>Save as</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">  إجابة صحيحة  Render Video </button>
                                                </li>
                                                <li>
                                                    <h4>Export </h4>
                                                </li>
                                                <li>
                                                    <h4>Save project as</h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Save as</h4>
                                                </li>
                                                <li>
                                                    <h4>Render Video </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة  Export</button>
                                                </li>
                                                <li>
                                                    <h4> Save project as</h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Save as</h4>
                                                </li>
                                                <li>
                                                    <h4> Render Video </h4>
                                                </li>
                                                <li>
                                                    <h4>Export </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة  Save project as</button>
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
                                        <h3> يستخدم أمر  Project setting  لتعديل حجم الفيديو  
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
                                        <h3>يتم إضافة صوت من خلال أمر Create Script  </h3>
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
                                        <h3>لمعاينة حركة المشهد الحالى  داخل مساحة العمل </h3>
                                        <ol dir="rtl">
                                            @switch($q1)
                                                @case(1)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة  Preview</button>
                                                </li>
                                                <li>
                                                    <h4>Current frame Preview </h4>
                                                </li>
                                                <li>
                                                    <h4>Render </h4>
                                                </li>
                                                <li>
                                                    <h4> Apply Current Render </h4>
                                                </li> 
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Preview</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">إجابة صحيحة  Current frame Preview </button>
                                                </li>
                                                <li>
                                                    <h4> Render </h4>
                                                </li>
                                                <li>
                                                    <h4> Apply Current Render </h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4> Preview</h4>
                                                </li>
                                                <li>
                                                    <h4> Current frame Preview</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">إجابة خاطئة   Render</button>
                                                </li>
                                                <li>
                                                    <h4> Apply Current Render </h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4> Preview</h4>
                                                </li>
                                                <li>
                                                    <h4> Current frame Preview</h4>
                                                </li>
                                                <li>
                                                    <h4>Render </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">إجابة خاطئة   Apply Current Render </button>
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
                                        <h3> لإدراج ملف صوت داخل البرنامج Cartoon Animator 4  يتم الضغط على أمر</h3>
                                        <ol dir="rtl">
                                            @switch($q2)
                                                @case(2)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;">إجابة صحيحة  Wave File </button>
                                                </li>
                                                <li>
                                                    <h4> Create Script </h4>
                                                </li>
                                                <li>
                                                    <h4> Composer </h4>
                                                </li>
                                                <li>
                                                    <h4>Additional Voice   </h4>
                                                </li> 
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4> Wave File </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">   إجابة خاطئة  Create Script </button>
                                                </li>
                                                <li>
                                                    <h4> Composer </h4>
                                                </li>
                                                <li>
                                                    <h4>Additional Voice  </h4>
                                                </li>
                                                @break

                                                @case(3)
                                                <li>
                                                    <h4>Wave File  </h4>
                                                </li>
                                                <li>
                                                    <h4> Create Script </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">     إجابة خاطئة  Composer </button>
                                                </li>
                                                <li>
                                                    <h4> Additional Voice </h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Wave File </h4>
                                                </li>
                                                <li>
                                                    <h4> Create Script </h4>
                                                </li>
                                                <li>
                                                    <h4> Composer</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">       إجابة خاطئة  Additional Voice </button>
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
                                        <h3>لتصدير الفيديو بصيغة فيديو يتم الضغط على امر  </h3>
                                        <ol dir="rtl">
                                            @switch($q3)
                                                @case(3)
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-success " type="button"
                                                    style="border-radius: 22px; width:400px;"> إجابة خاطئة   Save as</button>
                                                </li>
                                                <li>
                                                    <h4> Render Video </h4>
                                                </li>
                                                <li>
                                                    <h4>Export </h4>
                                                </li>
                                                <li>
                                                    <h4>Save project as</h4>
                                                </li> 
                                                @break

                                                @case(1)
                                                <li>
                                                    <h4>Save as</h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                        style="border-radius: 22px; width:400px;">  إجابة صحيحة  Render Video </button>
                                                </li>
                                                <li>
                                                    <h4>Export </h4>
                                                </li>
                                                <li>
                                                    <h4>Save project as</h4>
                                                </li>
                                                @break

                                                @case(2)
                                                <li>
                                                    <h4>Save as</h4>
                                                </li>
                                                <li>
                                                    <h4>Render Video </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة  Export</button>
                                                </li>
                                                <li>
                                                    <h4> Save project as</h4>
                                                </li> 
                                                @break

                                                @case(4)
                                                <li>
                                                    <h4>Save as</h4>
                                                </li>
                                                <li>
                                                    <h4> Render Video </h4>
                                                </li>
                                                <li>
                                                    <h4>Export </h4>
                                                </li>
                                                <li>
                                                    <button class="btn btn-lg btn-pill btn-block btn-danger " type="button"
                                                    style="border-radius: 22px; width:400px;">  إجابة خاطئة  Save project as</button>
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
                                        <h3> يستخدم أمر  Project setting  لتعديل حجم الفيديو  
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
                                        <h3>يتم إضافة صوت من خلال أمر Create Script  </h3>
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
