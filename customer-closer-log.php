<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Customer Closure Log</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- GSAP for animations -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <!-- jsPDF for PDF generation -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>

<body>

  <div class="container py-4">
    <!-- Header -->
    <header class="text-center mb-4">
      <h1 class="display-6 fw-bold">Customer Closure Log</h1>
      <p class="text-muted fst-italic">Capture final transactions, commissions, and future service interests clearly</p>
    </header>

    <main class="row gx-4">
      <!-- Left Column: Form -->
      <section class="col-lg-7 mb-4">
        <form id="closureForm" class="card p-4 shadow-sm">
          <!-- Property & Transaction Section -->
          <div class="mb-4">
            <h3 class="h5 mb-3">
              <i class="bi bi-building-fill-check me-2"></i> Property & Transaction
            </h3>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="propertyMatched" placeholder="Property matched" required>
              <label for="propertyMatched">Property Matched & Finalized *</label>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">₹</span>
              <div class="form-floating flex-grow-1">
                <input type="number" class="form-control" id="finalTransaction" placeholder="Transaction value" required>
                <label for="finalTransaction">Final Transaction *</label>
              </div>
            </div>
          </div>

          <!-- Agent & Commission Info Section -->
          <div class="mb-4">
            <h3 class="h5 mb-3 text-success">
              <i class="bi bi-currency-dollar me-2"></i> Agent & Commission Info
            </h3>

            <label for="agentName" class="form-label fw-semibold text-success mb-1">
              <i class="bi bi-person-badge me-2"></i> Sales Agent *
            </label>
            <select id="agentName" class="form-select mb-3" required>
              <option value="" selected disabled>Select Agent</option>
              <option>Agent Amy</option>
              <option>Broker Bob</option>
              <option>Agent Chris</option>
              <option>Broker Diana</option>
            </select>

            <div class="input-group mb-3">
              <span class="input-group-text">₹</span>
              <div class="form-floating flex-grow-1">
                <input type="number" class="form-control" id="commissionAmount" placeholder="Commission" required>
                <label for="commissionAmount">Commission Amount *</label>
              </div>
            </div>

            <div class="form-check form-switch mb-3">
              <input class="form-check-input" type="checkbox" id="taxToggle">
              <label class="form-check-label" for="taxToggle">
                <i class="bi bi-percent-circle me-1"></i> Include Tax
              </label>
            </div>

            <div class="input-group mb-3 d-none" id="taxFieldContainer">
              <span class="input-group-text">₹</span>
              <div class="form-floating flex-grow-1">
                <input type="number" class="form-control" id="taxAmount" placeholder="Tax">
                <label for="taxAmount">Tax Amount</label>
              </div>
            </div>
          </div>

          <!-- Next Service Interest Section -->
          <div class="mb-4">
            <h3 class="h5 mb-3 text-warning">
              <i class="bi bi-arrow-repeat me-2"></i> Next Service Interest
            </h3>

            <div class="d-flex flex-wrap gap-2">
              <input type="radio" class="btn-check" name="nextService" id="servicePMC" value="PMC" required>
              <label class="btn btn-outline-warning rounded-pill btn-sm px-3 fw-semibold" for="servicePMC">PMC</label>

              <input type="radio" class="btn-check" name="nextService" id="serviceResale" value="RESALE">
              <label class="btn btn-outline-warning rounded-pill btn-sm px-3 fw-semibold" for="serviceResale">RESALE</label>

              <input type="radio" class="btn-check" name="nextService" id="serviceRental" value="RENTAL">
              <label class="btn btn-outline-warning rounded-pill btn-sm px-3 fw-semibold" for="serviceRental">RENTAL</label>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="d-flex flex-wrap gap-2 justify-content-center mt-4">
            <button type="button" id="crmTrigger" class="btn btn-outline-info">
              <i class="bi bi-box-arrow-in-down-right me-1"></i> CRM Link
            </button>
            <button type="button" id="taskTrigger" class="btn btn-outline-success">
              <i class="bi bi-list-task me-1"></i> Task
            </button>
            <button type="submit" class="btn btn-outline-primary">
              <i class="bi bi-save me-1"></i> Save
            </button>
            <button type="button" id="downloadPdf" class="btn btn-outline-danger">
              <i class="bi bi-file-earmark-pdf-fill me-1"></i> PDF
            </button>
          </div>
        </form>
      </section>

      <!-- Right Column: Summary -->
      <aside class="col-lg-5">
        <div class="card p-4 shadow-sm sticky-top" style="top: 80px;">
          <h3 class="h5 mb-3 text-secondary">
            <i class="bi bi-card-list me-2"></i> Closure Summary
          </h3>
          <dl class="row">
            <dt class="col-7">Property:</dt>
            <dd class="col-5 text-end" id="summaryProperty">-</dd>

            <dt class="col-7">Transaction (₹):</dt>
            <dd class="col-5 text-end" id="summaryTransaction">-</dd>

            <dt class="col-7">Agent:</dt>
            <dd class="col-5 text-end" id="summaryAgent">-</dd>

            <dt class="col-7">Commission (₹):</dt>
            <dd class="col-5 text-end" id="summaryCommission">-</dd>

            <dt class="col-7">Tax Included:</dt>
            <dd class="col-5 text-end" id="summaryTaxIncluded">No</dd>

            <dt class="col-7">Tax (₹):</dt>
            <dd class="col-5 text-end" id="summaryTaxAmount">-</dd>

            <dt class="col-7">Next Service:</dt>
            <dd class="col-5 text-end" id="summaryNextService">-</dd>

            <dt class="col-7 border-top pt-2">Total Payout:</dt>
            <dd class="col-5 border-top pt-2 fw-bold" id="summaryTotalPayout">-</dd>
          </dl>
        </div>
      </aside>
    </main>
  </div>

  <!-- JavaScript for Interactivity -->
  <script>
    // GSAP Animations
    gsap.from("header h1", {
      y: -30,
      opacity: 0,
      duration: 1
    });
    gsap.from("header p", {
      y: 30,
      opacity: 0,
      duration: 1,
      delay: 0.2
    });
    gsap.from("#closureForm", {
      opacity: 0,
      y: 20,
      duration: 1
    });
    gsap.from(".sticky-top", {
      opacity: 0,
      y: 20,
      delay: 0.3,
      duration: 1
    });

    // Toggle Tax field
    const taxToggle = document.getElementById("taxToggle");
    const taxFieldContainer = document.getElementById("taxFieldContainer");
    taxToggle.addEventListener("change", () => {
      if (taxToggle.checked) {
        taxFieldContainer.classList.remove("d-none");
        gsap.fromTo(taxFieldContainer, {
          opacity: 0
        }, {
          opacity: 1,
          duration: 0.3
        });
      } else {
        gsap.to(taxFieldContainer, {
          opacity: 0,
          duration: 0.3,
          onComplete: () => {
            taxFieldContainer.classList.add("d-none");
          }
        });
      }
    });
  </script>

</body>

</html>