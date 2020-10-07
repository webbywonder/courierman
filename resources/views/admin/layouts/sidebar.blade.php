<div class="sidebar sidebar-dark bg-dark">
    <ul class="list-unstyled">
        <li class="active"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
        <li>
            <a href="#settings" data-toggle="collapse">
                <i class="fa fa-fw fa-globe"></i> Website Setting
            </a>
            <ul id="settings" class="list-unstyled collapse">
                <li><a href="{{ route('admin.basicSetting') }}"><i class="fa fa-cog"></i> Basic Settings</a></li>
                <li><a href="{{ route('admin.smsSetting') }}"><i class="fa fa-phone"></i> SMS Settings</a></li>
                <li><a href="{{ route('admin.emailSetting') }}"><i class="fa fa-envelope"></i> Email Settings</a></li>
            </ul>
        </li>
        <li>
            <a href="#courierSetting" data-toggle="collapse">
                <i class="fa fa-fw fa-cog"></i> Courier Setting
            </a>
            <ul id="courierSetting" class="list-unstyled collapse">
                <li><a href="{{ route('unit.index') }}"><i class="far fa-circle"></i>&nbsp;Manage Unit</a></li>
                <li><a href="{{ route('type.index') }}"><i class="far fa-circle"></i>&nbsp;Manage Type</a></li>
            </ul>
        </li>
        <li>
            <a href="#branch" data-toggle="collapse">
                <i class="fa fa-fw fa-address-card"></i> Branch Info
            </a>
            <ul id="branch" class="list-unstyled collapse">
                <li><a href="{{ route('branch.create') }}"><i class="far fa-circle"></i> Add New Branch</a></li>
                <li><a href="{{ route('branch.index') }}"><i class="far fa-circle"></i> Manage Branch</a></li>
            </ul>
        </li>
        <li>
            <a href="#branchManager" data-toggle="collapse"> 
                <i class="fa fa-fw fa-users"></i> Branch Manager Info
            </a>
            <ul id="branchManager" class="list-unstyled collapse">
                <li><a href="{{ route('branchmanager.create') }}"><i class="far fa-circle"></i> Add Manager</a></li>
                <li><a href="{{ route('branchmanager.index') }}"><i class="far fa-circle"></i> Manage Manager</a></li>
            </ul>
        </li>
        
        <li id="companyIncomeList"><a href="{{ route('admin.company.income') }}"><i class="fa fa-fw fa-money-bill-alt"></i>&nbsp;Company Income</a></li>
        <li>
            <a href="#frontend" data-toggle="collapse">
                <i class="fa fa-fw fa-list"></i> Frontend Setting
            </a>
            <ul id="frontend" class="list-unstyled collapse ">
                <li><a href="{{ route('frontend.logoicon') }}"><i class="far fa-circle"></i>&nbsp;Logo+icon</a></li>
                <li><a href="{{ route('frontend.social') }}"><i class="far fa-circle"></i>&nbsp;Social Link</a></li>
                <li><a href="{{ route('frontend.background') }}"><i class="far fa-circle"></i>&nbsp;Background Image</a></li>
                <li><a href="{{ route('frontend.headertext') }}"><i class="far fa-circle"></i> Banner Text</a></li>
                <li><a href="{{ route('frontend.couriercount') }}"><i class="far fa-circle"></i> Courier Count Info</a></li>
                <li><a href="{{ route('frontend.services') }}"><i class="far fa-circle"></i> Service Setting</a></li>
                <li><a href="{{ route('frontend.aboutus') }}"><i class="far fa-circle"></i> About Us</a></li>
                <li><a href="{{ route('frontend.contactus') }}"><i class="far fa-circle"></i> Contact</a></li>
                <li><a href="{{ route('frontend.testimonial') }}"><i class="far fa-circle"></i> Testimonial</a></li>
                <li><a href="{{ route('frontend.searchcourier') }}"><i class="far fa-circle"></i> Search Courier</a></li>
                <li><a href="{{ route('frontend.footer') }}"><i class="far fa-circle"></i> Footer</a></li>
                <li><a href="{{ route('frontend.faq') }}"><i class="far fa-circle"></i> Faq</a></li>
            </ul>
        </li>
        <li id="visitorMessage"><a href="{{ route('frontend.visitorMessage') }}"><i class="fa fa-fw fa-tachometer-alt"></i> Visitor Message</a></li>
    </ul>
</div>
