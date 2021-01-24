@php
$users = DB::table('users')->where('id', Auth::user()->id)->get();

foreach ($users as $user) {
// echo $user->email;
}
@endphp

@if ($user->finish_module === '0')
    <?php
    header('Location:/module');
    exit();
    ?>
@endif


@extends('layouts.main')
@section('content')

    <div class="container" style="margin-top: 60px">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">

                <div class="card" style="margin-top: 60px">
                    <div class="card-header">
                        <strong> المقياس </strong>
                    </div>
                    <div class="card-block">
                        <form action="alm8yas2Score" method="get">

                            <div class="body_next">
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>لدي رغبة ذاتية في التعلم.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q1" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>أتفحص إجابة كل سؤال قبل الانتقال إلى السؤال التالي.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q2" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أحرص على الحصول على أعلى الدرجات.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q3" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أختار الموضوعات التي أستطيع أن أكون مبدعاً فيها.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q4" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q4" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q4" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q4" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q4" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>أسجل في المقررات التي استفيد منها في حياتي العملية. </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q5" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q5" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q5" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q5" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q5" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>أحب المهمات التي تثير التحدي . </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q6" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q6" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q6" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q6" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q6" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أحاول أن أشارك في إضافة فيديوهات تفاعلية بشكل مستمر .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q7" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q7" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q7" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q7" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q7" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أشعر بالسعادة غالباً عندما أقوم بإنتاج الفيديو التفاعلى .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q8" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q8" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q8" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q8" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q8" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أضع لنفسي أهدافاً عالية المستوى .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q9" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q9" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q9" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q9" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q9" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>أطالع فيديوهات تفاعلية في أوقات فراغي تلبية لرغباتي . </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q10" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q10" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q10" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q10" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q10" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أرفض تبرير فشلي إذا كان الامتحان صعباً .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q11" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q11" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q11" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q11" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q11" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أتعلم وأنجح لأنني أحب مواد تخصصي .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q12" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q12" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q12" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q12" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q12" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أهتم بقراءة السؤال أكثر من مرة قبل الإجابة .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q13" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q13" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q13" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q13" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q13" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أهتم بالأنشطة المنهجية واللامنهجية.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q14" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q14" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q14" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q14" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q14" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أراجع دروسي أولاً بأول .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q15" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q15" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q15" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q15" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q15" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> لا أدع تكليفاتي وأبحاثي تتراكم .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q16" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q16" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q16" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q16" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q16" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أهتم كثيراً بمواعيد الاختبارات وتسليم التكليفات .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q17" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q17" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q17" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q17" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q17" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أنزعج إذا حصلت على درجة متدنية في الاختبار .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q18" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q18" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q18" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q18" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q18" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أهتم كثيراً بإدارة الوقت أثناء الاختبار .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q19" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q19" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q19" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q19" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q19" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> لا أحب إثارة الفوضى أثناء إنتاج الفيديو التفاعلى</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q20" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q20" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q20" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q20" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q20" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أشارك زملائي في مناقشة الموضوعات الجديدة قبل إنتاج الفيديو التفاعلى.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q21" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q21" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q21" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q21" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q21" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> لا أبدأ بالشرود الذهني عندما أبدأ تعلم موضوع جديد.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q22" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q22" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q22" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q22" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q22" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> اهتم بالتفاصيل الدقيقة في إنتاج الفيديو التفاعلى.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q23" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q23" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q23" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q23" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q23" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> عندما أبدأ في تعلم موضوع جديد أنتبه جيدًا .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q24" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q24" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q24" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q24" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q24" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> عندما أحل سؤالاً صعباً أشعر بالارتياح .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q25" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q25" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q25" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q25" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q25" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> أنتبه كثيراً وأركز في إنتاج الفيديو التفاعلى. إذا كان الموضوع صعباً</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q26" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q26" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q26" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q26" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q26" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> سرعان ما أشعر بالملل عندما أقوم بالأنشطة التي أكلف بها.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q27" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q27" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q27" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q27" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q27" value="5" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3> كثيراً ما أشعر أن مساهمتي في إضافة إنتاج الفيديو التفاعلى. لا يقنعني.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q28" value="1" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q28" value="2" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q28" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q28" value="4" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q28" value="5" required /> غير موافق بشدة
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
                </div>


            </div>
        </div>
    </div>
@endsection
