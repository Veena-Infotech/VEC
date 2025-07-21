<!-- dashboard.php -->
<?php
$pageTitle = 'View Property';
$showSidebar = false;

ob_start();
?>
<main class="flex-1 p-6">
        <h1>Welcome to View property</h1>
    </main>
<?php
$content = ob_get_clean();

include '../../Controllers/layout.php';
