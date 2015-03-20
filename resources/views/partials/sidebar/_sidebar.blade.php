<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
    <li><a data-toggle="collapse" href="#userManagementNav" aria-expanded="false" aria-controls="userManagementNav">User Management</a></li>
  </ul>
  <ul class="collapse nav nav-sidebar" id="userManagementNav">
    <li><a href="{{ route('dashboard.users') }}">Users</a></li>
    <li><a href="{{ route('dashboard.roles') }}">Roles</a></li>
    <li><a href="{{ route('dashboard.permissions') }}">Permissions</a></li>
  </ul>
</div>