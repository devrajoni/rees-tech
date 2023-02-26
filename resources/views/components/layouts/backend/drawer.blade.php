<!-- Side Header Start -->
<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                @can('Dashboard')
                    <li><a href="{{ route('backend.dashboard') }}"><i class="ti-home"></i> <span>Dashboard</span></a>
                    </li>
                @endcan

                <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>Manage Role</span></a>
                    <ul class="side-header-sub-menu">
                        @can('Create Role & Permission')
                            <li><a href="{{ route('backend.roles.create') }}"><span>Create Role & Permission</span></a></li>
                        @endcan

                        @can('All Role & Permission')
                            <li><a href="{{ route('backend.roles.index') }}"><span>All Role & Permission</span></a></li>
                        @endcan

                        @can('User')
                            <li><a href="{{ route('backend.users.index') }}"><span>User</span></a></li>
                        @endcan
                    </ul>
                </li>

                <li class="has-sub-menu"><a href="#"><i class="ti-shopping-cart"></i> <span>Product</span></a>
                    <ul class="side-header-sub-menu">
                        @can('Product Category')
                            <li><a href="{{ route('backend.categories.index') }}"><span>Product Category</span></a></li>
                        @endcan
                        @can('Product Sub Category')
                            <li><a href="{{ route('backend.subCategories.index') }}"><span>Product Sub Category</span></a></li>
                        @endcan
                        @can('Create Product')
                            <li><a href="{{ route('backend.products.create') }}"><span>Create Product</span></a></li>
                        @endcan
                        @can('All Product')
                            <li><a href="{{ route('backend.products.index') }}"><span>All Product</span></a></li>
                        @endcan
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"><i class="ti-layers"></i> <span>Project</span></a>
                    <ul class="side-header-sub-menu">
                        @can('Project Category')
                            <li><a href="{{ route('backend.project-categories.index') }}"><span>Project Category</span></a></li>
                        @endcan

                        @can('Create Project')
                            <li><a href="{{ route('backend.projects.create') }}"><span>Create Project</span></a></li>
                        @endcan

                        @can('All Project')
                            <li><a href="{{ route('backend.projects.index') }}"><span>All Project</span></a></li>
                        @endcan
                    </ul>
                </li>
                @can('Banner')
                    <li><a href="{{ route('backend.banners.create') }}"><i class="ti-layout"></i> <span>Banner</span></a>
                    </li>
                @endcan

                <li class="has-sub-menu"><a href="#"><i class="ti-layers"></i> <span>Work Process</span></a>
                    <ul class="side-header-sub-menu">
                        @can('Create Work Process')
                            <li><a href="{{ route('backend.work-process.create') }}"><span>Create Work Process</span></a></li>
                        @endcan

                        @can('All Work Process')
                            <li><a href="{{ route('backend.work-process.index') }}"><span>All Work Process</span></a></li>
                        @endcan
                    </ul>
                </li>
                @can('Mission & Vision')
                    <li><a href="{{ route('backend.mission-vision.create') }}"><i class="ti-shopping-cart"></i><span>Mission & Vision</span></a>
                    </li>
                @endcan

                @can('All Mail')
                    <li><a href="{{ route('backend.contact') }}"><i class="ti-layout"></i> <span>All Mail</span></a>
                    </li>
                @endcan
            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div><!-- Side Header End -->
