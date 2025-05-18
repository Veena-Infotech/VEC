<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>

<body class="bg-body-tertiary">

    <div class="container py-5">
        <h1 class="mb-4 text-dark fw-bold text-center">Manage Customer</h1>

        <!-- Filter Card -->
        <div class="card shadow-sm mb-4 border-muted bg-white">
            <div class="card-header bg-light text-dark fw-semibold border-bottom border-muted">
                Search & Filter Customers
            </div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-3">
                        <label for="filterType" class="form-label text-secondary">Type</label>
                        <select id="filterType" class="form-select border-muted">
                            <option value="" selected>All Types</option>
                            <option>Buyer</option>
                            <option>Seller</option>
                            <option>Investor</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="filterBudget" class="form-label text-secondary">Budget</label>
                        <select id="filterBudget" class="form-select border-muted">
                            <option value="" selected>All Budgets</option>
                            <option>&lt; $100,000</option>
                            <option>$100,000 - $500,000</option>
                            <option>&gt; $500,000</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="filterLocation" class="form-label text-secondary">Location</label>
                        <select id="filterLocation" class="form-select border-muted">
                            <option value="" selected>All Locations</option>
                            <option>New York</option>
                            <option>San Francisco</option>
                            <option>Miami</option>
                        </select>
                    </div>
                    <div class="col-md-3 d-flex align-items-end">
                        <button type="button" id="btnFilter" class="btn btn-outline-dark w-100">Apply Filters</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Customer Info Card -->
        <div class="card shadow-sm mb-4 border-muted bg-white" id="customerCard">
            <div class="card-header d-flex justify-content-between align-items-center bg-light text-dark fw-semibold border-bottom border-muted">
                <span>Customer: <strong>John Doe</strong></span>
                <select id="statusSelect" class="form-select form-select-sm w-auto border-muted">
                    <option value="Looking" selected>Looking</option>
                    <option value="On Hold">On Hold</option>
                    <option value="Closed Deal">Closed Deal</option>
                </select>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <button id="btnMatchProperties" class="btn btn-outline-dark">Match with Property Listings</button>

                    <div class="d-flex align-items-center gap-2">
                        <label for="assignAgent" class="mb-0 text-secondary">Assign Sales Agent:</label>
                        <select id="assignAgent" class="form-select form-select-sm border-muted" style="width: 200px;">
                            <option selected disabled>Select Agent</option>
                            <option>Agent A</option>
                            <option>Agent B</option>
                            <option>Agent C</option>
                        </select>
                    </div>
                </div>

                <!-- Notes -->
                <h5 class="text-secondary">Follow-up Notes</h5>
                <div id="notesList" class="bg-light border border-muted rounded p-3 mb-3" style="max-height: 180px; overflow-y: auto;"></div>

                <div class="input-group">
                    <input type="text" id="noteInput" class="form-control border-muted" placeholder="Add a follow-up note..." />
                    <button id="addNoteBtn" class="btn btn-outline-dark" type="button">Add Note</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        gsap.from("h1", {
            duration: 1,
            y: -40,
            opacity: 0,
            ease: "power2.out"
        });
        gsap.from(".card", {
            duration: 0.8,
            opacity: 0,
            y: 20,
            stagger: 0.2,
            delay: 0.3
        });

        const notesList = document.getElementById("notesList");
        const addNoteBtn = document.getElementById("addNoteBtn");
        const noteInput = document.getElementById("noteInput");

        function addNote() {
            const text = noteInput.value.trim();
            if (!text) return;

            const timestamp = new Date().toLocaleString();
            const noteItem = document.createElement("div");
            noteItem.className = "border border-muted rounded bg-white p-2 mb-2";
            noteItem.innerHTML = `
        <div class="d-flex justify-content-between">
          <div class="text-secondary">${text}</div>
          <small class="text-muted">${timestamp}</small>
        </div>
      `;

            notesList.prepend(noteItem);
            noteInput.value = "";
            gsap.from(noteItem, {
                duration: 0.5,
                opacity: 0,
                y: 20
            });
        }

        addNoteBtn.addEventListener("click", addNote);
        noteInput.addEventListener("keypress", e => {
            if (e.key === "Enter") addNote();
        });

        document.getElementById("btnFilter").addEventListener("click", () => {
            gsap.to("#customerCard", {
                duration: 0.3,
                scale: 1.02,
                yoyo: true,
                repeat: 1
            });
            alert("Filters applied (demo)");
        });

        document.getElementById("btnMatchProperties").addEventListener("click", () => {
            gsap.to("#btnMatchProperties", {
                scale: 1.1,
                duration: 0.2,
                yoyo: true,
                repeat: 1
            });
            alert("Matching properties (demo)");
        });

        document.getElementById("statusSelect").addEventListener("change", function() {
            alert(`Status updated to "${this.value}" (demo)`);
        });

        document.getElementById("assignAgent").addEventListener("change", function() {
            alert(`Assigned to "${this.value}" (demo)`);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>