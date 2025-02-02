@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
        <div class="auto-container">
            <h2>Our Team</h2>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Team</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Team Page Section -->
    <section class="team-page-section">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title">
                <h2>Our Dedicated Team</h2>
                <div class="text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. </div>
            </div>

            <div class="clearfix">

                <!-- Team Block -->
                <x-team/>


            </div>

        </div>
    </section>
    <!-- End Story Section -->

@endsection
