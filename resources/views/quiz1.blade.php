@extends('layouts.quiz')
@section('content')

    <div class="container" style="margin-top: 60px">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">

                <div class="card" style="margin-top: 60px">
                    <div class="card-header">
                        <strong> المقياس </strong>
                    </div>
                    <div class="card-block">
                        <form action="score" method="get">

                            <div class="body_next">
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>ما أصله؟ خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q1" value="1" required/> إختيار
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="2" required/> إختيار
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="3" required/> إختيار
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>ما أصله؟ خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q2" value="1" /> إختيار
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="2" /> إختيار
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="3" /> إختيار
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>ما أصله؟ خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q3" value="1" /> إختيار
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="2" /> إختيار
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="3" /> إختيار
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
