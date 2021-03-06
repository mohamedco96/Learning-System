@guest
    <?php
    header('Location:/home');
    exit();
    ?>
@endguest

@php
$users = DB::table('users')->where('id', Auth::user()->id)->get();

foreach ($users as $user) {
// echo $user->email;
}
@endphp

@if ($user->alm8yas1Score === null)
    <?php
    header('Location:/intro1');
    exit();
    ?>
@endif

@if ($user->al8bly2Score != null)
    <?php
    header('Location:/module');
    exit();
    ?>
@endif




@extends('layouts.quiz')
@section('content')

    <div class="container" style="margin-top: 60px">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">

                <div class="card" style="margin-top: 60px">
                    <div class="card-header">
                       الاختبار البعدي لمهارات إنتاج الفيديو الرقمى التفاعلى
                    </div>
                    <div class="card-block">
                        <form action="ale5tbarِAl8bly2Score" method="get">

                            <div class="body_next">
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>1- يتسم الفيديو التفاعلى بعدة مميزات منها: </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q1" value="1" required /> الإنغماس الكامل</li>
                                            <li>
                                                <input type="radio" name="q1" value="2" required /> توفير الوقت والمكان  </li>
                                            <li>
                                                <input type="radio" name="q1" value="3" required /> بيئة تعليمية متكاملة</li>
                                            <li>
                                                <input type="radio" name="q1" value="4" required /> إمكانية الإبحار</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>2- من أهم تطبيقات إنتاج الفيديو الرقمى التفاعلى : </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q2" value="1" required /> Adobe InDesign</li>
                                            <li>
                                                <input type="radio" name="q2" value="2" required /> Adobe Photoshop</li>
                                            <li>
                                                <input type="radio" name="q2" value="3" required /> Cartoon Animator</li>
                                            <li>
                                                <input type="radio" name="q2" value="4" required /> PowerPoint</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>3- لإضافة مشروع جديد يتم الضغط على قائمة:</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q3" value="1" required /> New</li>
                                            <li>
                                                <input type="radio" name="q3" value="2" required /> File</li>
                                            <li>
                                                <input type="radio" name="q3" value="3" required /> Project</li>
                                            <li>
                                                <input type="radio" name="q3" value="4" required /> Edit</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>4- لإدراج صورة داخل برنامج  Cartoon Animator 4  يتم الضغط على أمر : </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q4" value="1" required /> New Project</li>
                                            <li>
                                                <input type="radio" name="q4" value="2" required /> Content Manager</li>
                                            <li>
                                                <input type="radio" name="q4" value="3" required /> Composer</li>
                                            <li>
                                                <input type="radio" name="q4" value="4" required /> Create media</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>5- يمكن إدراج ملف فوتوشوب لبرنامج Cartoon Animator 4  من خلال أمر: </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q5" value="1" required /> Create Media</li>
                                            <li>
                                                <input type="radio" name="q5" value="2" required /> Sprite editor</li>
                                            <li>
                                                <input type="radio" name="q5" value="3" required /> Composer</li>
                                            <li>
                                                <input type="radio" name="q5" value="4" required /> Import PSD</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>6- لتعديل أبعاد العنصر يستخدم أمر : </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q6" value="1" required /> Transform</li>
                                            <li>
                                                <input type="radio" name="q6" value="2" required /> Move</li>
                                            <li>
                                                <input type="radio" name="q6" value="3" required /> Duplicate</li>
                                            <li>
                                                <input type="radio" name="q6" value="4" required /> bend</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>7- لإضافة شخصيات داخل البرنامج يتم الضغط على أمر :</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q7" value="1" required /> Actor</li>
                                            <li>
                                                <input type="radio" name="q7" value="2" required /> Animation</li>
                                            <li>
                                                <input type="radio" name="q7" value="3" required /> Prop</li>
                                            <li>
                                                <input type="radio" name="q7" value="4" required /> Content manager</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>8- يستخدم أمر Composer  فى</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q8" value="1" required /> تحرير العناصر</li>
                                            <li>
                                                <input type="radio" name="q8" value="2" required /> نقل العناصر داخل المشهد</li>
                                            <li>
                                                <input type="radio" name="q8" value="3" required /> دوران العناصر</li>
                                            <li>
                                                <input type="radio" name="q8" value="4" required /> تحديد العناصر</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>9- لتعديل أجزاء الشخصيات والعناصر يستخدم أمر: </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q9" value="1" required /> Add new sprite</li>
                                            <li>
                                                <input type="radio" name="q9" value="2" required /> Editor pose</li>
                                            <li>
                                                <input type="radio" name="q9" value="3" required /> Character</li>
                                            <li>
                                                <input type="radio" name="q9" value="4" required /> Sprite editor</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>10- لإضافة عظام تحريك الشخصيات بإستخدام: </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q10" value="1" required /> Create Bone</li>
                                            <li>
                                                <input type="radio" name="q10" value="2" required /> Composer</li>
                                            <li>
                                                <input type="radio" name="q10" value="3" required /> Animation</li>
                                            <li>
                                                <input type="radio" name="q10" value="4" required /> Edit Pose</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>11- يتم التعامل مع ملامح الوجه بإستخدام أمر:</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q11" value="1" required /> Face Key editor</li>
                                            <li>
                                                <input type="radio" name="q11" value="2" required /> Head 3d move</li>
                                            <li>
                                                <input type="radio" name="q11" value="3" required /> Template</li>
                                            <li>
                                                <input type="radio" name="q11" value="4" required /> Facial Animation</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>12- لمعاينة حركة المشهد الحالى  داخل مساحة العمل : </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q12" value="1" required /> Preview </li>
                                            <li>
                                                <input type="radio" name="q12" value="2" required /> Current frame Preview</li>
                                            <li>
                                                <input type="radio" name="q12" value="3" required /> Render</li>
                                            <li>
                                                <input type="radio" name="q12" value="4" required /> Apply Current Render</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>13- لإضافة مشهد جاهز داخل البرنامج يتم الضغط على أمر : </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q13" value="1" required /> Content Manager</li>
                                            <li>
                                                <input type="radio" name="q13" value="2" required /> Prop</li>
                                            <li>
                                                <input type="radio" name="q13" value="3" required /> Scene</li>
                                            <li>
                                                <input type="radio" name="q13" value="4" required /> Actor</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>14- لإدراج ملف صوت داخل البرنامج Cartoon Animator 4  يتم الضغط على أمر </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q14" value="1" required /> Wave File</li>
                                            <li>
                                                <input type="radio" name="q14" value="2" required /> Create Script</li>
                                            <li>
                                                <input type="radio" name="q14" value="3" required /> Composer</li>
                                            <li>
                                                <input type="radio" name="q14" value="4" required /> Additional Voice</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>15- للإضافة حركة انتقالية بين عناصر المشهد تستخدم خاصية:</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q15" value="1" required /> Prop</li>
                                            <li>
                                                <input type="radio" name="q15" value="2" required /> Animation </li>
                                            <li>
                                                <input type="radio" name="q15" value="3" required /> Scene </li>
                                            <li>
                                                <input type="radio" name="q15" value="4" required /> Elastic Motion</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>16- لتسجيل حركة العناصر داخل المشهد يستخدم أمر: </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q16" value="1" required /> Key frame</li>
                                            <li>
                                                <input type="radio" name="q16" value="2" required /> Curves</li>
                                            <li>
                                                <input type="radio" name="q16" value="3" required /> Add key</li>
                                            <li>
                                                <input type="radio" name="q16" value="4" required /> Tracks</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>17- للاضافة كاميرا داخل المشهد يتم إختيار أمر </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q17" value="1" required /> Camera Pan</li>
                                            <li>
                                                <input type="radio" name="q17" value="2" required /> Camera Rotate</li>
                                            <li>
                                                <input type="radio" name="q17" value="3" required /> Camera Record Mode </li>
                                            <li>
                                                <input type="radio" name="q17" value="4" required /> Camera Track</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>18- لإضافة حركة الشخصيات يتم إختيار أمر</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q18" value="1" required /> Animation </li>
                                            <li>
                                                <input type="radio" name="q18" value="2" required /> Action Menu</li>
                                            <li>
                                                <input type="radio" name="q18" value="3" required /> Composer</li>
                                            <li>
                                                <input type="radio" name="q18" value="4" required /> Prop</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>19- لتصدير الفيديو بصيغة MP4  يتم الضغط على امر </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q19" value="1" required /> Save as</li>
                                            <li>
                                                <input type="radio" name="q19" value="2" required /> Render Video</li>
                                            <li>
                                                <input type="radio" name="q19" value="3" required /> Export</li>
                                            <li>
                                                <input type="radio" name="q19" value="4" required /> Save project as </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>20- لوضع علامات وقوف داخل الفيديو يستخدم أمر: </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q20" value="1" required /> Marker</li>
                                            <li>
                                                <input type="radio" name="q20" value="2" required /> Quiz</li>
                                            <li>
                                                <input type="radio" name="q20" value="3" required /> Hotspot</li>
                                            <li>
                                                <input type="radio" name="q20" value="4" required /> Interactivity</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>21- لإضافة زر انتقال داخل محتوى الفيديو يتم إختيار أمر</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q21" value="1" required /> Interactive hotspot</li>
                                            <li>
                                                <input type="radio" name="q21" value="2" required /> Interactivity</li>
                                            <li>
                                                <input type="radio" name="q21" value="3" required /> Quiz </li>
                                            <li>
                                                <input type="radio" name="q21" value="4" required /> Marker </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>22- لإضافة اسئلة إختيار من متعدد يتم الضغط على أمر </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q22" value="1" required /> hotspot </li>
                                            <li>
                                                <input type="radio" name="q22" value="2" required /> Interactivity </li>
                                            <li>
                                                <input type="radio" name="q22" value="3" required /> Quiz </li>
                                            <li>
                                                <input type="radio" name="q22" value="4" required /> Marker </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>23- يتسم الفيديو الرقمى التفاعلى بعدة معايير منها</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q23" value="1" required /> تعدد الألوان</li>
                                            <li>
                                                <input type="radio" name="q23" value="2" required /> التركيز على الجانب المرئى</li>
                                            <li>
                                                <input type="radio" name="q23" value="3" required /> تسلسل المادة المعروضة </li>
                                            <li>
                                                <input type="radio" name="q23" value="4" required /> التركيز على الجانب المسموع</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>24- لتحكم فى طبقات العنصر او الشخصية داخل المشهد يستخدم أمر:</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q24" value="1" required /> Content manager</li>
                                            <li>
                                                <input type="radio" name="q24" value="2" required /> Scene Manager</li>
                                            <li>
                                                <input type="radio" name="q24" value="3" required /> Layer Manger</li>
                                            <li>
                                                <input type="radio" name="q24" value="4" required /> Composer</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">أجب عن الأسئلة التالية بالنقر بمؤشر الفأرة على الإجابة الصحيحة من بين الإختيارات التالية: </strong>
                                        <hr>
                                        <h3>25- يعد من أهم مراحل إنتاج الفيديو الرقمى التفاعلى مرحلة </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q25" value="1" required /> ماقبل الانتاج وإنطلاق الفكرة </li>
                                            <li>
                                                <input type="radio" name="q25" value="2" required /> التخطيط وإعداد السيناريو </li>
                                            <li>
                                                <input type="radio" name="q25" value="3" required /> التنفيذ الفعلى للفيديو</li>
                                            <li>
                                                <input type="radio" name="q25" value="4" required /> مابعد الإنتاج </li>
                                        </ol>
                                    </div>
                                </section>

                                {{-- T &  F --}}

                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>26- إعداد السيناريو هى الخطوة الأولى فى إعداد الفيديو الرقمى التفاعلى</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q26" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q26" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إخترعلامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ  </strong>
                                        <hr>
                                        <h3>27- يمكن الوصول إلى امر تكرار  Duplicateمن شريط الادوات </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q27" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q27" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>28- تستخدم إداة Edit Pose  فى تعديل عظام الشخصيات وتحريكها</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q28" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q28" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>29- للتعديل على اجزاء الشخصيات يتم الضغط على امر sprit editor</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q29" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q29" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>30- 	يستخدم برنامج Cartoon Animator للتعديل على الشخصيات وتحريكها  </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q30" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q30" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>31- يعد برنامج Photoshop  من البرامج الشهيرة فى إنتاج الفيديو الرقمى التفاعلى</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q31" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q31" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>32- يستخدم برنامج Cartoon Animator فى إنتاج لقطات فيديو واقعية</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q32" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q32" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>33- تستخدم أداة  Render   فى برنامج cartoon Animater4 لتصدير الفيديو بصيغة Mp4</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q33" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q33" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>34- لتحرير والتعديل على العناصر والشخصيات من خلال أمر Composer</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q34" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q34" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>35- تستخدم أداة Transition Curve  لتنعيم الحركة</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q35" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q35" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>36- يعتمد برنامج Cartoon Animator  على الأصوات الخارجية فقط</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q36" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q36" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>37- يستخدم أمر  Facial Animator  لتغير تعبيرات ملامح الوجه للشخصيات</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q37" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q37" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>38- يستخدم أمر Morph  لعمل دوران لرأس الشخصية</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q38" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q38" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>39- تستخدم الكاميرا للتقريب والتباعد داخل المشهد </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q39" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q39" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>40- 	يتيح برنامج Cartoon Animator  إمكانية التحكم بخصائص الكاميرا</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q40" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q40" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>41- لإضافة حركات للعناصر والشخصيات يتم التعامل مع شريط Animation</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q41" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q41" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>42- يسمح الفيديو الرقمى التفاعلى للمستخدم بحرية التحكم والانتقال </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q42" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q42" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>43- لإضافة أسئلة قصيرة داخل الفيديو يتم الضعط على أمر Interactivity</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q43" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q43" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>44- من خصائص الفيديو الرقمى التفاعلى تقييم حرية المتعلم </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q44" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q44" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>45- يصدر الفيديو الرقمى التفاعلى بصيغة MP4 للعرض على المنصات التعليمية</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q45" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q45" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>46- يعد الفيديو الرقمى التفاعلى وسيلة عرض مناسبة للبيئات التعلم الإلكترونية</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q46" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q46" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>47- يستخدم الشريط الزمنى لمعرفة مدة عرض الفيديو</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q47" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q47" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>48- يستخدم أمر Create Media  لإدراج الصور والرسومات</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q48" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q48" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>49- من معايير إنتاج الفيديو الرقمى التفاعلى وضوح الفكرة وتناسب المحتوى مع الفئة العمرية</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q49" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q49" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <strong style="color: crimson">إختر علامة (صح) أمام الإجابة الصحيحة  و علامة (خطأ) امام الإجابة الخطأ </strong>
                                        <hr>
                                        <h3>50- يستخدم أمر Link  لرتبط حركة العناصر ببعضها البعض</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q50" value="1" required /> صح</li>
                                            <li>
                                                <input type="radio" name="q50" value="2" required /> خطأ</li>
                                        </ol>
                                    </div>
                                </section>

                            </div>
                            <input type="hidden" name="id" value={{ Auth::user()->id }} />
                            <p style="text-align: center; margin-right: 20px">
                            <input type="submit" value="تسليم الإجابات" name="Submit" class="btn btn-sm btn-primary"
                                style="margin-top: 20px" />
                            </p>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
