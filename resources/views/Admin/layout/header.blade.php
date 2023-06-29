
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="shortcut icon" type="image/png" href="{{asset('assetsBack/images/logos/favicon.png')}}" />
    <link href="{{asset('assetsBack/css/styles.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        form.nosubmit {
            border: none;
            padding: 0;
        }

        input.nosubmit {
            width: 260px;
            border: 1px solid #555;
            display: block;
            padding: 9px 4px 9px 40px;
            background: transparent url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'%3E%3C/path%3E%3C/svg%3E") no-repeat 13px center;
        }

    </style>

</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
         data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="{{asset('assetsBack/images/logos/dark-logo.svg')}}" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" asp-area="Admin" asp-controller="Admin" asp-action="Index" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">UI COMPONENTS</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="Product" aria-expanded="false">
                                <span>
                                    <i class="ti ti-brand-producthunt"></i>
                                </span>
                                <span class="hide-menu">Product</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="Category" aria-expanded="false">
                                <span>
                                    <i class="ti ti-category"></i>
                                </span>
                                <span class="hide-menu">Category</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="SubCategory" aria-expanded="false">
                                <span>
                                    <i class="ti ti-category"></i>
                                </span>
                                <span class="hide-menu">SubCateogry</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="Order" aria-expanded="false">
                                <span>
                                    <i class="ti ti-aperture"></i>

                                </span>
                                <span class="hide-menu">Order</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" asp-area="Admin" asp-action="Index" asp-controller="Payment" aria-expanded="false">
                                <span>
                                    <i class="ti ti-credit-card"></i>
                                </span>


                                <span class="hide-menu">Payment</span>
                            </a>
                        </li>

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Features</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="Size" aria-expanded="false">
                                <span>
                                    <i class="ti ti-dimensions"></i>
                                </span>
                                <span class="hide-menu">Size</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="Color" aria-expanded="false">
                                <span>
                                    <i class="ti ti-color-filter"></i>
                                </span>
                                <span class="hide-menu">Color</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" asp-area="Admin" asp-controller="OrderDeliveryDay" asp-action="Index" aria-expanded="false">
                                <span>
                                    <i class="ti ti-truck"></i>
                                </span>
                                <span class="hide-menu">Order Deleivery Day</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="Rating" aria-expanded="false">
                                <span>
                                    <i class="ti ti-stars"></i>
                                </span>
                                <span class="hide-menu">Rating</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">EXTRA</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="Modify orders" aria-expanded="false">
                                <span>
                                    <i class="ti ti-edit"></i>
                                </span>
                                <span class="hide-menu">Modify orders</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" asp-action="Index" asp-area="Admin" asp-controller="Biller" aria-expanded="false">
                                <span>
                                    <i class="ti ti-file-invoice"></i>
                                </span>
                                <span class="hide-menu">Biller</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="return product" aria-expanded="false">
                                <span>
                                    <i class="ti ti-truck-return"></i>
                                </span>
                                <span class="hide-menu">
                                    Returned products
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="special product" aria-expanded="false">
                                <span>
                                    <i class="ti ti-table-options"></i>
                                </span>
                                <span class="hide-menu">
                                    Special Product
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" asp-action="Index" asp-area="Admin" asp-controller="User" aria-expanded="false">
                                <span>
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">Users</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>

                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    <img src="{{asset('assetsBack/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
