<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <title><?= $pageTitle ?? 'My App' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-base-100">

    <?php if (!empty($showSidebar)): ?>
        <div class="drawer lg:drawer-open">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col">
                <!-- ✅ Top bar with hamburger and theme toggle -->
                <div class="w-full navbar bg-base-200 px-4">
                    <div class="flex-none lg:hidden">
                        <label for="my-drawer-2" class="btn btn-ghost btn-square drawer-button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </label>
                    </div>
                    <div class="flex-1">
                        <span class="text-xl font-semibold"><?= $pageTitle ?? 'My App' ?></span>
                    </div>
                    <div class="flex-none flex items-center gap-4">
                        <!-- ✅ Notification Bell -->
                        <button class="btn btn-ghost btn-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>

                        <!-- ✅ Profile/User Icon -->
                        <button class="btn btn-ghost btn-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A10.971 10.971 0 0112 15c2.5 0 4.778.83 6.879 2.222M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>

                        <!-- ✅ Theme toggle -->
                        <label class="swap swap-rotate">
                            <input type="checkbox" id="themeToggle" />
                            <!-- Sun icon -->
                            <svg class="swap-on fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M5.64 17.66L4.22 19.07 5.64 20.49 7.05 19.07 5.64 17.66zM1 13h3v-2H1v2zm10 10h2v-3h-2v3zm9-10v2h3v-2h-3zm-3.36-6.34l1.41-1.41L17.66 2.36 16.24 3.77 17.64 5.18zM12 7a5 5 0 100 10 5 5 0 000-10zm5 12.95l1.41 1.41 1.41-1.41-1.41-1.41-1.41 1.41zM4.22 4.93l1.41 1.41L7.05 4.93 5.64 3.51 4.22 4.93z" />
                            </svg>
                            <!-- Moon icon -->
                            <svg class="swap-off fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M21.75 15.5A9 9 0 1112.5 2.25 7.5 7.5 0 0021.75 15.5z" />
                            </svg>
                        </label>
                    </div>

                </div>

                <!-- ✅ Main content -->
                <main class="p-6">
                    <?= $content ?>
                </main>
            </div>

            <!-- ✅ Sidebar -->
            <div class="drawer-side">
                <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
                <div class="flex justify-center p-4">
                    <h3>LOGO</h3>
                </div>
                <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
                    <li>
                    <li>
                        <a href="/VEC/App/Components/dashboard.php">Dashboard</a>
                    </li>
                    </li>

                    <!-- Sidebar Item 1 with submenu -->
                    <li>
                        <details open>
                            <summary>Property</summary>
                            <ul>
                                <li> <a href="/VEC-Development/App/Views/Buy/addProperty.php">Add Property</a></li>
                                <li><a href="/VEC-Development/App/Views/Buy/addLuxuryProperty.php">Add Luxury Property</a></li>
                                 <li><a href="/VEC-Development/App/Views/Buy/viewProperty.php">View Property</a></li>
                            </ul>
                        </details>
                    </li>

                    <!-- Sidebar Item 2 with submenu -->
                    <li>
                        <details>
                            <summary>Sidebar Item 2</summary>
                            <ul>
                                <li><a href="#">Subitem A</a></li>
                                <li><a href="#">Subitem B</a></li>
                            </ul>
                        </details>
                    </li>
                </ul>

            </div>
        </div>
    <?php else: ?>
        <!-- ✅ No sidebar layout -->
        <main class="p-6">
            <?= $content ?>
        </main>
    <?php endif; ?>

    <!-- ✅ Theme toggle script -->
    <script>
        const themeToggle = document.getElementById('themeToggle');
        const htmlEl = document.documentElement;

        // On load: Set theme from localStorage
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            htmlEl.setAttribute('data-theme', 'dark');
            themeToggle.checked = true;
        } else {
            htmlEl.setAttribute('data-theme', 'light');
            themeToggle.checked = false;
        }

        // On toggle: Save and apply theme
        themeToggle.addEventListener('change', () => {
            const theme = themeToggle.checked ? 'dark' : 'light';
            htmlEl.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme);
        });
    </script>

</body>

</html>