<li><a href="{{ route('home') }}" class="{{ request()->segment(1) === null ? 'active-2' : '' }}">Home</a></li>
<li><a href="{{ route('about') }}" class="{{ request()->segment(1) === 'about' ? 'active-2' : '' }}">About Us</a></li>
<li><a href="{{ route('all-publications') }}"
        class="{{ request()->segment(1) === 'all-publications' || request()->segment(1) == 'publication-details' ? 'active-2' : '' }}">Publications</a></li>
<li><a href="{{ route('all-news') }}" class="{{ request()->segment(1) === 'all-news' || request()->segment(1) === 'news-details' ? 'active-2' : '' }}">News &amp;
        Events</a></li>
<li><a href="{{ route('peoples') }}"
        class="{{ request()->segment(1) === 'peoples' || request()->segment(1) === 'people' ? 'active-2' : '' }}">People</a>
</li>
<li><a href="{{ route('our-services') }}"
        class="{{ request()->segment(1) === 'our-services' || request()->segment(1) == 'service-details' ? 'active-2' : '' }}">Services</a></li>
<li><a href="{{ route('careers') }}"
        class="{{ request()->segment(1) === 'careers' || request()->segment(1) == 'careers-details' ? 'active-2' : '' }}">Careers</a></li>
<li><a href="{{ route('contact') }}" class="{{ request()->segment(1) === 'contact' ? 'active-2' : '' }}">Contact
        Us</a></li>
