<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Agent Linked Properties</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- GSAP -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
</head>

<body class="bg-body-tertiary">
  <?php include '../navbar.php'; ?>

  <div class="container py-5">
    <!-- Header Card -->
    <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-2">
      <h3 class="card-title fw-bold mb-0" id="pageTitle">
        <i class="bi bi-house-door-fill me-2"></i>
        Agent Linked Properties
      </h3>
      <div class="d-flex align-items-center gap-2">
        <div class="d-flex align-items-center gap-2">
          <input type="text" class="form-control" placeholder="Search..." id="searchInput" name="searchInput" />

        </div>
        <div>
          <a href="/VEC/property-management/add-property-page.php">
            <button class="btn btn-outline-secondary btn-md" id="addPropertyBtn">
              Add Property
            </button>
          </a>
        </div>
      </div>
    </div>

    <!-- Properties Table Card -->
    <div class="card border-0 mt-2">
      <div class="card-header fw-semibold sticky-top">
        Linked Property List
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-hover align-middle mb-0 text-center" id="propertyTableBody">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Property Name</th>
                <th>Status</th>
                <th>Lead Source</th>
              </tr>
            </thead>
            <tbody id="tableBody">
              <tr>
                <th scope="row">1</th>
                <td>Sunset Villa</td>
                <td><span class="badge rounded-pill px-3 border text-dark">Completed</span></td>
                <td>Facebook Ads</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Downtown Loft</td>
                <td><span class="badge rounded-pill px-3 border text-dark">Pending</span></td>
                <td>Referral</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Dubai Loft</td>
                <td><span class="badge rounded-pill px-3 border text-dark">Approved</span></td>
                <td>Reference</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Downtown City</td>
                <td><span class="badge rounded-pill px-3 border text-dark">Done</span></td>
                <td>Instagram</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Khoparkhanaire City</td>
                <td><span class="badge rounded-pill px-3 border text-dark">Done</span></td>
                <td>Instagram</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Versova City</td>
                <td><span class="badge rounded-pill px-3 border text-dark">Done</span></td>
                <td>Instagram</td>
              </tr>
              <!-- Add more rows here -->
            </tbody>

          </table>
          <!-- Pagination -->
          <div class="d-flex justify-content-end mt-4">
            <nav aria-label="Page navigation">
              <ul class="pagination" id="pagination"></ul>
            </nav>
          </div>

        </div>
      </div>
    </div>



  </div>

  <!-- Bootstrap JS Bundle and Tooltips -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  <!-- GSAP Animations -->
  <script>
    gsap.from("#pageTitle", {
      duration: 1,
      y: -40,
      opacity: 0,
      ease: "power4.out"
    });

    gsap.from("#addPropertyBtn", {
      duration: 1,
      x: 100,
      opacity: 0,
      ease: "power2.out",
      delay: 0.3
    });

    gsap.from("table tbody tr", {
      duration: 0.6,
      opacity: 0,
      y: 20,
      stagger: 0.2,
      delay: 0.6
    });
  </script>
  <script>
    const rowsPerPage = 5;
    let currentPage = 1;

    const tableBody = document.getElementById('tableBody');
    const allRows = Array.from(tableBody.querySelectorAll('tr'));
    const searchInput = document.getElementById('searchInput');
    const pagination = document.getElementById('pagination');

    function filterRows(query) {
      return allRows.filter(row => {
        return Array.from(row.cells).some(cell =>
          cell.textContent.toLowerCase().includes(query.toLowerCase())
        );
      });
    }

    function renderTable(filteredRows) {
      tableBody.innerHTML = '';
      const start = (currentPage - 1) * rowsPerPage;
      const paginatedRows = filteredRows.slice(start, start + rowsPerPage);
      paginatedRows.forEach(row => tableBody.appendChild(row));
    }

    function renderPagination(filteredRows) {
      pagination.innerHTML = '';
      const pageCount = Math.ceil(filteredRows.length / rowsPerPage);

      const createPageItem = (text, disabled = false, active = false) => {
        const li = document.createElement('li');
        li.className = `page-item ${disabled ? 'disabled' : ''} ${active ? 'active' : ''}`;
        li.innerHTML = `<a class="page-link rounded-pill px-3 mx-1" href="#">${text}</a>`;
        return li;
      };

      const prev = createPageItem('«', currentPage === 1);
      prev.addEventListener('click', (e) => {
        e.preventDefault();
        if (currentPage > 1) {
          currentPage--;
          updateTable();
        }
      });
      pagination.appendChild(prev);

      for (let i = 1; i <= pageCount; i++) {
        const page = createPageItem(i, false, currentPage === i);
        page.addEventListener('click', (e) => {
          e.preventDefault();
          currentPage = i;
          updateTable();
        });
        pagination.appendChild(page);
      }

      const next = createPageItem('»', currentPage === pageCount);
      next.addEventListener('click', (e) => {
        e.preventDefault();
        if (currentPage < pageCount) {
          currentPage++;
          updateTable();
        }
      });
      pagination.appendChild(next);
    }

    function updateTable() {
      const query = searchInput.value.trim();
      const filteredRows = filterRows(query);
      const totalPages = Math.ceil(filteredRows.length / rowsPerPage);

      if (currentPage > totalPages) currentPage = 1;

      renderTable(filteredRows);
      renderPagination(filteredRows);
    }

    searchInput.addEventListener('input', () => {
      currentPage = 1;
      updateTable();
    });

    // Initial render
    updateTable();
  </script>


  <?php include '../footer.php'; ?>

</body>

</html>