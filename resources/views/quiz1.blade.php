
@guest
<?php
header('Location:/home');
exit();
?>
@endguest

@extends('layouts.quiz')
@section('content')

    <div class="container" style="margin-top: 60px">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">

                <div class="card" style="margin-top: 60px">
                    <div class="card-header">
                        <strong> اختر الاستجابة المناسب لك الذي يعبر عن رأيك  </strong>
                    </div>
                    <div class="card-block">
                        <form action="score" method="get">

                            <div class="body_next">
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>1- لدي رغبة ذاتية في التعلم.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q1" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>2- أتفحص إجابة كل سؤال قبل الانتقال إلى السؤال التالي.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q2" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>3- أحرص على الحصول على أعلى الدرجات.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q3" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>4- أختار الموضوعات التي أستطيع أن أكون مبدعاً فيها.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q4" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q4" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q4" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q4" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q4" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>5- أسجل في المقررات التي استفيد منها في حياتي العملية. </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q5" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q5" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q5" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q5" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q5" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>6- أحب المهمات التي تثير التحدي . </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q6" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q6" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q6" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q6" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q6" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>7- أحاول أن أشارك في إضافة فيديوهات تفاعلية بشكل مستمر .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q7" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q7" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q7" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q7" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q7" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>8- أشعر بالسعادة غالباً عندما أقوم بإنتاج الفيديو التفاعلى .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q8" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q8" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q8" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q8" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q8" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>9- أضع لنفسي أهدافاً عالية المستوى .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q9" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q9" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q9" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q9" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q9" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>10- أطالع فيديوهات تفاعلية في أوقات فراغي تلبية لرغباتي . </h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q10" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q10" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q10" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q10" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q10" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>11- أرفض تبرير فشلي إذا كان الامتحان صعباً .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q11" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q11" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q11" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q11" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q11" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>12- أتعلم وأنجح لأنني أحب مواد تخصصي .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q12" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q12" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q12" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q12" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q12" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>13- أهتم بقراءة السؤال أكثر من مرة قبل الإجابة .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q13" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q13" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q13" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q13" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q13" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>14- أهتم بالأنشطة المنهجية واللامنهجية.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q14" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q14" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q14" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q14" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q14" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>15- أراجع دروسي أولاً بأول .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q15" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q15" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q15" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q15" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q15" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>16- لا أدع تكليفاتي وأبحاثي تتراكم .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q16" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q16" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q16" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q16" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q16" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>17- أهتم كثيراً بمواعيد الاختبارات وتسليم التكليفات .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q17" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q17" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q17" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q17" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q17" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>18- أنزعج إذا حصلت على درجة متدنية في الاختبار .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q18" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q18" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q18" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q18" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q18" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>19- أهتم كثيراً بإدارة الوقت أثناء الاختبار .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q19" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q19" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q19" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q19" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q19" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>20- لا أحب إثارة الفوضى أثناء إنتاج الفيديو التفاعلى</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q20" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q20" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q20" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q20" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q20" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>21- أشارك زملائي في مناقشة الموضوعات الجديدة قبل إنتاج الفيديو التفاعلى.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q21" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q21" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q21" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q21" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q21" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>22- لا أبدأ بالشرود الذهني عندما أبدأ تعلم موضوع جديد.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q22" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q22" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q22" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q22" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q22" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>23- اهتم بالتفاصيل الدقيقة في إنتاج الفيديو التفاعلى.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q23" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q23" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q23" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q23" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q23" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>24- عندما أبدأ في تعلم موضوع جديد أنتبه جيدًا .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q24" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q24" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q24" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q24" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q24" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>25- عندما أحل سؤالاً صعباً أشعر بالارتياح .</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q25" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q25" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q25" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q25" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q25" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>26- أنتبه كثيراً وأركز في إنتاج الفيديو التفاعلى. إذا كان الموضوع صعباً</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q26" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q26" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q26" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q26" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q26" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>27- سرعان ما أشعر بالملل عندما أقوم بالأنشطة التي أكلف بها.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q27" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q27" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q27" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q27" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q27" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                {{-- Question --}}
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>28- كثيراً ما أشعر أن مساهمتي في إضافة إنتاج الفيديو التفاعلى. لا يقنعني.</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q28" value="5" required /> موافق بشدة
                                            </li>
                                            <li>
                                                <input type="radio" name="q28" value="4" required /> موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q28" value="3" required /> متردد
                                            </li>
                                            <li>
                                                <input type="radio" name="q28" value="2" required /> غير موافق
                                            </li>
                                            <li>
                                                <input type="radio" name="q28" value="1" required /> غير موافق بشدة
                                            </li>
                                        </ol>
                                    </div>
                                </section>

                            </div>
                            <input type="hidden" name="id" value={{ Auth::user()->id }} />
                            <input type="submit" value="تسليم الإجابات " name="Submit" class="btn btn-sm btn-primary"
                                style="margin-top: 20px; margin-right: 200px" />
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>


        {{-- Automatic Support --}}

        <div id="automatic">
            <button type="button" class="btn btn-primary support" data-toggle="modal" data-target="#exampleModal">
                إضغط هنا للدعم
            </button>
        </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">الدعم</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="support" method="get">
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form4Example1" class="form-control" name="name"
                                placeholder="الإسم" required />
                        </div>
    
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form4Example2" class="form-control" name="email"
                                placeholder="البريد الإلكتروني" required />
                        </div>
    
                         <!-- Subject input -->
                         <div class="form-outline mb-4">
                            <input type="text" id="form4Example2" class="form-control" name="Subject"
                                placeholder="العنوان" required />
                        </div>
    
                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="form4Example3" rows="4" name="message"
                                placeholder="رسالتك" required></textarea>
                        </div>
    
                        <!-- Submit button -->
                        <div class="text-center">
                            {{-- <button type="submit" class="btn btn-primary btn-block mb-4">ارسل</button> --}}
                            <input type="submit" value="ارسل" name="submit" class="btn btn-sm btn-primary"/>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
