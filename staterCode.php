<!-- dashboard.php -->
<?php
$pageTitle = 'Add Property';
$showSidebar = true;

ob_start();
?>
<main class="flex-1 p-6">
        <h1>Welcome to Add property</h1>
    </main>
<?php
$content = ob_get_clean();

include '../../Controllers/layout.php';
