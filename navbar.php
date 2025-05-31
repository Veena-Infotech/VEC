<!-- navbar.php -->
<nav class="navbar navbar-expand-lg bg-body-tertiary py-2">
    <div class="container-fluid w-100 d-flex justify-content-evenly align-items-center flex-wrap px-0">

        <!-- Left: Logo -->
        <div class="vec-logo">
            <a class="navbar-brand d-flex align-items-center gap-2 vec-brand" href="/VEC/index.php">
                <i class="bi bi-building text-primary fs-4"></i>
                <div class="d-flex flex-column lh-sm">
                    <span class="fw-semibold">VEC Real Estate Management</span>
                    <small class="text-muted">Veena Group Mumbai</small>
                </div>
            </a>
        </div>
        <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Right: Dropdowns and Toggler -->
        <div class="d-flex align-items-center">
            <!-- Toggler (hamburger) -->


            <!-- Collapsible Menu -->
            <div class="collapse navbar-collapse text-start" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 gap-lg-4 gap-3">
                    <!-- Property Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Property
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="/VEC/property-management/add-property-page.php">Add Property</a></li>
                            <li><a class="dropdown-item" href="/VEC/property-management/manage-property-page.php">Manage Property</a></li>
                            <li><a class="dropdown-item" href="/VEC/property-management/archive-property-page.php">Archive Property</a></li>
                            <li><a class="dropdown-item" href="/VEC/property-management/follow-up-page.php">Property Follow-Up</a></li>
                        </ul>
                    </li>

                    <!-- Customers Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Customers
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/VEC/customer-management/add-customer.php">Add Customer</a></li>
                            <li><a class="dropdown-item" href="/VEC/customer-management/manage-customer.php">Manage Customers</a></li>
                            <li><a class="dropdown-item" href="/VEC/customer-management/customer-closer-log.php">Customer Closure Log</a></li>
                        </ul>
                    </li>

                    <!-- Agents Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Agents
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/VEC/agent-broker-management/add-agent-page.php">Add Agent</a></li>
                            <li><a class="dropdown-item" href="/VEC/agent-broker-management/agent-linked-property.php">Agent Properties</a></li>
                            <li><a class="dropdown-item" href="/VEC/agent-broker-management/client-ref-log.php">Client Referrals</a></li>
                            <li><a class="dropdown-item" href="/VEC/agent-broker-management/commission-manage.php">Commission and Agreements Logs</a></li>
                        </ul>
                    </li>

                    <!---Meeting followup-->
                    <li class="nav-item ">
                        <a class="nav-link " href="/VEC/meeting-followup/meeting-follow.php"
                            aria-expanded="false">
                            Meetings & Follow-Up
                        </a>

                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Optional Navbar Styling -->
<style>
    .dropdown-menu {
        min-width: 12rem;
    }

    @media (max-width: 768px) {
        .container-fluid {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .vec-brand .bi {
            font-size: 1.2rem !important;
        }

        .vec-brand span {
            font-size: 0.9rem;
        }

        .vec-brand small {
            font-size: 0.7rem;
        }
    }
</style>