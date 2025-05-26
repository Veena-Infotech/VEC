<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>VEC Module Header Component</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        /* Reset and base */
        body,
        h1,
        h2,
        h3,
        ul,
        li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fbfc;
            color: #2c3e50;
        }

        /* Header container */
        .vec-header {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 1.4rem 2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            user-select: none;
        }

        /* Title section */
        .vec-header .title-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .vec-header .title-main {
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .vec-header .title-sub {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1abc9c;
            margin-left: 8px;
            white-space: nowrap;
        }

        /* Tagline */
        .vec-header .tagline {
            margin-top: 0.25rem;
            font-weight: 400;
            font-size: 1rem;
            text-align: center;
            color: #bdc3c7;
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.4;
        }

        /* Navigation tabs container */
        .vec-nav {
            margin-top: 1.2rem;
            display: flex;
            justify-content: center;
            border-top: 1.5px solid #34495e;
            padding-top: 0.8rem;
            gap: 2.5rem;
            flex-wrap: wrap;
        }

        /* Each primary nav tab */
        .vec-nav>.nav-item {
            font-weight: 600;
            font-size: 1.05rem;
            color: #ecf0f1;
            cursor: pointer;
            position: relative;
            transition: color 0.3s ease;
        }

        .vec-nav>.nav-item:hover,
        .vec-nav>.nav-item.active {
            color: #1abc9c;
        }

        .vec-nav>.nav-item::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 0%;
            height: 3px;
            background: #1abc9c;
            transition: width 0.3s ease;
        }

        .vec-nav>.nav-item:hover::after,
        .vec-nav>.nav-item.active::after {
            width: 100%;
        }

        /* Submenu container */
        .vec-subnav {
            margin-top: 0.5rem;
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            font-weight: 400;
            font-size: 0.9rem;
            color: #95a5a6;
            flex-wrap: wrap;
        }

        .vec-subnav>.subnav-group {
            display: flex;
            gap: 0.8rem;
            padding: 0.25rem 0.5rem;
            border-radius: 6px;
            background: #34495e;
            white-space: nowrap;
        }

        .vec-subnav>.subnav-group>span {
            color: #1abc9c;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <header class="vec-header" role="banner" aria-label="VEC module header">
        <div class="title-row" aria-label="Application Title and Group">
            <div class="title-main" tabindex="0">VEC Real Estate Management</div>
            <div class="title-sub" tabindex="0">Veena Group Mumbai</div>
        </div>
        <div class="tagline" tabindex="0">
            Streamlining Properties, Customers &amp; Agents Across Buy, Sell &amp; Rent Lifecycles
        </div>
        <nav class="vec-nav" aria-label="Primary navigation tabs">
            <div class="nav-item active" tabindex="0" aria-current="page" aria-controls="property-subnav">Property</div>
            <div class="nav-item" tabindex="0" aria-controls="customers-subnav">Customers</div>
            <div class="nav-item" tabindex="0" aria-controls="agents-subnav">Agents</div>
        </nav>
        <div class="vec-subnav" aria-label="Sub navigation for selected tab">
            <div class="subnav-group" id="property-subnav" style="display: flex;">
                <span>Add Property</span><span>Manage Property</span><span>Archive Property</span><span>Property Follow-Up</span>
            </div>
            <div class="subnav-group" id="customers-subnav" style="display: none;">
                <span>Add Customer</span><span>Update Customer</span><span>Customer Match Tracking</span><span>Status Updates</span>
            </div>
            <div class="subnav-group" id="agents-subnav" style="display: none;">
                <span>Add Agent</span><span>Agent Properties</span><span>Client Referrals</span><span>Commission &amp; Agreement Logs</span>
            </div>
        </div>
    </header>

    <script>
        // Simple tab switcher for nav and subnav groups
        const navItems = document.querySelectorAll('.vec-nav > .nav-item');
        const subnavGroups = document.querySelectorAll('.vec-subnav > .subnav-group');

        navItems.forEach(item => {
            item.addEventListener('click', () => {
                // Remove active from all nav items
                navItems.forEach(i => i.classList.remove('active'));
                // Hide all subnav
                subnavGroups.forEach(g => g.style.display = 'none');

                // Activate clicked tab
                item.classList.add('active');
                // Show corresponding subnav group by aria-controls
                const targetId = item.getAttribute('aria-controls');
                if (targetId) {
                    const targetGroup = document.getElementById(targetId);
                    if (targetGroup) {
                        targetGroup.style.display = 'flex';
                    }
                }
            });
            item.addEventListener('keydown', e => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    item.click();
                }
            });
        });
    </script>

</body>

</html>