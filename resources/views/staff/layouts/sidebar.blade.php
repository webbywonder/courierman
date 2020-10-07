<div class="sidebar sidebar-dark bg-dark" id="siddebar">
    <ul class="list-unstyled">
        <li id="home"><a href="{{ route('staff.dashboard') }}"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a></li>       
        <li id="deliver"><a href="{{ route('courier.deliver.search') }}"><i class="fa fa-fw fa-cart-arrow-down"></i> Deliver</a></li>
        <li id="notify"><a href="{{ route('courier.deliver.notify') }}"><i class="fa fa-fw fa-envelope"></i> Send Deliver Notification</a></li>
        <li id="branchIncome"><a href="{{ route('staff.cashe.collection') }}"><i class="fa fa-fw fa-money-bill-alt"></i> Cash Collection</a></li>
    </ul>
</div>
