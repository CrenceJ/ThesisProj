<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="/service_engineer">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>

<!-- Nav Item - Services -->
<li class="nav-item">
    <a class="nav-link" href="/services">
        <i class="fas fa-fw fa-table"></i>
        <span>Services</span>
    </a>
</li>


<!-- Nav Item - Inventory -->
<li class="nav-item">
    <a class="nav-link" href="/inventory">
        <i class="fas fa-fw fa-folder"></i>
        <span>Inventory</span>
    </a>
</li>


<!-- Nav Item - Purchase Parts -->
<li class="nav-item">
    <a class="nav-link" href="/purchase-parts">
        <i class=" fas fa-fw fa-wrench"></i>
        <span>Purchase Parts</span>
    </a>
</li>

<!-- Nav Item - Notifications -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNotifications" aria-expanded="true" aria-controls="collapseNotifications">
        <i class="fas fa-fw fa-bell"></i>
        <span>Notifications</span><span style="color:#ff6666;"> ({{$currentUser['notif']}})</span>
    </a>
    <div id="collapseNotifications" class="collapse" aria-labelledby="headingNotifications" data-parent="#accordionSidebar">
        <div class="bg-transparent py-2 collapse-inner rounded">
            <a class="collapse-item" href='/notifications'>Claimed</a>
            <a class="collapse-item" href='/announcement'>Announcements</a>
        </div>
    </div>
</li>

<!-- Nav Item - Reports -->
<li class="nav-item">
    <a class="nav-link" href="/reports">
        <i class="fas fa-fw fa-info"></i>
        <span>Reports</span>
    </a>
</li>