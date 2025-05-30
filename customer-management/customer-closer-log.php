<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Customer Closure Log</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body class="bg-light">

<div class="container py-5">
  <div class="card shadow-sm border-0">
    <div class="card-header bg-white border-bottom text-center">
      <h5 class="mb-0 fw-semibold"><i class="bi bi-journal-text me-2"></i>Customer Closure Log</h5>
    </div>

    <div class="card-body p-4">
      <form id="closureForm" novalidate>

        <!-- Property Details -->
        <div class="mb-4">
          <label class="form-label fw-semibold"><i class="bi bi-building-fill-check me-2"></i>Property Finalized</label>
          <textarea class="form-control" rows="2" placeholder="Details of finalized property" required></textarea>
        </div>

        <!-- Transaction & Commission -->
        <div class="row g-3 mb-4">
          <div class="col-md-6">
            <label class="form-label fw-semibold">Final Transaction Value</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-cash"></i></span>
              <input type="number" class="form-control" placeholder="Transaction Amount" required>
            </div>
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold">Agent/Broker Commission</label>
            <div class="input-group mb-2">
              <span class="input-group-text"><i class="bi bi-wallet2"></i></span>
              <input type="number" class="form-control" placeholder="Commission Amount">
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="taxToggle">
              <label class="form-check-label" for="taxToggle">Include Tax (if applicable)</label>
            </div>
          </div>
        </div>

        <!-- Next Services Interest -->
        <div class="mb-4">
          <label class="form-label fw-semibold">Next Services Interested</label>
          <div class="row">
            <div class="col-md-4">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="resaleToggle">
                <label class="form-check-label" for="resaleToggle">Resale</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="interiorToggle">
                <label class="form-check-label" for="interiorToggle">Interior</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="pmcToggle">
                <label class="form-check-label" for="pmcToggle">PMC</label>
              </div>
            </div>
          </div>
        </div>

        <!-- Agent Assignment -->
        <div class="row mb-4 align-items-end">
          <div class="col-md-6">
            <label class="form-label fw-semibold">Assign Agent</label>
            <select class="form-select" id="assignAgent" required>
              <option selected disabled value="">Select agent</option>
              <option>Agent A</option>
              <option>Agent B</option>
              <option>Agent C</option>
            </select>
          </div>
          <div class="col-md-6">
            <div id="assignAlert" class="alert alert-info d-none mb-0">
              <i class="bi bi-check-circle me-1"></i>Assigned! CRM & Task module triggered.
            </div>
          </div>
        </div>

        <!-- Buttons -->
        <div class="row pt-3 border-top">
          <div class="col-md-6 mb-3 mb-md-0">
            <button type="submit" class="btn btn-success w-100">
              <i class="bi bi-check2-circle me-1"></i>Submit & Trigger CRM
            </button>
          </div>
          <div class="col-md-6">
            <button type="button" id="downloadPDF" class="btn btn-outline-dark w-100">
              <i class="bi bi-filetype-pdf me-1"></i>Download Closure Log
            </button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Interactions -->
<script>
  // Show alert on agent assignment
  document.getElementById("assignAgent").addEventListener("change", () => {
    document.getElementById("assignAlert").classList.remove("d-none");
  });

  // Form submit triggers CRM logic
  document.getElementById("closureForm").addEventListener("submit", function (e) {
    e.preventDefault();
    alert("Closure log submitted. CRM and Task module triggered.");
  });

  // Simulated PDF download
  document.getElementById("downloadPDF").addEventListener("click", () => {
    alert("PDF download initiated. (To implement: use html2pdf.js or similar)");
  });
</script>

</body>
</html>
