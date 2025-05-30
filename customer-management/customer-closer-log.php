<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Customer Closure Log</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body class="bg-body-tertiary">

  <div class="container py-5">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-primary text-white text-center">
        <h4 class="mb-0"><i class="bi bi-file-earmark-text me-2"></i>Customer Closure Log</h4>
      </div>

      <div class="card-body p-4">
        <form id="closureForm">

          <!-- Section: Property Info -->
          <div class="mb-4">
            <h5 class="text-secondary"><i class="bi bi-house-fill me-2"></i>Property Finalized</h5>
            <textarea class="form-control" rows="2" placeholder="Enter property matched and finalized details..." required></textarea>
          </div>

          <!-- Section: Transaction and Commission -->
          <div class="row g-4 mb-4">
            <div class="col-md-6">
              <label class="form-label fw-semibold"><i class="bi bi-currency-dollar me-1"></i>Final Transaction Value</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-cash-coin"></i></span>
                <input type="number" class="form-control" placeholder="Enter value" required />
              </div>
            </div>

            <div class="col-md-6">
              <label class="form-label fw-semibold"><i class="bi bi-person-vcard me-1"></i>Commission to Agent/Broker</label>
              <div class="input-group mb-2">
                <span class="input-group-text"><i class="bi bi-wallet2"></i></span>
                <input type="number" class="form-control" placeholder="Enter commission" />
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="includeTax" />
                <label class="form-check-label" for="includeTax">Include Tax (if applicable)</label>
              </div>
            </div>
          </div>

          <!-- Section: Services -->
          <div class="mb-4">
            <h5 class="text-secondary"><i class="bi bi-sliders2-vertical me-2"></i>Next Services Interested</h5>
            <div class="row">
              <div class="col-md-4">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="resaleService" />
                  <label class="form-check-label" for="resaleService">Resale</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="interiorService" />
                  <label class="form-check-label" for="interiorService">Interior</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="pmcService" />
                  <label class="form-check-label" for="pmcService">PMC</label>
                </div>
              </div>
            </div>
          </div>

          <!-- Section: Assign Agent -->
          <div class="mb-4 row align-items-end">
            <div class="col-md-6">
              <label class="form-label fw-semibold"><i class="bi bi-person-bounding-box me-1"></i>Assign to Agent</label>
              <select class="form-select" id="assignAgent" required>
                <option selected disabled>Select agent</option>
                <option>Agent A</option>
                <option>Agent B</option>
                <option>Agent C</option>
              </select>
            </div>
            <div class="col-md-6">
              <div id="assignAlert" class="alert alert-info d-none mb-0">
                <i class="bi bi-check-circle me-1"></i>Assigned successfully. CRM & Task Module triggered.
              </div>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="row pt-3 border-top">
            <div class="col-12 col-md-6 mb-2 mb-md-0">
              <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-send-check me-1"></i>Submit & Trigger CRM
              </button>
            </div>
            <div class="col-12 col-md-6">
              <button type="button" class="btn btn-outline-dark w-100" id="downloadPDF">
                <i class="bi bi-filetype-pdf me-1"></i>Download Closure Log
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Interaction Logic -->
  <script>
    document.getElementById("assignAgent").addEventListener("change", () => {
      document.getElementById("assignAlert").classList.remove("d-none");
    });

    document.getElementById("closureForm").addEventListener("submit", function(e) {
      e.preventDefault();
      alert("Closure log saved and CRM + Task system triggered.");
    });

    document.getElementById("downloadPDF").addEventListener("click", function() {
      alert("PDF download initiated. (To implement: use html2pdf.js or similar)");
    });
  </script>

</body>

</html>