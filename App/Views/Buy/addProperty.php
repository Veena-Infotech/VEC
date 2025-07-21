<?php
$pageTitle = 'Add Property';
$showSidebar = true;
ob_start();
?>

<main class="flex-1 p-6">
    <h1 class="text-2xl font-bold mb-6">Add Property</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Property Type Dropdown -->
        <div class="relative">
            <button onclick="toggleDropdown('propertyType')" class="btn w-full">Property Type</button>
            <div id="propertyType" class="hidden absolute z-10 mt-2 w-full bg-white rounded shadow border">
                <?php foreach (['1 BHK', '2 BHK', '3 BHK', '4 BHK', '5 BHK'] as $type): ?>
                    <button class="block w-full px-4 py-2 text-left hover:bg-gray-100"><?= $type ?></button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Transaction Type Dropdown -->
        <div class="relative">
            <button onclick="toggleDropdown('transactionType')" class="btn w-full">Transaction Type</button>
            <div id="transactionType" class="hidden absolute z-10 mt-2 w-full bg-white rounded shadow border">
                <button class="block w-full px-4 py-2 text-left hover:bg-gray-100">Sell</button>
                <button class="block w-full px-4 py-2 text-left hover:bg-gray-100">Rent</button>
            </div>
        </div>

        <div>
            <label class="label">Locality (Ward-based Mumbai regions)</label>
            <input type="text" class="input input-bordered w-full" placeholder="Type here" />
        </div>

        <div>
            <label class="label">Full Address</label>
            <textarea class="textarea textarea-bordered w-full h-24" placeholder="Full address..."></textarea>
        </div>

        <div>
            <label class="label">Pincode</label>
            <input type="number" class="input input-bordered w-full" placeholder="Type here" />
        </div>

        <div>
            <label class="label">Landmark</label>
            <input type="text" class="input input-bordered w-full" placeholder="Type here" />
        </div>

        <div>
            <label class="label">Carpet Area</label>
            <input type="text" class="input input-bordered w-full" placeholder="In sq ft" />
        </div>

        <div>
            <label class="label">Build Up Area</label>
            <input type="text" class="input input-bordered w-full" placeholder="In sq ft" />
        </div>

        <div>
            <label class="label">Plot Area</label>
            <input type="text" class="input input-bordered w-full" placeholder="In sq ft" />
        </div>

        <div>
            <label class="label">Price</label>
            <input type="text" class="input input-bordered w-full" placeholder="In ₹" />
        </div>

        <div class="flex items-center space-x-4">
            <span>Negotiable</span>
            <input type="checkbox" class="toggle toggle-primary" />
        </div>

        <!-- Amenities Dropdown -->
        <div class="relative">
            <button onclick="toggleDropdown('amenities')" class="btn w-full">Amenities</button>
            <div id="amenities" class="hidden absolute z-10 mt-2 w-full bg-white rounded shadow border">
                <?php foreach (['Gym', 'Swimming Pool', 'Turf', 'Balcony', 'Parking', 'Spa'] as $amenity): ?>
                    <button class="block w-full px-4 py-2 text-left hover:bg-gray-100"><?= $amenity ?></button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Source Dropdown -->
        <div class="relative">
            <button onclick="toggleDropdown('source')" class="btn w-full">Source</button>
            <div id="source" class="hidden absolute z-10 mt-2 w-full bg-white rounded shadow border">
                <button class="block w-full px-4 py-2 text-left hover:bg-gray-100">Direct Client</button>
                <button class="block w-full px-4 py-2 text-left hover:bg-gray-100">Agent</button>
            </div>
        </div>

        <!-- File Uploads -->
        <div>
            <label class="label">Photos Upload</label>
            <input type="file" class="file-input file-input-bordered w-full" />
            <span class="text-sm text-gray-500">Max size 2MB</span>
        </div>

        <div>
            <label class="label">Document Upload</label>
            <input type="file" class="file-input file-input-bordered w-full" />
            <span class="text-sm text-gray-500">Max size 2MB</span>
        </div>
    </div>

    <div class="mt-6 flex justify-end">
        <button class="btn btn-primary">Submit</button>
    </div>
</main>

<!-- Script for Dropdowns -->
<script>
function toggleDropdown(id) {
    const el = document.getElementById(id);
    document.querySelectorAll('.dropdown > div').forEach(drop => {
        if (drop.id !== id) drop.classList.add('hidden');
    });
    el.classList.toggle('hidden');
}

document.addEventListener('click', function (e) {
    const isDropdownBtn = e.target.closest("button[onclick^='toggleDropdown']");
    const dropdowns = document.querySelectorAll(".dropdown > div");

    if (!isDropdownBtn) {
        dropdowns.forEach(el => el.classList.add("hidden"));
    }
});
</script>

<?php
$content = ob_get_clean();
include '../../Controllers/layout.php';
?>
