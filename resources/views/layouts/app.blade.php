@include('layouts.head')


<!-- Layout wrapper -->
<div class="layout-wrapper">

    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <div class="navigation-toggler">
                    <a href="#" data-action="navigation-toggler">
                        <i data-feather="menu"></i>
                    </a>
                </div>

                <div class="header-logo">
                    <a href="">
                        BEST SMARTPHONE AHP & SAW
                    </a>
                </div>
            </div>

            <ul class="navbar-nav ml-auto text-right">
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                        <span class="ml-2 d-sm-inline d-none">Superadmin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right btn btn-danger">
                        <a href="{{ route('logout') }}" class="text-light" data-sidebar-target="#settings">Keluar</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        @include('layouts.navbar')

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content">
                <div class="row">

                    <!-- Total Kriteria -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Total Kriteria</h6>
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <div class="avatar">
                                            <span class="avatar-title bg-primary-bright text-primary rounded-pill">
                                                <i data-feather="sliders"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="font-weight-bold ml-1 font-size-30 ml-3">0</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Alternatif -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Total Alternatif</h6>
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <div class="avatar">
                                            <span class="avatar-title bg-info-bright text-info rounded-pill">
                                                <i data-feather="layers"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="font-weight-bold ml-1 font-size-30 ml-3">0</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Akurasi -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Total Akurasi</h6>
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <div class="avatar">
                                            <span class="avatar-title bg-success-bright text-success rounded-pill">
                                                <i data-feather="check-circle"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="font-weight-bold ml-1 font-size-30 ml-3">0</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Recent Orders</h6>
                        <div class="table-responsive">
                            <table id="recent-orders" class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Customer</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="product-detail.html" class="d-flex align-items-center">
                                                <img width="40" src="../../assets/media/image/products/product1.png"
                                                    class="rounded mr-3" alt="Vase">
                                                <span>Vase</span>
                                            </a>
                                        </td>
                                        <td>Dollie Bullock</td>
                                        <td>$230</td>
                                        <td>
                                            <span class="badge bg-secondary-bright text-secondary">On pre-order (not
                                                paid)</span>
                                        </td>
                                        <td>2020/02/28</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-more-alt"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View Detail</a>
                                                    <a href="#" class="dropdown-item">Send</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" class="dropdown-item text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="product-detail.html" class="d-flex align-items-center">
                                                <img width="40" src="../../assets/media/image/products/product2.png"
                                                    class="rounded mr-3" alt="Glasses">
                                                <span>Glasses</span>
                                            </a>
                                        </td>
                                        <td>Holmes Hines</td>
                                        <td>$300</td>
                                        <td>
                                            <span class="badge bg-success-bright text-success">Payment
                                                accepted</span>
                                        </td>
                                        <td>2020/08/28</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-more-alt"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View Detail</a>
                                                    <a href="#" class="dropdown-item">Send</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" class="dropdown-item text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="product-detail.html" class="d-flex align-items-center">
                                                <img width="40" src="../../assets/media/image/products/product3.png"
                                                    class="rounded mr-3" alt="Plate">
                                                <span>Plate</span>
                                            </a>
                                        </td>
                                        <td>Serena Glover</td>
                                        <td>$250</td>
                                        <td>
                                            <span class="badge bg-danger-bright text-danger">Payment error</span>
                                        </td>
                                        <td>2020/08/28</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-more-alt"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View Detail</a>
                                                    <a href="#" class="dropdown-item">Send</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" class="dropdown-item text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="product-detail.html" class="d-flex align-items-center">
                                                <img width="40" src="../../assets/media/image/products/product4.png"
                                                    class="rounded mr-3" alt="Pen">
                                                <span>Pen</span>
                                            </a>
                                        </td>
                                        <td>Dianne Prince</td>
                                        <td>$550</td>
                                        <td>
                                            <span class="badge bg-success-bright text-success">Payment
                                                accepted</span>
                                        </td>
                                        <td>2020/08/28</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-more-alt"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View Detail</a>
                                                    <a href="#" class="dropdown-item">Send</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" class="dropdown-item text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="product-detail.html" class="d-flex align-items-center">
                                                <img width="40" src="../../assets/media/image/products/product5.png"
                                                    class="rounded mr-3" alt="Armchair">
                                                <span>Armchair</span>
                                            </a>
                                        </td>
                                        <td>Morgan Pitts</td>
                                        <td>$280</td>
                                        <td>
                                            <span class="badge bg-warning-bright text-warning">Preparing the
                                                order</span>
                                        </td>
                                        <td>2020/03/30</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-more-alt"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View Detail</a>
                                                    <a href="#" class="dropdown-item">Send</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" class="dropdown-item text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="product-detail.html" class="d-flex align-items-center">
                                                <img width="40" src="../../assets/media/image/products/product6.png"
                                                    class="rounded mr-3" alt="Flowerpot">
                                                <span>Flowerpot</span>
                                            </a>
                                        </td>
                                        <td>Merrill Richardson</td>
                                        <td>$128</td>
                                        <td>
                                            <span class="badge bg-info-bright text-info">Awaiting PayPal
                                                payment</span>
                                        </td>
                                        <td>2020/01/14</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-more-alt"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View Detail</a>
                                                    <a href="#" class="dropdown-item">Send</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" class="dropdown-item text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="product-detail.html" class="d-flex align-items-center">
                                                <img width="40" src="../../assets/media/image/products/product7.png"
                                                    class="rounded mr-3" alt="Wall Clock">
                                                <span>Wall Clock</span>
                                            </a>
                                        </td>
                                        <td>Krista Mathis</td>
                                        <td>$500</td>
                                        <td>
                                            <span class="badge bg-secondary-bright text-secondary">Shipped</span>
                                        </td>
                                        <td>2020/02/28</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-more-alt"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View Detail</a>
                                                    <a href="#" class="dropdown-item">Send</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" class="dropdown-item text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="product-detail.html" class="d-flex align-items-center">
                                                <img width="40" src="../../assets/media/image/products/product8.png"
                                                    class="rounded mr-3" alt="Desk">
                                                <span>Desk</span>
                                            </a>
                                        </td>
                                        <td>Frankie Hewitt</td>
                                        <td>$300</td>
                                        <td>
                                            <span class="badge bg-success-bright text-success">Remote payment
                                                accepted</span>
                                        </td>
                                        <td>2020/02/09</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-more-alt"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View Detail</a>
                                                    <a href="#" class="dropdown-item">Send</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" class="dropdown-item text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="product-detail.html" class="d-flex align-items-center">
                                                <img width="40" src="../../assets/media/image/products/product9.png"
                                                    class="rounded mr-3" alt="Night Light">
                                                <span>Night Light</span>
                                            </a>
                                        </td>
                                        <td>Hayden Fitzgerald</td>
                                        <td>$200</td>
                                        <td>
                                            <span class="badge bg-success-bright text-success">Delivered</span>
                                        </td>
                                        <td>2020/01/14</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-more-alt"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View Detail</a>
                                                    <a href="#" class="dropdown-item">Send</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" class="dropdown-item text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="product-detail.html" class="d-flex align-items-center">
                                                <img width="40" src="../../assets/media/image/products/product10.png"
                                                    class="rounded mr-3" alt="Shoe">
                                                <span>Shoe</span>
                                            </a>
                                        </td>
                                        <td>Cole Holcomb</td>
                                        <td>$700</td>
                                        <td>
                                            <span class="badge bg-secondary-bright text-secondary">On pre-order (not
                                                paid)</span>
                                        </td>
                                        <td>2020/02/28</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-more-alt"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">View Detail</a>
                                                    <a href="#" class="dropdown-item">Send</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" class="dropdown-item text-danger">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./ Content -->


            <!-- Footer -->
            <footer class="content-footer">
                <div>© 2025 Kelompok 4 - Mata Kuliah Sistem Pengambilan Keputusan Paralel C</div>
                <div>
                    <nav class="nav">
                        <a href="#" class="nav-link">Cynthia (045)</a>
                        <a href="#" class="nav-link">Fidyah (047)</a>
                        <a href="#" class="nav-link">Arya (067)</a>
                        <a href="#" class="nav-link">Raihana (068)</a>
                    </nav>
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

@include('layouts.tail')
