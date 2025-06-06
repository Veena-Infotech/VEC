<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manage Customer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

</head>

<body class="bg-body-tertiary">
  <?php include '../navbar.php'; ?>
  <div class="container py-5">
    <h1 class="mb-4 text-dark fw-bold text-center">Manage Customer</h1>

    <!-- Filter Card -->
    <div class="card shadow-sm mb-4 border-muted bg-white">
      <div class="card-header bg-light text-dark fw-semibold border-bottom border-muted">
        Search & Filter Customers
      </div>
      <div class="card-body">
        <form class="row g-3" name="filterForm">
          <div class="col-md-3">
            <label for="filterType" class="form-label text-secondary">Type</label>
            <select id="filterType" name="filterType" class="form-select border-muted">
              <option value="" selected>All Types</option>
              <option value="Buyer">Buyer</option>
              <option value="Seller">Seller</option>
              <option value="Investor">Investor</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="filterBudget" class="form-label text-secondary">Budget</label>
            <select id="filterBudget" name="filterBudget" class="form-select border-muted">
              <option value="" selected>All Budgets</option>
              <option value="low">&lt; $100,000</option>
              <option value="medium">$100,000 - $500,000</option>
              <option value="high">&gt; $500,000</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="filterLocation" class="form-label text-secondary">Location</label>
            <select id="filterLocation" name="filterLocation" class="form-select border-muted">
              <option value="" selected>All Locations</option>
              <option value="New York">New York</option>
              <option value="San Francisco">San Francisco</option>
              <option value="Miami">Miami</option>
            </select>
          </div>
          <div class="col-md-3 d-flex align-items-end">
            <button type="button" id="btnFilter" class="btn btn-outline-dark w-100">Apply Filters</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Customer Info Section -->
    <div id="customerContainer"></div>
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

    const customerContainer = document.getElementById("customerContainer");

    // Sample customer data
    const customers = [{
        name: "John Doe",
        type: "Buyer",
        budget: "medium",
        location: "New York",
        status: "Looking",
        agent: "Agent A"
      },
      {
        name: "Jane Smith",
        type: "Seller",
        budget: "high",
        location: "San Francisco",
        status: "On Hold",
        agent: "Agent B"
      },
      {
        name: "Ali Khan",
        type: "Investor",
        budget: "low",
        location: "Miami",
        status: "Closed Deal",
        agent: "Agent C"
      }
    ];

    function renderCustomers(filteredCustomers) {
      customerContainer.innerHTML = "";

      if (filteredCustomers.length === 0) {
        customerContainer.innerHTML = `<div class="alert alert-warning">No matching customers found.</div>`;
        return;
      }

      filteredCustomers.forEach((customer, index) => {
        const card = document.createElement("div");
        card.className = "card shadow-sm mb-4 border-muted bg-white";

        const noteInputId = `noteInput-${index}`;
        const notesListId = `notesList-${index}`;
        const addNoteBtnId = `addNoteBtn-${index}`;

        card.innerHTML = `
      <div class="card-header d-flex justify-content-between align-items-center bg-light text-dark fw-semibold border-bottom border-muted">
        <span>Customer: <strong>${customer.name}</strong></span>
        <select class="form-select form-select-sm w-auto border-muted">
          <option${customer.status === "Looking" ? " selected" : ""}>Looking</option>
          <option${customer.status === "On Hold" ? " selected" : ""}>On Hold</option>
          <option${customer.status === "Closed Deal" ? " selected" : ""}>Closed Deal</option>
        </select>
      </div>
      <div class="card-body">
        <p class="mb-2 text-secondary">Type: ${customer.type}</p>
        <p class="mb-2 text-secondary">Budget: ${customer.budget}</p>
        <p class="mb-2 text-secondary">Location: ${customer.location}</p>

        <div class="d-flex align-items-center gap-2 mb-3">
          <label class="text-secondary mb-0">Assigned Agent:</label>
          <select class="form-select form-select-sm border-muted" style="width: 200px;">
            <option ${customer.agent === "Agent A" ? "selected" : ""}>Agent A</option>
            <option ${customer.agent === "Agent B" ? "selected" : ""}>Agent B</option>
            <option ${customer.agent === "Agent C" ? "selected" : ""}>Agent C</option>
          </select>
        </div>

        <h6 class="text-secondary">Follow-up Notes</h6>
        <div id="${notesListId}" class="bg-light border border-muted rounded p-3 mb-3" style="max-height: 180px; overflow-y: auto;"></div>

        <div class="input-group">
          <input type="text" id="${noteInputId}" class="form-control border-muted" placeholder="Add a follow-up note..." />
          <button id="${addNoteBtnId}" class="btn btn-outline-dark" type="button">Add Note</button>
        </div>
      </div>
    `;

        customerContainer.appendChild(card);

        // Set up note functionality per customer card
        const noteInput = card.querySelector(`#${noteInputId}`);
        const notesList = card.querySelector(`#${notesListId}`);
        const addNoteBtn = card.querySelector(`#${addNoteBtnId}`);

        const addNote = () => {
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
        };

        addNoteBtn.addEventListener("click", addNote);
        noteInput.addEventListener("keypress", e => {
          if (e.key === "Enter") addNote();
        });

        gsap.from(card, {
          duration: 0.4,
          opacity: 0,
          y: 20
        });
      });
    }


    document.getElementById("btnFilter").addEventListener("click", () => {
      const type = document.getElementById("filterType").value;
      const budget = document.getElementById("filterBudget").value;
      const location = document.getElementById("filterLocation").value;

      const filtered = customers.filter(c =>
        (type === "" || c.type === type) &&
        (budget === "" || c.budget === budget) &&
        (location === "" || c.location === location)
      );

      renderCustomers(filtered);
    });

    // Initial render
    renderCustomers(customers);
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <?php include '../footer.php'; ?>

</body>

</html>