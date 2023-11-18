<div class="sb-sidenav-menu">
    <div class="nav">
         <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Dashboard
        </a>
        <div class="sb-sidenav-menu-heading">Portfolio Admin</div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Banner
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ route('banner') }}">Add Banner</a>
                <a class="nav-link" href="{{ route('bannermanage') }}">Manage Banner</a>
            </nav>
        </div>

        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Service
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ route('service') }}">Manage</a>
             </nav>
        </div>

        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#cvollapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            About
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="cvollapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ route('aboutadd') }}">Add Banner</a>
                <a class="nav-link" href="{{ route('aboutmanage') }}">Manage Banner</a>
            </nav>
        </div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#cvollapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Skill_Exp_Education
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="cvollapseLayouts4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ route('skilladd') }}">Add Skill</a>
                <a class="nav-link" href="{{route('skillmanage')}}">Manage Skill</a>
            </nav>
        </div>

        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#cvollapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Project
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="cvollapseLayouts5" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ route('projectadd') }}">Add Project</a>
                <a class="nav-link" href="{{route('projectmanage')}}">Manage Project</a>
            </nav>
        </div>


        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#cvollapseLayouts5w" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Team
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="cvollapseLayouts5w" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ route('teamadd') }}">Add Member</a>
                <a class="nav-link" href="{{route('teammanage')}}">Manage Member</a>
            </nav>
        </div>

        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#cvollapseLayouts5ws" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Message
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="cvollapseLayouts5ws" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
                 <a class="nav-link" href="{{route('contactmanage')}}">Message Manage</a>
            </nav>
        </div>
    </div>
</div>

