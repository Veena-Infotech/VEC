<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Commission Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
<?php include '../navbar.php'; ?>
<div class="container py-5">
  <div class="row g-4">
    <!-- Form Section -->
    <div class="col-lg-7">
      <div class="card border-0 shadow">
        <div class="card-header bg-primary text-white">
          <h5 class="mb-0"><i class="bi bi-cash-coin me-2"></i>Commission Entry</h5>
        </div>
        <div class="card-body">
          <form id="commissionForm">
            <!-- Deal Info -->
            <div class="row g-3 mb-4">
              <div class="col-md-6">
                <label class="form-label">Deal ID</label>
                <input type="text" class="form-control" name="dealId" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Client Name</label>
                <input type="text" class="form-control" name="clientName" required>
              </div>
            </div>

            <!-- Commission Details -->
            <div class="row g-3 mb-4">
              <div class="col-md-4">
                <label class="form-label">Commission Type</label>
                <select class="form-select" name="commissionType">
                  <option value="standard">Standard (10%)</option>
                  <option value="custom">Deal-Specific</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Commission %</label>
                <input type="number" class="form-control" name="commissionPercent" value="10" readonly>
              </div>
              <div class="col-md-4">
                <label class="form-label">Deal Amount (₹)</label>
                <input type="number" class="form-control" name="dealAmount" required>
              </div>
            </div>

            <!-- Tax and Payment -->
            <div class="row g-3 mb-4">
              <div class="col-md-4">
                <label class="form-label">GST Applicable?</label>
                <select class="form-select" name="gstApplicable">
                  <option value="yes">Yes (18%)</option>
                  <option value="no">No</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Commission Status</label>
                <select class="form-select" name="status">
                  <option value="Paid">Paid</option>
                  <option value="Unpaid" selected>Unpaid</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Total Payable (₹)</label>
                <input type="text" class="form-control bg-body-secondary" name="totalPayable" readonly>
              </div>
            </div>

            <!-- Actions -->
            <div class="d-flex justify-content-end gap-2">
              <button type="button" class="btn btn-outline-primary" onclick="calculate()">
                <i class="bi bi-calculator"></i> Calculate
              </button>
              <button type="button" class="btn btn-success" onclick="generateReceipt()">
                <i class="bi bi-printer"></i> Generate Receipt
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Live Summary -->
    <div class="col-lg-5">
      <div class="card h-100 border-start border-4 border-primary shadow">
        <div class="card-body">
          <h6 class="text-primary"><i class="bi bi-clipboard-data me-2"></i>Live Summary</h6>
          <ul class="list-group list-group-flush small mt-3">
            <li class="list-group-item"><strong>Deal ID:</strong> <span id="previewDealId">-</span></li>
            <li class="list-group-item"><strong>Client:</strong> <span id="previewClient">-</span></li>
            <li class="list-group-item"><strong>Deal Amount:</strong> ₹<span id="previewAmount">-</span></li>
            <li class="list-group-item"><strong>Commission %:</strong> <span id="previewPercent">-</span>%</li>
            <li class="list-group-item"><strong>Status:</strong> <span id="previewStatus">-</span></li>
            <li class="list-group-item"><strong>GST:</strong> <span id="previewGST">-</span></li>
            <li class="list-group-item text-end"><strong>Total Payable:</strong> ₹<span id="previewTotal">-</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Receipt Section -->
  <div class="card mt-5 shadow d-none d-print-block" id="receiptCard">
    <div class="card-header bg-dark text-white">
      <h6 class="mb-0"><i class="bi bi-file-earmark-text me-2"></i>Commission Payment Advice</h6>
    </div>
    <div class="card-body">
      <div class="mb-2"><strong>Deal ID:</strong> <span id="rDealId"></span></div>
      <div class="mb-2"><strong>Client Name:</strong> <span id="rClientName"></span></div>
      <div class="mb-2"><strong>Commission %:</strong> <span id="rPercent"></span>%</div>
      <div class="mb-2"><strong>Deal Amount:</strong> ₹<span id="rAmount"></span></div>
      <div class="mb-2"><strong>Status:</strong> <span id="rStatus"></span></div>
      <div class="mb-2"><strong>GST Included:</strong> <span id="rGST"></span></div>
      <hr>
      <h5 class="text-end"><strong>Total Payable:</strong> ₹<span id="rTotal"></span></h5>
    </div>
  </div>
</div>

<!-- JavaScript Logic -->
<script>
  const commissionType = document.getElementById('commissionType');
  const commissionPercent = document.getElementById('commissionPercent');

  commissionType.addEventListener('change', () => {
    if (commissionType.value === 'standard') {
      commissionPercent.value = 10;
      commissionPercent.readOnly = true;
    } else {
      commissionPercent.readOnly = false;
      commissionPercent.focus();
    }
  });

  function calculate() {
    const dealAmount = parseFloat(document.getElementById('dealAmount').value) || 0;
    const percent = parseFloat(commissionPercent.value) || 0;
    const gstYes = document.getElementById('gstApplicable').value === 'yes';
    const status = document.getElementById('status').value;

    const commission = (dealAmount * percent) / 100;
    const gst = gstYes ? commission * 0.18 : 0;
    const total = commission + gst;

    document.getElementById('totalPayable').value = total.toFixed(2);

    // Update Preview
    document.getElementById('previewDealId').textContent = document.getElementById('dealId').value;
    document.getElementById('previewClient').textContent = document.getElementById('clientName').value;
    document.getElementById('previewAmount').textContent = dealAmount.toFixed(2);
    document.getElementById('previewPercent').textContent = percent.toFixed(2);
    document.getElementById('previewStatus').textContent = status;
    document.getElementById('previewGST').textContent = gstYes ? 'Yes (18%)' : 'No';
    document.getElementById('previewTotal').textContent = total.toFixed(2);
  }

  function generateReceipt() {
    calculate();
    document.getElementById('rDealId').textContent = document.getElementById('dealId').value;
    document.getElementById('rClientName').textContent = document.getElementById('clientName').value;
    document.getElementById('rPercent').textContent = document.getElementById('commissionPercent').value;
    document.getElementById('rAmount').textContent = document.getElementById('dealAmount').value;
    document.getElementById('rGST').textContent = document.getElementById('gstApplicable').value === 'yes' ? 'Yes (18%)' : 'No';
    document.getElementById('rStatus').textContent = document.getElementById('status').value;
    document.getElementById('rTotal').textContent = document.getElementById('totalPayable').value;

    document.getElementById('receiptCard').classList.remove('d-none');
    window.print();
  }
</script>
  <?php include '../footer.php'; ?>


</body>
</html>
