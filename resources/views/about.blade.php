@extends('layout.master')

@section('title', 'About')
@section('content')

<section class="about-us">
  <div class="container">
      <div class="about-head">
            <h2>Our Story</h2>
      </div>

      <div class="inner-section">
            <div class="left-img">
                 <div class="man-img">
                 <img class="main-site-logo__img main-site-logo__img_wide" src="/images/founder_big.png"
                        alt="ForeverMissed">
                 </div>
                 <div class="sign">
Oleg Andelman <span>Founder</span>
</div>
            </div>
            <div class="rigt-text">
                  
            <p class="first">The idea for the <b>online memorial website</b> was first conceived when I decided to re-create the life story of my grandparents. My grandfather served in the military with his brothers during World War II.
             He passed away when I was a child, so I have only vague memories of him.
              My grandmother faced great hardships raising my dad and his two siblings in impoverished post-war Russia.
               I have tender memories of her that I will cherish forever.
            </p>

               <p>While reflecting upon my grandparents' lives, I was surprised how little I actually knew about them.
                 It took some effort to uncover precious old photographs hidden away in family albums that I had not even seen before, and to encourage other family members to share what they knew about my grandparent's lives. 
                 I also realized that today, families like ours could use the Internet to create an <b>online memorial page</b> and easily share memories, photos and other media with one another. I could see that <b>online memorial sites</b>,
                dedicated to the lives of those we love, would go a long way towards bringing separated families together. These pages would also eventually help our children and grandchildren learn about the
                lives of their relatives who have passed while they were still young.
               </p>
                
               <br>
               <p>So, at the end of 2008, I launched ForeverMissed.com, a place where people could
                 create an <b>online memorial</b> to collect and share memories of the people they have lost.
                  From the very beginning, our team focused on making this service <b>very easy to use</b>.
                   We have spared no effort in making sure that people with even modest computer skills can easily create a website to
                    remember their loved ones. Now that more and more families are remembering their loved ones on ForeverMissed.com,
                     we listen closely to their feedback and remain committed to continually improving our service.
                </p>

                <div class="signature">
                   <img src="/images/signature.png" alt="Oleg Andelman, Founder" title="Oleg Andelman, Founder" loading="lazy">
                  </div>
                  <div class="signup">
<a onclick="eventTracking.run('about_us', 'new_memorial_trigger');" href="https://www.forevermissed.com/creatememorial">Create a Memorial Website</a>
<a onclick="eventTracking.run('about_us', 'new_memorial_trigger');" href="https://www.forevermissed.com/creatememorial" class="more fmi-chevron-right"></a>
</div>
            </div>

      </div>
  </div>

</section>


@endsection