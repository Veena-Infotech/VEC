<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Commission Management - Bootstrap Hover Effects</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- jsPDF -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>

<body class="bg-light">

  <div class="container py-5">
    <div class="card shadow mx-auto" style="max-width: 820px;">
      <div class="card-header bg-primary text-white text-center py-4 fw-bold fs-3">
        <i class="bi bi-graph-up me-2"></i>Commission Management
      </div>
      <div class="card-body p-4">
        <form id="commissionForm" novalidate>
          <div class="row g-4">
            <!-- Commission Type -->
            <div class="col-md-6">
              <div class="form-floating">
                <select class="form-select shadow-sm" id="commissionType" required aria-label="Commission Type" data-bs-toggle="collapse" data-bs-target="#dealPercentCollapse" aria-expanded="false" aria-controls="dealPercentCollapse">
                  <option value="standard" selected>Standard (10%)</option>
                  <option value="deal">Deal-Specific (%)</option>
                </select>
                <label for="commissionType"><i class="bi bi-percent"></i> Commission Type</label>
              </div>
            </div>

            <!-- Deal Percent -->
            <div class="col-md-6 collapse fade" id="dealPercentCollapse">
              <div class="form-floating">
                <input type="number" min="0" max="100" step="0.01" class="form-control shadow-sm" id="dealPercent" placeholder="Deal Percent" />
                <label for="dealPercent"><i class="bi bi-calculator"></i> Deal-Specific %</label>
              </div>
            </div>

            <!-- Commission Amount -->
            <div class="col-md-6">
              <div class="form-floating">
                <input type="number" min="0" step="0.01" class="form-control shadow-sm" id="commissionAmount" placeholder="Commission Amount" required />
                <label for="commissionAmount"><i class="bi bi-currency-rupee"></i> Commission Amount</label>
              </div>
            </div>

            <!-- Commission Status -->
            <div class="col-md-6">
              <div class="form-floating">
                <select class="form-select shadow-sm" id="commissionStatus" required>
                  <option value="unpaid" selected>Unpaid</option>
                  <option value="paid">Paid</option>
                </select>
                <label for="commissionStatus"><i class="bi bi-check-circle"></i> Status</label>
              </div>
            </div>

            <!-- GST Checkbox -->
            <div class="col-12">
              <div class="form-check form-switch">
                <input class="form-check-input shadow-sm" type="checkbox" id="applyGST" />
                <label class="form-check-label fw-semibold" for="applyGST"><i class="bi bi-receipt"></i> Apply GST (18%)</label>
              </div>
            </div>
          </div>

          <div class="card mt-5 border-primary shadow-sm" onmouseover="this.classList.add('shadow-lg')" onmouseout="this.classList.remove('shadow-lg')">
            <div class="card-header bg-primary bg-opacity-10 text-primary fw-semibold fs-5 d-flex justify-content-between align-items-center">
              <span><i class="bi bi-calculator me-2"></i>Calculation Summary</span>
              <span id="summaryBadge" class="badge rounded-pill bg-primary">Updated</span>
            </div>
            <ul class="list-group list-group-flush fs-6">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><i class="bi bi-percent me-2"></i> Commission Percentage</span>
                <span id="displayCommissionPercent">10%</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><i class="bi bi-currency-rupee me-2"></i> Commission Amount</span>
                <span id="displayCommissionAmount">₹0.00</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><i class="bi bi-receipt me-2"></i> GST Amount</span>
                <span id="displayGST">₹0.00</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center fw-bold text-primary">
                <span><i class="bi bi-wallet2 me-2"></i> Total Payable</span>
                <span id="displayTotal">₹0.00</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><i class="bi bi-clipboard-check me-2"></i> Status</span>
                <span id="displayStatus"><span class="badge bg-warning text-dark">Unpaid</span></span>
              </li>
            </ul>
          </div>

          <div class="d-flex justify-content-end gap-3 mt-4">
            <button type="button" class="btn btn-outline-primary btn-lg shadow-sm" id="generateReceiptBtn" disabled onmouseover="this.classList.add('shadow-lg')" onmouseout="this.classList.remove('shadow-lg')">
              <i class="bi bi-file-earmark-arrow-down-fill me-2"></i>Generate Receipt PDF
            </button>
            <button type="button" class="btn btn-primary btn-lg shadow-sm" id="generateAdviceBtn" disabled onmouseover="this.classList.add('shadow-lg')" onmouseout="this.classList.remove('shadow-lg')">
              <i class="bi bi-file-earmark-text-fill me-2"></i>Generate Payment Advice PDF
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- Toast Container -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1080;">
      <div id="pdfToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">PDF generated successfully!</div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      (() => {
        const commissionType = document.getElementById('commissionType');
        const dealPercentCollapse = new bootstrap.Collapse(document.getElementById('dealPercentCollapse'), {
          toggle: false
        });
        const dealPercentInput = document.getElementById('dealPercent');
        const commissionAmountInput = document.getElementById('commissionAmount');
        const commissionStatus = document.getElementById('commissionStatus');
        const applyGST = document.getElementById('applyGST');

        const displayCommissionPercent = document.getElementById('displayCommissionPercent');
        const displayCommissionAmount = document.getElementById('displayCommissionAmount');
        const displayGST = document.getElementById('displayGST');
        const displayTotal = document.getElementById('displayTotal');
        const displayStatus = document.getElementById('displayStatus');

        const generateReceiptBtn = document.getElementById('generateReceiptBtn');
        const generateAdviceBtn = document.getElementById('generateAdviceBtn');
        const pdfToastEl = document.getElementById('pdfToast');
        const pdfToast = new bootstrap.Toast(pdfToastEl);

        const STANDARD_PERCENT = 10;

        function updateDealPercentCollapse() {
          if (commissionType.value === 'deal') {
            dealPercentCollapse.show();
            dealPercentInput.required = true;
          } else {
            dealPercentCollapse.hide();
            dealPercentInput.required = false;
            dealPercentInput.value = '';
            dealPercentInput.classList.remove('is-invalid');
          }
        }

        function formatCurrency(num) {
          return '₹' + num.toFixed(2);
        }

        function computeValues() {
          let percent = STANDARD_PERCENT;
          if (commissionType.value === 'deal') {
            let dealVal = parseFloat(dealPercentInput.value);
            if (!isNaN(dealVal) && dealVal >= 0 && dealVal <= 100) {
              percent = dealVal;
              dealPercentInput.classList.remove('is-invalid');
            } else {
              percent = 0;
              if (dealPercentInput.required) {
                dealPercentInput.classList.add('is-invalid');
              }
            }
          }

          const amount = parseFloat(commissionAmountInput.value);
          if (isNaN(amount) || amount < 0) {
            displayCommissionAmount.textContent = '₹0.00';
            displayGST.textContent = '₹0.00';
            displayTotal.textContent = '₹0.00';
            displayCommissionPercent.textContent = percent + '%';
            generateReceiptBtn.disabled = true;
            generateAdviceBtn.disabled = true;
            return;
          }

          const commissionCalculated = (amount * percent) / 100;
          const gstApplied = applyGST.checked ? commissionCalculated * 0.18 : 0;
          const totalPayable = commissionCalculated + gstApplied;

          displayCommissionPercent.textContent = percent.toFixed(2) + '%';
          displayCommissionAmount.textContent = formatCurrency(commissionCalculated);
          displayGST.textContent = formatCurrency(gstApplied);
          displayTotal.textContent = formatCurrency(totalPayable);

          if (commissionStatus.value === 'paid') {
            displayStatus.innerHTML = '<span class="badge bg-success">Paid</span>';
          } else {
            displayStatus.innerHTML = '<span class="badge bg-warning text-dark">Unpaid</span>';
          }

          const validDealPercent = (commissionType.value === 'deal') ? (percent > 0 && percent <= 100) : true;
          generateReceiptBtn.disabled = !(amount > 0 && validDealPercent);
          generateAdviceBtn.disabled = !(amount > 0 && validDealPercent);
        }

        function generatePDF(type) {
          const {
            jsPDF
          } = window.jspdf;
          const doc = new jsPDF();

          doc.setFontSize(20);
          doc.setTextColor('#0d6efd');
          doc.text("Commission " + type, 14, 20);

          doc.setFontSize(12);
          doc.setTextColor(0, 0, 0);

          const dateStr = new Date().toLocaleDateString();

          doc.text(`Date: ${dateStr}`, 14, 30);
          doc.text(`Commission Type: ${commissionType.options[commissionType.selectedIndex].text}`, 14, 40);
          const percent = (commissionType.value === 'deal') ? dealPercentInput.value.trim() + '%' : STANDARD_PERCENT + '%';
          doc.text(`Commission Percentage: ${percent}`, 14, 50);

          const amountNum = parseFloat(commissionAmountInput.value);
          let commissionValue = (amountNum * parseFloat(percent)) / 100;
          if (isNaN(commissionValue)) commissionValue = 0;
          doc.text(`Commission Amount: ₹${commissionValue.toFixed(2)}`, 14, 60);

          const gstVal = applyGST.checked ? commissionValue * 0.18 : 0;
          doc.text(`GST (18%): ₹${gstVal.toFixed(2)}`, 14, 70);

          const totalPayable = commissionValue + gstVal;
          doc.setFontSize(14);
          doc.text(`Total Payable: ₹${totalPayable.toFixed(2)}`, 14, 80);

          doc.setFontSize(12);
          doc.text(`Status: ${commissionStatus.options[commissionStatus.selectedIndex].text}`, 14, 90);

          doc.setFontSize(10);
          if (type === 'Receipt') {
            doc.text('Thank you for the payment.', 14, 110);
          } else if (type === 'Payment Advice') {
            doc.text('Please process the payment as per above details.', 14, 110);
          }

          doc.save(`Commission_${type}_${dateStr.replace(/\//g, '-')}.pdf`);
          pdfToast.show();
        }

        // Event listeners
        commissionType.addEventListener('change', () => {
          updateDealPercentCollapse();
          computeValues();
        });
        dealPercentInput.addEventListener('input', computeValues);
        commissionAmountInput.addEventListener('input', computeValues);
        commissionStatus.addEventListener('change', computeValues);
        applyGST.addEventListener('change', computeValues);

        generateReceiptBtn.addEventListener('click', () => generatePDF('Receipt'));
        generateAdviceBtn.addEventListener('click', () => generatePDF('Payment Advice'));

        // Initialize
        updateDealPercentCollapse();
        computeValues();
      })();
    </script>
</body>

</html>