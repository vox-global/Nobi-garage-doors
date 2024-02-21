 <aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
     <section class="sidebar">
         <div class="my-3 mx-4 text-center ">
             <a href="{{ route('admin.home') }}">
                 <img src="{{ asset('admin/img/logo.webp') }}" class="hide-on-collapse" alt="Company Logo">
                 <img src="{{ asset('admin/img/favicon.png') }}" class="show-on-collapse" alt="Company Logo">
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
                     Projects Management
                     <i class="icon icon-angle-left s-18 pull-right"></i>
                 </a>
                 <ul class="treeview-menu" style="display: none;">
                     <li>
                         <a href="{{ route('projects-view') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             All Projects
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('projects-add') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-add"></i>
                             </span>
                             Add Project
                         </a>
                     </li>
                 </ul>
             </li>

             <li class="treeview">
                 <a href="#">
                     <span class="d-inline-block">
                         <i class="icon icon-change_history s-18"></i>
                     </span>
                     Brands Management
                     <i class="icon icon-angle-left s-18 pull-right"></i>
                 </a>
                 <ul class="treeview-menu" style="display: none;">
                     <li>
                         <a href="{{ route('brands-view') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             All Brands
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('brands-add') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-add"></i>
                             </span>
                             Add Brand
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
                         <a href="{{ route('content-service-installation') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             Service - Installation Page
                         </a>
                     </li>

                     <li>
                         <a href="{{ route('content-service-repair') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             Service - Repair Page
                         </a>
                     </li>

                     <li>
                         <a href="{{ route('content-supply') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             Supply Page
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('content-projects') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             Projects Page
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('content-blogs') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             Blogs Page
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
                         <i class="icon icon-email2 s-18"></i>
                     </span>
                     Customer Interactions
                     <i class="icon icon-angle-left s-18 pull-right"></i>
                 </a>
                 <ul class="treeview-menu" style="display: none;">
                     <li>
                         <a href="{{ route('newsletter-view') }}">
                             {{-- <a href="#"> --}}
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             Newsletters
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('inquiry-view') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             Inquiries
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('quotation-view') }}">
                             <span class="d-inline-block">
                                 <i class="icon icon-list4"></i>
                             </span>
                             Quotation Requests
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
