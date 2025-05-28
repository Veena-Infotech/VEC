<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>VEC Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .vec-navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
            padding: 0.8rem 1rem;
        }

        .vec-brand .title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #2c3e50;
            line-height: 1.2;
        }

        .vec-brand small {
            font-size: 0.8rem;
            color: #7f8c8d;
        }

        .vec-navbar .nav-link {
            font-weight: 500;
            color: #2c3e50 !important;
            transition: color 0.2s;
        }

        .vec-navbar .nav-link.active,
        .vec-navbar .nav-link:hover {
            color: #1abc9c !important;
        }

        .vec-subnav {
            background: #f8f9fa;
            border-top: 1px solid #dee2e6;
            padding: 0.75rem 1rem;
        }

        .vec-subnav .badge {
            padding: 0.6rem 1rem;
            font-size: 0.9rem;
            background-color: #ecf9f6;
            color: #1abc9c;
            border: 1px solid #c2f0e8;
            border-radius: 20px;
            transition: background 0.3s;
        }

        .vec-subnav .badge:hover {
            background-color: #d1f2eb;
            cursor: pointer;
        }

        .vec-tagline {
            text-align: center;
            font-size: 0.85rem;
            color: #7f8c8d;
            margin-top: 0.4rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .vec-navbar {
                padding: 0.5rem 1rem;
            }

            .vec-brand .title {
                font-size: 1.1rem;
            }

            .vec-brand small {
                font-size: 0.7rem;
            }

            .vec-subnav {
                padding: 0.5rem 1rem;
            }

            .vec-subnav .badge {
                padding: 0.4rem 0.8rem;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .vec-navbar {
                padding: 0.3rem 0.8rem;
            }

            .vec-brand .title {
                font-size: 1rem;
            }

            .vec-brand small {
                font-size: 0.6rem;
            }

            .vec-subnav {
                padding: 0.3rem 0.8rem;
            }

            .vec-subnav .badge {
                padding: 0.3rem 0.6rem;
                font-size: 0.7rem;
            }
        }
    </style>
</head>

<body>

    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center gap-2 vec-brand" href="#">
                <i class="bi bi-building text-primary fs-4"></i>
                <div>
                    <div class="title">VEC Real Estate Management</div>
                    <small>Veena Group Mumbai</small>
                </div>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Property
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Add Property</a></li>
                            <li><a class="dropdown-item" href="#">Manage Property </a></li>
                            <li><a class="dropdown-item" href="#"> Archive Property </a></li>
                            <li><a class="dropdown-item" href="#">Property Follow-Up</a></li>
                        </ul>
                    </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Customers
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Add Property</a></li>
                            <li><a class="dropdown-item" href="#">Manage Property </a></li>
                            <li><a class="dropdown-item" href="#"> Archive Property </a></li>
                            <li><a class="dropdown-item" href="#">Property Follow-Up</a></li>
                        </ul>
                    </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Agents
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Add Property</a></li>
                            <li><a class="dropdown-item" href="#">Manage Property </a></li>
                            <li><a class="dropdown-item" href="#"> Archive Property </a></li>
                            <li><a class="dropdown-item" href="#">Property Follow-Up</a></li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sub Navigation -->
    <div class="vec-subnav text-center">
        <div class="vec-tagline">
            Streamlining Properties, Customers & Agents Across Buy, Sell & Rent Lifecycles
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>