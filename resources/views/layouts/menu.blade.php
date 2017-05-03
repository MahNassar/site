<li class="{{ Request::is('teams*') ? 'active' : '' }}">
    <a href="{!! route('teams.index') !!}"><i class="fa fa-edit"></i><span>Teams</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{!! route('projects.index') !!}"><i class="fa fa-edit"></i><span>Projects</span></a>
</li>

<li class="{{ Request::is('abouts*') ? 'active' : '' }}">
    <a href="{!! route('abouts.index') !!}"><i class="fa fa-edit"></i><span>Abouts</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

