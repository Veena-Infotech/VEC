<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Meetings & Follow-Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
</head>
<body class="bg-light">

  <div class="container py-5">
    <div class="mb-4">
      <h2 class="fw-bold">📅 Meetings & Follow-Up</h2>
      <p class="text-muted">Track, manage, and reschedule your upcoming and past meetings</p>
    </div>

    <div class="row">
      <!-- Calendar Section -->
      <div class="col-lg-4 mb-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="fw-semibold"><i class="bi bi-calendar3"></i> Calendar</h5>
            <input type="month" class="form-control mb-3" value="2025-05" />
            <ul class="list-group">
              <li class="list-group-item list-group-item-primary">25 May 2025</li>
              <li class="list-group-item">26 May 2025</li>
              <li class="list-group-item">27 May 2025</li>
            </ul>
          </div>
        </div>

        <div class="mt-4">
          <h6 class="fw-semibold">Meetings on May 25, 2025</h6>
          <div class="border-start ps-3">
            <p class="mb-1 fw-bold">Rate Negotiation</p>
            <p class="text-muted small"><i class="bi bi-clock"></i> 10:27 PM - 11:27 PM</p>
          </div>
        </div>
      </div>

      <!-- Meetings Section -->
      <div class="col-lg-8">
        <!-- Tabs -->
        <ul class="nav nav-pills mb-4" id="meetingTabs">
          <li class="nav-item">
            <a class="nav-link active" href="#" data-tab="upcoming"><i class="bi bi-clock-history"></i> Upcoming</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-tab="past"><i class="bi bi-journal-check"></i> Past</a>
          </li>
        </ul>

        <!-- Upcoming Meetings -->
        <div id="upcoming" class="meeting-tab">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Rate Negotiation</h5>
                <span class="badge bg-success">Scheduled</span>
              </div>
              <hr/>
              <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> Sunday, May 25, 2025</p>
              <p><i class="bi bi-clock"></i> 10:27 PM – 11:27 PM | <i class="bi bi-camera-video"></i> Virtual</p>
              <p><i class="bi bi-person"></i> Jane Smith | <strong>Customer:</strong> David Thompson</p>
              <p class="text-muted">Final rate discussion and contract preparation</p>
              <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-info-circle"></i> View Details</button>
                <button class="btn btn-outline-primary btn-sm"><i class="bi bi-arrow-repeat"></i> Reschedule</button>
              </div>
            </div>
          </div>

          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Site Visit</h5>
                <span class="badge bg-success">Scheduled</span>
              </div>
              <hr/>
              <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> Monday, May 26, 2025</p>
              <p><i class="bi bi-clock"></i> 10:00 AM – 11:30 AM | <i class="bi bi-geo-alt"></i> 123 Main St, Anytown</p>
              <p><i class="bi bi-person"></i> Jane Smith | <strong>Customer:</strong> Robert Chen</p>
              <p class="text-muted">Site visit to assess property condition and location</p>
              <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-info-circle"></i> View Details</button>
                <button class="btn btn-outline-primary btn-sm"><i class="bi bi-arrow-repeat"></i> Reschedule</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Past Meetings -->
        <div id="past" class="meeting-tab d-none">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Introductory Call</h5>
                <span class="badge bg-secondary">Completed</span>
              </div>
              <hr/>
              <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> Thursday, May 15, 2025</p>
              <p><i class="bi bi-clock"></i> 2:00 PM – 2:30 PM | <i class="bi bi-camera-video"></i> Virtual</p>
              <p><i class="bi bi-person"></i> Jane Smith | <strong>Customer:</strong> Emily Davis</p>
              <p class="text-muted">Initial client discussion and service introduction</p>
              <div>
                <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-clipboard-check"></i> View Summary</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script>
    // Initial animation
    gsap.from("h2, .nav-pills, .card", {
      opacity: 0,
      y: 50,
      duration: 0.6,
      stagger: 0.2
    });

    // Tab switching with animation
    const tabs = document.querySelectorAll("#meetingTabs .nav-link");
    const tabsMap = {
      upcoming: document.getElementById("upcoming"),
      past: document.getElementById("past")
    };

    tabs.forEach(tab => {
      tab.addEventListener("click", function (e) {
        e.preventDefault();
        tabs.forEach(t => t.classList.remove("active"));
        this.classList.add("active");

        const selectedTab = this.getAttribute("data-tab");

        // Hide all tabs
        Object.values(tabsMap).forEach(tabContent => tabContent.classList.add("d-none"));

        // Show selected tab with GSAP animation
        const activeTab = tabsMap[selectedTab];
        activeTab.classList.remove("d-none");
        gsap.from(activeTab.querySelectorAll(".card"), {
          opacity: 0,
          y: 50,
          duration: 0.6,
          stagger: 0.2
        });
      });
    });
  </script>

</body>
</html>
