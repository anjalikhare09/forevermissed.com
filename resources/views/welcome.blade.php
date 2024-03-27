 @extends('layout.master')

@section('title', 'Home Page')

<style>
    label {
        display: block;
        margin-bottom: 8px;
    }
    .container {
    width: 100%;
    height: 100%;
    max-width: 1100px;
    margin: 0 auto;
}

   .st {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }
    .form{
        width: 100%;
    height: 55%;
    margin-top: 5%;
    background-color: #dee4e4;
    border: 1px solid #c39c65;
    border-radius: 16px;
    box-sizing: border-box;
    color: #1b4046;
    position: relative;
    text-align: center;
    z-index: 2;
    color: #1b4046;
    font-family: open sans, Helvetica, sans-serif;
    }
</style>
@section('content')
        <!-- form.blade.php -->
<div class="full">
    <div class="container">
    <div class="form">
        <form method="POST" action="{{ route('submit-memorial-form') }}">
            @csrf
            <h1 class="form-title">
                Create a Memorial Website </h1>
                <h3 class="title-help-text">
                    Preserve and share memories of your loved one </h3>
                    <h5>I want to share memories of</h5>
                    <div class="formed">
            <div class="website">
                <!-- <label for="first_name">First Name:</label> -->
                <input type="text" id="first_name" name="first_name" class="st" placeholder="First Name">
            </div>
            <div class="website">
                <!-- <label for="last_name">Last Name:</label> -->
                <input type="text" id="last_name" name="last_name" class="st" placeholder="Last Name">
            </div>
            <div class="website"><button type="submit">Submit</button></div>
            
        </div>
        <div class="online-memorial"><button type="submit">
About online memorials </button></div>
        </form></div>
        <div class="recent">
            <h4>RECENT ONLINE MEMORIALS</h4>
        </div>

        <div class="our-community">
              
            <div class="our-image">

            <div class="images">
                <img class="main-site-logo__img main-site-logo__img_wide" src="/images/image1.jpg"
                            alt="ForeverMissed">
                            <a class="memorial-name" href="#" target="_blank">Debra Ann Flowers</a>
            </div>

            <div class="images">
                <img class="main-site-logo__img main-site-logo__img_wide" src="/images/image2.jpg"
                            alt="ForeverMissed">
                            <a class="memorial-name" href="#" target="_blank">Marjean Cipperly Moore Good Smith</a>
            </div>

            <div class="images">
                <img class="main-site-logo__img main-site-logo__img_wide" src="/images/image3.jpg"
                            alt="ForeverMissed">
                            <a class="memorial-name" href="#" target="_blank">General Marie  Kwamu-Nana Abunaw</a>
            </div>
            <div class="images">
                <img class="main-site-logo__img main-site-logo__img_wide" src="/images/image4.jpg"
                            alt="ForeverMissed">
                            <a class="memorial-name" href="#" target="_blank">Deborah Jane Garza</a>
            </div>

            </div>

            <div class="our-text">
            <div class="fm-statistic">
                <div class="community-statistic" style="position: static;">
                <div class="community-statistic-title">
                Our Community </div>
                <div class="stats" style="opacity: 1;">
                <ul class="community-statistic-list">
                <li>
                <strong><span class="memorials-count" data-test="memorial-count">252,252</span></strong> websites </li>
                <li>
                <strong><span class="visitors-count" data-test="visitors-count">213,998,080</span></strong> visitors </li>
                <li>
                <strong><span class="posts-count" data-test="posts-count">5,014,413</span></strong> tributes </li>
                </ul>
                </div>
                </div>
                <div class="browse-all-memorials">
                <a href="#" class="all" onclick="eventTracking.run('home_page', 'user_actions', 'browse_all_memorials');">
                Browse all online memorials <i class="fmi-chevron-right"></i>
                </a>
                </div>
                </div>
            </div>
            
        </div>


        <section class="special-galleries">
<div class="special-gallery-section">
<h2 class="special-galleries-title">
Memorial Galleries </h2>
<div class="items-wrapper">
<a href="https://www.forevermissed.com/findmemorial/" class="item fm" onclick="eventTracking.run('home_page', 'user_actions', 'all_fm_memorials');">
<div class="background-image fm"></div>
<p class="text">
All Memorial<br>
Websites </p>
<p class="learn-more">
<span>
Learn more </span>
<i class="fmi-chevron-right"></i>
</p>
</a>
<a href="https://www.forevermissed.com/coronavirus-victims-memorials/" class="item covid" onclick="eventTracking.run('home_page', 'user_actions', 'covid_page_trigger');">
<div class="background-image covid"></div>
<p class="text">
COVID-19 Coronavirus<br>
Victims Memorials </p>
<p class="learn-more">
<span>
Learn more </span>
<i class="fmi-chevron-right"></i>
</p>
</a>
<a href="https://www.forevermissed.com/veterans-memorials/" class="item veterans" onclick="eventTracking.run('home_page', 'user_actions', 'veterans_page_trigger');">
<div class="background-image veterans"></div>
<p class="text">
Veterans Memorials </p>
<p class="learn-more">
<span>
Learn more </span>
<i class="fmi-chevron-right"></i>
</p>
</a>
<a href="https://www.forevermissed.com/first-responders/" class="item first-responders" onclick="eventTracking.run('home_page', 'user_actions', 'first_responders_page_trigger');">
<div class="background-image first-responders"></div>
<p class="text">
First Responders<br>
Memorials </p>
<p class="learn-more">
<span>
Learn more </span>
<i class="fmi-chevron-right"></i>
</p>
</a>
</div>
</div>
</section>


    </div>
</div>

      
@endsection




