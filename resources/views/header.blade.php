<div id="header" class="with-ua-top-banner">
    <div class="header">
        <div class="inner-flex">
            <div class="header-mobile-menu icon-menu-swipe menu-swipe-toggle">
                <a href="#"><i class="fmi-menu"></i></a>
            </div>
            <div class="left-block">
                <a class="main-site-logo" href="{{ url('/') }}">
                    <img class="main-site-logo__img main-site-logo__img_wide" src="/images/header-logo.png"
                        alt="ForeverMissed">
                </a>
            </div>
            <div class="central-block">
                <form class="fast-search" method="get" autocomplete="off" aria-autocomplete="off"
                    action="https://www.forevermissed.com/findmemorial/">
                    <div class="fast-search-inner">
                        <div class="inputs-wrap">
                            <div class="inputs">
                                <label for="fast-search-input" class="fast-search-label">
                                    Find a memorial <i class="fmi-search"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="right-block">
                <nav class="welcome-menu">
                    <a class="welcome-menu__link" href="{{route('contactus')}}">
                        Contact us </a>
                    <a class="welcome-menu__link" href="https://www.forevermissed.com/signin/">
                        <i class="fmi-lock"></i>
                        Sign In </a>
                </nav>
                <div class="like-share-wrapper share-facebook-opengraph"
                    data-share-url="https://www.forevermissed.com/?utm_source=Facebook&amp;utm_medium=FB+User+Sharing+Main&amp;utm_campaign=FB+Users+Sharing+Main&amp;utm_content=Link+in+FB+MAIN+SITE+SHARE">
                    <svg width="78" height="28" viewBox="0 0 78 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_ii)">
                            <rect width="78" height="28" rx="4" fill="#1977F3"></rect>
                        </g>
                        <rect x="0.5" y="0.5" width="77" height="27" rx="3.5" stroke="#1973E2"></rect>
                        <path
                            d="M28 14C28 9.58125 24.4187 6 20 6C15.5813 6 12 9.58125 12 14C12 18.4187 15.5813 22 20 22C20.0469 22 20.0938 22 20.1406 21.9969V15.7719H18.4219V13.7688H20.1406V12.2937C20.1406 10.5844 21.1844 9.65313 22.7094 9.65313C23.4406 9.65313 24.0687 9.70625 24.25 9.73125V11.5188H23.2C22.3719 11.5188 22.2094 11.9125 22.2094 12.4906V13.7656H24.1938L23.9344 15.7688H22.2094V21.6906C25.5531 20.7312 28 17.6531 28 14Z"
                            fill="white"></path>
                        <path
                            d="M38.0703 16.6738C38.0703 17.4355 37.7949 18.0332 37.2441 18.4668C36.6934 18.9004 35.9336 19.1172 34.9648 19.1172C33.9961 19.1172 33.2031 18.9668 32.5859 18.666V17.3418C32.9766 17.5254 33.3906 17.6699 33.8281 17.7754C34.2695 17.8809 34.6797 17.9336 35.0586 17.9336C35.6133 17.9336 36.0215 17.8281 36.2832 17.6172C36.5488 17.4062 36.6816 17.123 36.6816 16.7676C36.6816 16.4473 36.5605 16.1758 36.3184 15.9531C36.0762 15.7305 35.5762 15.4668 34.8184 15.1621C34.0371 14.8457 33.4863 14.4844 33.166 14.0781C32.8457 13.6719 32.6855 13.1836 32.6855 12.6133C32.6855 11.8984 32.9395 11.3359 33.4473 10.9258C33.9551 10.5156 34.6367 10.3105 35.4922 10.3105C36.3125 10.3105 37.1289 10.4902 37.9414 10.8496L37.4961 11.9922C36.7344 11.6719 36.0547 11.5117 35.457 11.5117C35.0039 11.5117 34.6602 11.6113 34.4258 11.8105C34.1914 12.0059 34.0742 12.2656 34.0742 12.5898C34.0742 12.8125 34.1211 13.0039 34.2148 13.1641C34.3086 13.3203 34.4629 13.4688 34.6777 13.6094C34.8926 13.75 35.2793 13.9355 35.8379 14.166C36.4668 14.4277 36.9277 14.6719 37.2207 14.8984C37.5137 15.125 37.7285 15.3809 37.8652 15.666C38.002 15.9512 38.0703 16.2871 38.0703 16.6738ZM45.2832 19H43.9004V15.0156C43.9004 14.5156 43.7988 14.1426 43.5957 13.8965C43.3965 13.6504 43.0781 13.5273 42.6406 13.5273C42.0625 13.5273 41.6367 13.7012 41.3633 14.0488C41.0938 14.3926 40.959 14.9707 40.959 15.7832V19H39.582V9.88281H40.959V12.1973C40.959 12.5684 40.9355 12.9648 40.8887 13.3867H40.9766C41.1641 13.0742 41.4238 12.832 41.7559 12.6602C42.0918 12.4883 42.4824 12.4023 42.9277 12.4023C44.498 12.4023 45.2832 13.1934 45.2832 14.7754V19ZM51.2539 19L50.9785 18.0977H50.9316C50.6191 18.4922 50.3047 18.7617 49.9883 18.9062C49.6719 19.0469 49.2656 19.1172 48.7695 19.1172C48.1328 19.1172 47.6348 18.9453 47.2754 18.6016C46.9199 18.2578 46.7422 17.7715 46.7422 17.1426C46.7422 16.4746 46.9902 15.9707 47.4863 15.6309C47.9824 15.291 48.7383 15.1055 49.7539 15.0742L50.873 15.0391V14.6934C50.873 14.2793 50.7754 13.9707 50.5801 13.7676C50.3887 13.5605 50.0898 13.457 49.6836 13.457C49.3516 13.457 49.0332 13.5059 48.7285 13.6035C48.4238 13.7012 48.1309 13.8164 47.8496 13.9492L47.4043 12.9648C47.7559 12.7812 48.1406 12.6426 48.5586 12.5488C48.9766 12.4512 49.3711 12.4023 49.7422 12.4023C50.5664 12.4023 51.1875 12.582 51.6055 12.9414C52.0273 13.3008 52.2383 13.8652 52.2383 14.6348V19H51.2539ZM49.2031 18.0625C49.7031 18.0625 50.1035 17.9238 50.4043 17.6465C50.709 17.3652 50.8613 16.9727 50.8613 16.4688V15.9062L50.0293 15.9414C49.3809 15.9648 48.9082 16.0742 48.6113 16.2695C48.3184 16.4609 48.1719 16.7559 48.1719 17.1543C48.1719 17.4434 48.2578 17.668 48.4297 17.8281C48.6016 17.9844 48.8594 18.0625 49.2031 18.0625ZM57.4473 12.4023C57.7246 12.4023 57.9531 12.4219 58.1328 12.4609L57.998 13.7441C57.8027 13.6973 57.5996 13.6738 57.3887 13.6738C56.8379 13.6738 56.3906 13.8535 56.0469 14.2129C55.707 14.5723 55.5371 15.0391 55.5371 15.6133V19H54.1602V12.5195H55.2383L55.4199 13.6621H55.4902C55.7051 13.2754 55.9844 12.9688 56.3281 12.7422C56.6758 12.5156 57.0488 12.4023 57.4473 12.4023ZM62.1699 19.1172C61.1621 19.1172 60.373 18.8242 59.8027 18.2383C59.2363 17.6484 58.9531 16.8379 58.9531 15.8066C58.9531 14.748 59.2168 13.916 59.7441 13.3105C60.2715 12.7051 60.9961 12.4023 61.918 12.4023C62.7734 12.4023 63.4492 12.6621 63.9453 13.1816C64.4414 13.7012 64.6895 14.416 64.6895 15.3262V16.0703H60.3711C60.3906 16.6992 60.5605 17.1836 60.8809 17.5234C61.2012 17.8594 61.6523 18.0273 62.2344 18.0273C62.6172 18.0273 62.9727 17.9922 63.3008 17.9219C63.6328 17.8477 63.9883 17.7266 64.3672 17.5586V18.6777C64.0312 18.8379 63.6914 18.9512 63.3477 19.0176C63.0039 19.084 62.6113 19.1172 62.1699 19.1172ZM61.918 13.4453C61.4805 13.4453 61.1289 13.584 60.8633 13.8613C60.6016 14.1387 60.4453 14.543 60.3945 15.0742H63.3359C63.3281 14.5391 63.1992 14.1348 62.9492 13.8613C62.6992 13.584 62.3555 13.4453 61.918 13.4453Z"
                            fill="white"></path>
                        <defs>
                            <filter id="filter0_ii" x="0" y="-9" width="78" height="38"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                </feBlend>
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                </feColorMatrix>
                                <feOffset dy="1"></feOffset>
                                <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                                </feComposite>
                                <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.4 0">
                                </feColorMatrix>
                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow"></feBlend>
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                </feColorMatrix>
                                <feMorphology radius="5" operator="dilate" in="SourceAlpha"
                                    result="effect2_innerShadow"></feMorphology>
                                <feOffset dy="-9"></feOffset>
                                <feGaussianBlur stdDeviation="7"></feGaussianBlur>
                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                                </feComposite>
                                <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.2 0">
                                </feColorMatrix>
                                <feBlend mode="normal" in2="effect1_innerShadow" result="effect2_innerShadow">
                                </feBlend>
                            </filter>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <nav class="wrapper">
            <ul class="header-menu__list">
                <li class="header-menu__item header-menu__item_active">
                    <a href="{{ url('/') }}" class="header-menu__link" title="Home">
                        Home </a>
                </li>
                <li class="header-menu__item ">
                    <a href="/about" class="header-menu__link" data-url="/about" title="About">
                        About </a>
                </li>
                <li tabindex="0" class="header-menu__item header-menu__item_submenu ">
                    <span title="Memorial websites" class="header-menu__link header-menu__link_label">
                        Memorial websites <i class="fmi-arrow-down"></i>
                    </span>
                    <ul class="header-menu__sublist">
                        <li class="header-menu__sublist-item ">
                            <a href="#" class="header-menu__link header-menu__link_submenu"
                                data-url="https://www.forevermissed.com/creatememorial" title="Create a Memorial"
                                onclick="eventTracking.run('main_site_menu_link', 'new_memorial_trigger');">
                                Create a Memorial </a>
                        </li>
                        <li class="header-menu__sublist-item ">
                            <a href="#" class="header-menu__link header-menu__link_submenu"
                                data-url="https://www.forevermissed.com/memorial-sites-for-loved-ones"
                                title="About memorial websites"
                                onclick="eventTracking.run('home_page', 'user_actions', 'learn_more_menu');">
                                About memorial websites </a>
                        </li>
                    </ul>
                </li>
                <li class="header-menu__item ">
                    <a href="{{ url('/plans') }}" class="header-menu__link" title="Plans &amp; Features">
                        Plans &amp; Features </a>
                </li>
                <li class="header-menu__item ">
                    <a href="{{ url('/testimonials   ') }}" class="header-menu__link" title="Testimonials">
                        Testimonials </a>
                </li>
                <li class="header-menu__item ">
                    <a href="{{ url('/resources') }}" class="header-menu__link" title="Resources">
                        Resources </a>
                </li>
                <li class="header-menu__item ">
                    <a href="{{ url('/en/blog') }}" class="header-menu__link" data-url="/blog" title="Blog">
                        Blog </a>
                </li>
            </ul>
        </nav>
    </div>
