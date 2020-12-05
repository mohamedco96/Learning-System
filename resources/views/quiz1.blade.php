@extends('layouts.quiz')
@section('content')

    <div class="container" style="margin-top: 60px">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">

                <div class="card" style="margin-top: 60px">
                    <div class="card-header">
                        <strong>{{ Auth::user()->id }}</strong>Form
                    </div>
                    <div class="card-block">
                        <form action="score.php" method="post">

                            <div class="body_next">
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>Ques1 : Which version of PHP introduced the instanceof keyword?</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q1" value="1" />PHP 4
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="2" />PHP 5
                                            </li>
                                            <li>
                                                <input type="radio" name="q1" value="3" />PHP 6
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>Ques2 : Which version of PHP introduced the instanceof keyword?</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q2" value="1" />PHP 4
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="2" />PHP 5
                                            </li>
                                            <li>
                                                <input type="radio" name="q2" value="3" />PHP 6
                                            </li>
                                        </ol>
                                    </div>
                                </section>
                                <section class="section_next">
                                    <div class="form-group">
                                        <h3>Ques3 : Which version of PHP introduced the instanceof keyword?</h3>
                                        <ol dir="rtl">
                                            <li>
                                                <input type="radio" name="q3" value="1" />PHP 4
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="2" />PHP 5
                                            </li>
                                            <li>
                                                <input type="radio" name="q3" value="3" />PHP 6
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
