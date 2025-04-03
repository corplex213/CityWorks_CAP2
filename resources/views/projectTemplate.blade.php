<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Details</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/projectTemplate_styles.css') }}">
  
</head>
<body>
  <div class="header">
    <a href="#default" class="logo">
      <img src="{{ asset('frontend/img/341835580_3377258052532133_4186880548703356922_n.jpg') }}" alt="CEO">
    </a>
    <div class="header-right">
      <a href="{{ route('dashboard') }}">Dashboard</a>
      <a class="active" href="#projects">Projects</a>
    </div>
  </div>

  <!-- Navigation -->
  <header class="navbar">
    <div class="logo">ProjectTool</div>
    <nav>
      <ul>
        <li><a href="#"></a></li>
        <li><a href="#">Projects</a></li>
      </ul>
    </nav>
    <button class="login-btn">Logout</button>
  </header>

  <!-- Project Overview Section -->
  <section class="project-overview">
    <div class="project-header">
      <h1 id="projectName" class="editable" contenteditable="true">Project Name</h1>
      <p id="projectDescription" class="editable" contenteditable="true">Project description goes here. This is a brief overview of the project objectives and goals.</p>
      
      <div class="task-table-wrapper">
        <div class="button-table-wrapper">
          <!-- Buttons -->
          <div class="button-container">
            <button id="mainTableBtn" class="main-table-btn">Main Table</button>
            <button id="calendarBtn" class="calendar-btn">Calendar</button>
            <!-- <button id="kanbanBtn" class="kanban-btn">Kanban</button> -->
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- Main Table Section -->
<section class="group-section">
  <div class="group-container"></div>
  <div class="add-group-container">
      <button id="addGroupBtn" class="add-group-btn">Add New Group</button>
  </div>
</section>

<!-- Calendar Section (Initially Hidden) -->
<section class="calendar-section">
  <div class="calendar-header">
    <button id="prevMonth">Prev</button>
    <span id="monthYearDisplay"></span>
    <button id="nextMonth">Next</button>
  </div>
  <div class="calendar-grid"></div>
</section>

<!-- Kanban Section -->
 <!-- <section class="kanban-section" style="display:none;"> -->
  <!-- <div id="kanbanBoard" class="kanban-board"> -->
    <!-- kanban content added here -->
  <!-- </div> -->
 <!-- </section> -->
  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2024 City Engineering Office. All rights reserved.</p>
  </footer>
  <script>
    // Function to get URL parameters
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    // Set project name and description from URL parameters
    document.addEventListener('DOMContentLoaded', () => {
        const projectName = getUrlParameter('projectName');
        const projectDescription = getUrlParameter('projectDescription');

        if (projectName) {
            document.getElementById('projectName').textContent = projectName;
        }
        if (projectDescription) {
            document.getElementById('projectDescription').textContent = projectDescription;
        }
    });
  </script>
  <script src="{{ asset('frontend/javascript/projectTemplate_script.js') }}"></script>
</body>
</html>
