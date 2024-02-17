 <aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
     <section class="sidebar">
         <div class="my-3 mx-4 text-center ">
             <a href="{{ route('admin.home') }}">
                 <img src="{{ asset('admin/img/logo.svg') }}" class="hide-on-collapse" alt="SkyFreight">
                 <img src="{{ asset('admin/img/closed-menu.png') }}" class="show-on-collapse" alt="SkyFreight">
             </a>
         </div>
         <ul class="sidebar-menu">
             <li class="header"><strong>MAIN NAVIGATION</strong></li>
             <li>
                 <a href="{{ route('admin.home') }}">
                     <span class="d-inline-block">
                         <i class="icon icon-dashboard2"></i>
                     </span>
                     Dashboard
                 </a>
             </li>
             {{-- <li class="treeview">
                 <a href="#">
                     <span class="d-inline-block">
                         <i class="icon icon-change_history s-18"></i>
                     </span>
                     Artwork Management
                     <i class="icon icon-angle-left s-18 pull-right"></i>
                 </a>
                 <ul class="treeview-menu" style="display: none;">
                     <li>
                         <a href="{{ route('artwork-view') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             All Artworks
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('artwork-add') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-add"></i>
                             </span>
                             Add Artwork
                         </a>
                     </li>
                 </ul>
             </li> --}}


             {{-- <li class="treeview">
                 <a href="#">
                     <span class="d-inline-block">
                         <i class="icon icon-change_history s-18"></i>
                     </span>
                     Categories Management
                     <i class="icon icon-angle-left s-18 pull-right"></i>
                 </a>
                 <ul class="treeview-menu" style="display: none;">
                     <li>
                         <a href="{{ route('categories-view') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             All Categories
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('categories-add') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-add"></i>
                             </span>
                             Add Category
                         </a>
                     </li>
                 </ul>
             </li> --}}




             {{-- <li class="treeview">
                 <a href="#">
                     <span class="d-inline-block">
                         <i class="icon icon-change_history s-18"></i>
                     </span>
                     Blog Categories Management
                     <i class="icon icon-angle-left s-18 pull-right"></i>
                 </a>
                 <ul class="treeview-menu" style="display: none;">
                     <li>
                         <a href="{{ route('blog_categories-view') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             All Blog Categories
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('blog_categories-add') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-add"></i>
                             </span>
                             Add Blog Category
                         </a>
                     </li>
                 </ul>
             </li> --}}

             <li class="treeview">
                 <a href="#">
                     <span class="d-inline-block">
                         <i class="icon icon-change_history s-18"></i>
                     </span>
                     Testimonials Management
                     <i class="icon icon-angle-left s-18 pull-right"></i>
                 </a>
                 <ul class="treeview-menu" style="display: none;">
                     <li>
                         <a href="{{ route('testimonials-view') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             All Testimonials
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('testimonials-add') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-add"></i>
                             </span>
                             Add Testimonial
                         </a>
                     </li>
                 </ul>
             </li>
             <li class="treeview">
                 <a href="#">
                     <span class="d-inline-block">
                         <i class="icon icon-change_history s-18"></i>
                     </span>
                     Content Management
                     <i class="icon icon-angle-left s-18 pull-right"></i>
                 </a>
                 <ul class="treeview-menu" style="display: none;">
                    <li>
                        <a href="{{ route('content-homepage') }}">
                            <span class="d-inline-block">
                                <i class="icon icon-list4"></i>
                            </span>
                            Homepage
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('content-contact') }}">
                            <span class="d-inline-block">
                                <i class="icon icon-list4"></i>
                            </span>
                            Contact Us
                        </a>
                    </li>
                 </ul>
             </li>

             <li class="treeview">
                 <a href="#">
                     <span class="d-inline-block">
                         <i class="icon icon-gears s-18"></i>
                     </span>
                     Settings
                     <i class="icon icon-angle-left s-18 pull-right"></i>
                 </a>
                 <ul class="treeview-menu" style="display: none;">

                     {{-- @can('general-settings') --}}
                     <li>
                         <a href="{{ route('settings') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-settings2"></i>
                             </span>
                             General Settings
                         </a>
                     </li>
                     {{-- @endcan --}}

                 </ul>
             </li>
         </ul>



         </ul>
     </section>
 </aside>
