 <!-- Menu -->
 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
     <div class="app-brand demo">
         <a href="index.html" class="app-brand-link">
             <span class="app-brand-logo demo">
                 <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                     <title>icon</title>
                     <defs>
                         <linearGradient x1="50%" y1="0%" x2="50%" y2="100%"
                             id="linearGradient-1">
                             <stop stop-color="#5A8DEE" offset="0%"></stop>
                             <stop stop-color="#699AF9" offset="100%"></stop>
                         </linearGradient>
                         <linearGradient x1="0%" y1="0%" x2="100%" y2="100%"
                             id="linearGradient-2">
                             <stop stop-color="#FDAC41" offset="0%"></stop>
                             <stop stop-color="#E38100" offset="100%"></stop>
                         </linearGradient>
                     </defs>
                     <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                         <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                             <g id="Login" transform="translate(519.000000, 244.000000)">
                                 <g id="Logo" transform="translate(148.000000, 42.000000)">
                                     <g id="icon" transform="translate(0.000000, 4.000000)">
                                         <path
                                             d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                                             id="Combined-Shape" fill="#4880EA"></path>
                                         <path
                                             d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                             id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
                                         <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0"
                                             width="7.68181818" height="7.68181818"></rect>
                                     </g>
                                 </g>
                             </g>
                         </g>
                     </g>
                 </svg>
             </span>
             <span class="app-brand-text demo menu-text fw-bold ms-2">Frest</span>
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
             <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
             <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
         </a>
     </div>

     <div class="menu-divider mt-0"></div>

     <div class="menu-inner-shadow"></div>

     <ul class="menu-inner py-1">
         <!-- Dashboard -->
         <li class="menu-header small text-uppercase"><span class="menu-header-text">Dashboard</span></li>
         <li class="menu-item">
             <a href="{{ route('admin.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                 <div data-i18n="@lang('nav.dashboard')">@lang('nav.dashboard')</div>
             </a>
         </li>


         @if (auth()->user()->hasAbilityTo('see roles'))
             <!-- Roles & Permissions -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">@lang('nav.roles_and_permissions')</span></li>
             <li class="menu-item">
                 <a href="{{ route('admin.roles.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bxs-check-shield"></i>
                     <div data-i18n="@lang('nav.roles_and_permissions')">@lang('nav.roles_and_permissions')</div>
                 </a>
             </li>
         @endif

         @if (auth()->user()->hasAbilityTo('see admins'))
             <!-- Adminstrators -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">@lang('nav.adminstrators')</span></li>
             <li class="menu-item">
                 <a href="{{ route('admin.admins.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bxs-user-circle"></i>
                     <div data-i18n="@lang('nav.admins')">@lang('nav.admins')</div>
                 </a>
             </li>
         @endif
         @if (auth()->user()->hasAbilityTo('see categories'))
             <!-- Adminstrators -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">@lang('nav.categories')</span></li>
             <li class="menu-item">
                 <a href="{{ route('admin.categories.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-selection"></i>
                     <div data-i18n="@lang('nav.categories')">@lang('nav.categories')</div>
                 </a>
             </li>
         @endif

         @if (auth()->user()->hasAbilityTo('see banners'))
             <!-- Adminstrators -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">@lang('nav.banners')</span></li>
             <li class="menu-item">
                 <a href="{{ route('admin.banners.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-image"></i>
                     <div data-i18n="@lang('nav.banners')">@lang('nav.banners')</div>
                 </a>
             </li>
         @endif

         @if (auth()->user()->hasAbilityTo('see services'))
             <!-- Adminstrators -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">@lang('nav.services')</span>
             </li>
             <li class="menu-item">
                 <a href="{{ route('admin.services.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-like"></i>
                     <div data-i18n="@lang('nav.services')">@lang('nav.services')</div>
                 </a>
             </li>
         @endif
         @if (auth()->user()->hasAbilityTo('see about'))
             <!-- Adminstrators -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">@lang('nav.about')</span>
             </li>
             <li class="menu-item">
                 <a href="{{ route('admin.about.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-like"></i>
                     <div data-i18n="@lang('nav.about')">@lang('nav.about')</div>
                 </a>
             </li>
         @endif
         @if (auth()->user()->hasAbilityTo('see projects'))
             <!-- Adminstrators -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">@lang('nav.projects')</span>
             </li>
             <li class="menu-item">
                 <a href="{{ route('admin.projects.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-cog"></i>
                     <div data-i18n="@lang('nav.projects')">@lang('nav.projects')</div>
                 </a>
             </li>
         @endif

         @if (auth()->user()->hasAbilityTo('see faq'))
             <!-- Adminstrators -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">@lang('nav.faq')</span>
             </li>
             <li class="menu-item">
                 <a href="{{ route('admin.faq.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-question-mark"></i>
                     <div data-i18n="@lang('nav.faq')">@lang('nav.faq')</div>
                 </a>
             </li>
         @endif
         @if (auth()->user()->hasAbilityTo('see reviews'))
             <!-- Adminstrators -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">@lang('nav.reviews')</span>
             </li>
             <li class="menu-item">
                 <a href="{{ route('admin.reviews.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-star"></i>
                     <div data-i18n="@lang('nav.reviews')">@lang('nav.reviews')</div>
                 </a>
             </li>
         @endif
         @if (auth()->user()->hasAbilityTo('see numbers'))
             <!-- Adminstrators -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">@lang('nav.numbers')</span>
             </li>
             <li class="menu-item">
                 <a href="{{ route('admin.numbers.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-user"></i>
                     <div data-i18n="@lang('nav.numbers')">@lang('nav.numbers')</div>
                 </a>
             </li>
         @endif
         @if (auth()->user()->hasAbilityTo('see partners'))
             <!-- Adminstrators -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">@lang('nav.partners')</span>
             </li>
             <li class="menu-item">
                 <a href="{{ route('admin.partners.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-select-multiple"></i>
                     <div data-i18n="@lang('nav.partners')">@lang('nav.partners')</div>
                 </a>
             </li>
         @endif
         @if (auth()->user()->hasAbilityTo('see articles'))
             <!-- Adminstrators -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">@lang('nav.articles')</span>
             </li>
             <li class="menu-item">
                 <a href="{{ route('admin.articles.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-edit"></i>
                     <div data-i18n="@lang('nav.articles')">@lang('nav.articles')</div>
                 </a>
             </li>
         @endif
     </ul>
 </aside>
 <!-- / Menu -->
