<li class="{{ Request::is('sliders*') ? 'active' : '' }}">
    <a href="{!! route('sliders.index') !!}"><i class="fa fa-edit"></i><span>Sliders</span></a>
</li>

<li class="{{ Request::is('seos*') ? 'active' : '' }}">
    <a href="{{url('admin/seos/1/edit')}}"><i class="fa fa-edit"></i><span>Settings</span></a>
</li>


<li>
    <a></a>
</li>


<li class="{{ Request::is('abouts*') ? 'active' : '' }}">
    <a href="{!! route('abouts.index') !!}"><i class="fa fa-edit"></i><span>About Us</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{!! route('projects.index') !!}"><i class="fa fa-edit"></i><span>Propositions</span></a>
</li>

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{!! route('services.index') !!}"><i class="fa fa-edit"></i><span>Services</span></a>
</li>


<li class="{{ Request::is('contacts*') ? 'active' : '' }}">
    <a href="{!! route('contacts.index') !!}"><i class="fa fa-edit"></i><span>Contacts</span></a>
</li>

<li class="{{ Request::is('blogs*') ? 'active' : '' }}">
    <a href="{!! route('blogs.index') !!}"><i class="fa fa-edit"></i><span>Newsroom</span></a>
</li>

<li class="{{ Request::is('teams*') ? 'active' : '' }}">
    <a href="{!! route('teams.index') !!}"><i class="fa fa-edit"></i><span>Team</span></a>
</li>


<li class="{{ Request::is('partners*') ? 'active' : '' }}">
    <a href="{!! route('partners.index') !!}"><i class="fa fa-edit"></i><span>Partners</span></a>
</li>

<li class="{{ Request::is('clints*') ? 'active' : '' }}">
    <a href="{!! route('clints.index') !!}"><i class="fa fa-edit"></i><span>Clints</span></a>
</li>

<li class="{{ Request::is('careers*') ? 'active' : '' }}">
    <a href="{!! route('careers.index') !!}"><i class="fa fa-edit"></i><span>Careers</span></a>
</li>

