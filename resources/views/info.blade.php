
@guest
    <?php
    header('Location:/home');
    exit();
    ?>
@endguest

@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: ">
        <p class="" style="text-align: center; margin-top: 50px">تعليمات بيئة التعلم الافتراضية </p>
        <p class="" style="text-align: center; margin-top: 5px">عليك عزيزى الطالب إجراء مقياس مستوى الدافعية اولا، ويتمثل فى مجموعة عبارات نحتاج معرفة رايك فيها  </p>
        <p class="" style="text-align: center; margin-top: 5px">عليك اجراء الاختبار القبلى قبل بدء الدراسة  </p>
        <p class="" style="text-align: center; margin-top: 5px">بدء دراسة الموديولات كما هى موضحة   </p>
        <p class="" style="text-align: center; margin-top: 5px">	الاستعانة بوسائل المساعدة والدعم المتاح لديك فى بيئة التعلم   </p>
        <p class="" style="text-align: center; margin-top: 5px">فى حالة وجود استفسار يمكنك التواصل مع الباحثة مباشرة من خلال ادوات التواصل المتاحة  </p>

        <p style="text-align: center"><video width="800" height="600" controls>
            <source src="./video/تعليمات البيئة .mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video></p>
        <p style="text-align: center">
            <a href="./intro1" class="btn btn-primary" style="margin-bottom: 30px"> مقياس مستوى الدافعية</a><br>
            <a href="./intro2" class="btn btn-primary">الإختبار القبلي</a>
        </p>

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
