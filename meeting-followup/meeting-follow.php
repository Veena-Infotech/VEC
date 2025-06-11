<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Meetings &amp; Follow-Up</title>
  <!-- Bootstrap CSS CDN -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <!-- Bootstrap Icons CDN -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    rel="stylesheet" />
</head>

<body class="bg-white text-body">
  <?php include '../navbar.php'; ?>
  <main class="container-lg py-5">
    <!-- Hero Section -->
    <header class="mb-5 text-center">
      <h1 class="display-1 fw-semibold mb-3">
        Meetings &amp; Follow-Up
      </h1>
      <p class="fs-5 text-secondary mx-auto mb-4 w-75 w-lg-50">
        Manage upcoming meetings and follow up with clarity and ease.
      </p>
      <button class="btn btn-dark btn-lg px-5 shadow-sm" type="button" aria-label="Get started with Meetings">
        Get Started
      </button>
    </header>

    <div class="row gy-5">
      <!-- Calendar View - Upcoming Scheduled Meetings -->
      <section class="col-lg-4">
        <div class="card shadow-sm rounded-3 border-0">
          <div class="card-header bg-white border-0 pb-3">
            <h2 class="h4 fw-semibold mb-0">Upcoming Scheduled Meetings</h2>
          </div>
          <div class="card-body p-3">
            <!-- Simple calendar: a Bootstrap table representing current month -->
            <table class="table table-bordered mb-3 text-center small align-middle" aria-label="Upcoming Meetings Calendar">
              <thead class="table-light">
                <tr>
                  <th scope="col">Sun</th>
                  <th scope="col">Mon</th>
                  <th scope="col">Tue</th>
                  <th scope="col">Wed</th>
                  <th scope="col">Thu</th>
                  <th scope="col">Fri</th>
                  <th scope="col">Sat</th>
                </tr>
              </thead>
              <tbody>
                <!-- Example static calendar for October 2024 -->
                <tr>
                  <td class="text-muted">29</td>
                  <td class="text-muted">30</td>
                  <td class="text-muted">1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>7</td>
                  <td>8</td>
                  <td>9</td>
                  <td>10</td>
                  <td>11</td>
                  <td>12</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>14</td>
                  <td>
                    15
                    <span class="badge bg-primary rounded-pill" title="Rate Negotiation">•</span>
                  </td>
                  <td>16</td>
                  <td>17</td>
                  <td>
                    18
                    <span class="badge bg-primary rounded-pill" title="Site Visit">•</span>
                  </td>
                  <td>19</td>
                </tr>
                <tr>
                  <td>20</td>
                  <td>21</td>
                  <td>22</td>
                  <td>23</td>
                  <td>
                    24
                    <span class="badge bg-primary rounded-pill" title="Client Meeting">•</span>
                  </td>
                  <td>25</td>
                  <td>26</td>
                </tr>
                <tr>
                  <td>27</td>
                  <td>28</td>
                  <td>29</td>
                  <td>30</td>
                  <td>31</td>
                  <td class="text-muted">1</td>
                  <td class="text-muted">2</td>
                </tr>
              </tbody>
            </table>
            <p class="small text-muted mb-0">
              Days with a <span class="badge bg-primary rounded-pill">•</span> have meetings scheduled.
            </p>
          </div>
        </div>
      </section>

      <!-- Meeting Details List / Cards -->
      <section class="col-lg-8">
        <div class="card shadow-sm rounded-3 border-0">
          <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
            <h2 class="h4 fw-semibold mb-0">Scheduled Meetings</h2>
            <button
              class="btn btn-outline-primary btn-sm"
              type="button"
              data-bs-toggle="modal"
              data-bs-target="#addMeetingModal"
              aria-label="Add new meeting">
              <i class="bi bi-plus-lg"></i> Add Meeting
            </button>
          </div>
          <div class="card-body p-3">
            <!-- Meeting 1 -->
            <article
              class="mb-4 border rounded-3 p-4 shadow-sm"
              tabindex="0"
              aria-label="Meeting Rate Negotiation details">
              <header class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="h5 fw-semibold mb-0">Rate Negotiation</h3>
                <button
                  class="btn btn-sm btn-outline-secondary"
                  data-bs-toggle="modal"
                  data-bs-target="#rescheduleModal"
                  aria-label="Reschedule Rate Negotiation meeting">
                  <i class="bi bi-arrow-clockwise"></i> Reschedule
                </button>
              </header>
              <dl class="row mb-3 text-secondary fs-6">
                <dt class="col-sm-4">Assigned Employee</dt>
                <dd class="col-sm-8">Jane Doe</dd>

                <dt class="col-sm-4">Agent/Customer/Property</dt>
                <dd class="col-sm-8">Agent: John Smith</dd>

                <dt class="col-sm-4">Location / Link</dt>
                <dd class="col-sm-8">
                  <a href="https://meet.google.com/xyz-meet-link" target="_blank" class="text-decoration-none"><i class="bi bi-camera-video me-1"></i> Google Meet Link</a><br />
                  <a href="https://goo.gl/maps/abc-location" target="_blank" class="text-decoration-none"><i class="bi bi-geo-alt me-1"></i> Location on Google Maps</a>
                </dd>
              </dl>
              <section>
                <h4 class="h6 fw-semibold">Meeting Outcome Summary</h4>
                <p class="text-body fs-6 mb-0">
                  Discussed rate adjustments and agreed to review contract terms next month.
                </p>
              </section>
            </article>

            <!-- Meeting 2 -->
            <article
              class="mb-4 border rounded-3 p-4 shadow-sm"
              tabindex="0"
              aria-label="Meeting Site Visit details">
              <header class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="h5 fw-semibold mb-0">Site Visit</h3>
                <button
                  class="btn btn-sm btn-outline-secondary"
                  data-bs-toggle="modal"
                  data-bs-target="#rescheduleModal"
                  aria-label="Reschedule Site Visit meeting">
                  <i class="bi bi-arrow-clockwise"></i> Reschedule
                </button>
              </header>
              <dl class="row mb-3 text-secondary fs-6">
                <dt class="col-sm-4">Assigned Employee</dt>
                <dd class="col-sm-8">Michael Lee</dd>

                <dt class="col-sm-4">Agent/Customer/Property</dt>
                <dd class="col-sm-8">Customer: Alice Brown</dd>

                <dt class="col-sm-4">Location / Link</dt>
                <dd class="col-sm-8">
                  <a href="https://goo.gl/maps/site-visit-location" target="_blank" class="text-decoration-none"><i class="bi bi-geo-alt me-1"></i> Google Maps Location</a>
                </dd>
              </dl>
              <section>
                <h4 class="h6 fw-semibold">Meeting Outcome Summary</h4>
                <p class="text-body fs-6 mb-0">
                  Surveyed property condition, noted some repairs needed on HVAC system.
                </p>
              </section>
            </article>

            <!-- Meeting 3 -->
            <article
              class="border rounded-3 p-4 shadow-sm"
              tabindex="0"
              aria-label="Meeting Client Follow-Up details">
              <header class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="h5 fw-semibold mb-0">Client Follow-Up</h3>
                <button
                  class="btn btn-sm btn-outline-secondary"
                  data-bs-toggle="modal"
                  data-bs-target="#rescheduleModal"
                  aria-label="Reschedule Client Follow-Up meeting">
                  <i class="bi bi-arrow-clockwise"></i> Reschedule
                </button>
              </header>
              <dl class="row mb-3 text-secondary fs-6">
                <dt class="col-sm-4">Assigned Employee</dt>
                <dd class="col-sm-8">Sarah Kim</dd>

                <dt class="col-sm-4">Agent/Customer/Property</dt>
                <dd class="col-sm-8">Property: 123 Elm St.</dd>

                <dt class="col-sm-4">Location / Link</dt>
                <dd class="col-sm-8">
                  <a href="https://meet.google.com/client-followup-meet" target="_blank" class="text-decoration-none"><i class="bi bi-camera-video me-1"></i> Google Meet Link</a>
                </dd>
              </dl>
              <section>
                <h4 class="h6 fw-semibold">Meeting Outcome Summary</h4>
                <p class="text-body fs-6 mb-0">
                  Client happy with progress, proposed next review in two weeks.
                </p>
              </section>
            </article>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Reschedule Meeting Modal -->
  <div class="modal fade" id="rescheduleModal" tabindex="-1" aria-labelledby="rescheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content rounded-3 shadow-sm">
        <div class="modal-header">
          <h5 class="modal-title fw-semibold" id="rescheduleModalLabel">Reschedule Meeting</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form>
          <div class="modal-body">
            <div class="mb-3">
              <label for="rescheduleDate" class="form-label">Select New Date</label>
              <input type="date" class="form-control" id="rescheduleDate" required />
            </div>
            <div class="mb-3">
              <label for="rescheduleTime" class="form-label">Select New Time</label>
              <input type="time" class="form-control" id="rescheduleTime" required />
            </div>
            <div class="mb-3">
              <label for="rescheduleNotes" class="form-label">Notes (optional)</label>
              <textarea class="form-control" id="rescheduleNotes" rows="3" placeholder="Add comments or reasons for rescheduling"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Confirm Reschedule</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Add Meeting Modal (stub for completeness) -->
  <div class="modal fade" id="addMeetingModal" tabindex="-1" aria-labelledby="addMeetingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content rounded-3 shadow-sm">
        <div class="modal-header">
          <h5 class="modal-title fw-semibold" id="addMeetingModalLabel">Add New Meeting</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form>
          <div class="modal-body">
            <div class="mb-3">
              <label for="meetingSubject" class="form-label">Meeting Subject</label>
              <input type="text" class="form-control" id="meetingSubject" placeholder="E.g., Site Visit / Rate Negotiation" required />
            </div>
            <div class="mb-3">
              <label for="assignedEmployee" class="form-label">Assigned Employee</label>
              <input type="text" class="form-control" id="assignedEmployee" placeholder="Name of employee" required />
            </div>
            <div class="mb-3">
              <label for="linkedEntity" class="form-label">Agent/Customer/Property Linked</label>
              <input type="text" class="form-control" id="linkedEntity" placeholder="E.g., Agent, Customer or Property" required />
            </div>
            <div class="mb-3">
              <label for="locationLink" class="form-label">Location / Link</label>
              <input type="url" class="form-control" id="locationLink" placeholder="Google Maps or Google Meet URL" />
            </div>
            <div class="mb-3">
              <label for="meetingDate" class="form-label">Meeting Date</label>
              <input type="date" class="form-control" id="meetingDate" required />
            </div>
            <div class="mb-3">
              <label for="meetingTime" class="form-label">Meeting Time</label>
              <input type="time" class="form-control" id="meetingTime" required />
            </div>
            <div class="mb-3">
              <label for="outcomeSummary" class="form-label">Meeting Outcome Summary</label>
              <textarea class="form-control" id="outcomeSummary" rows="3" placeholder="Summary for post-meeting notes"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Add Meeting</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="sticky-footer bg-white text-dark py-4 mt-auto">
    <hr class="border-top border-dark opacity-25 mb-4" />

    <div class="container text-center">
      <div class="mb-3">
        <p class="mb-1 fw-semibold">© 2025 Veena Group. All Rights Reserved.</p>
        <p class="mb-3 small">Empowering Mumbai’s Real Estate Market through Smart Digital Solutions.</p>
      </div>

      <nav class="mb-3 d-flex justify-content-center gap-4 flex-wrap">
        <a href="#" class="text-decoration-none text-primary fw-semibold small">Privacy Policy</a>
        <a href="#" class="text-decoration-none text-primary fw-semibold small">Terms of Service</a>
        <a href="#" class="text-decoration-none text-primary fw-semibold small">Contact Us</a>
      </nav>

      <div class="d-flex justify-content-center gap-3">
        <a href="#" class="text-primary fs-5" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-primary fs-5" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-primary fs-5" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      </div>

    </div>
  </footer>
  <!-- End of Footer -->

  <!-- Bootstrap JS Bundle CDN (with Popper) -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    defer></script>
</body>

</html>