<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  <title>Real Estate Admin Dashboard</title>
</head>
<body>

  <div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
      <h2>Dashboard</h2>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Manage Properties</a></li>
        <li><a href="#">User Management</a></li>
        <li><a href="#">Analytics</a></li>
      </ul>

      <!-- Admin Profile Section -->
      <div class="admin-profile">
        <a href="#">View Profile</a>
        <a href="#">Logout</a>
      </div>
    </nav>

    <!-- Page Content -->
    <div id="content">
      <div class="dashboard-container">
        <h1>Admin Dashboard</h1>

        <!-- Display Key Metrics -->
        <div class="metrics-container">
          <div class="metric">
            <h2>Total Properties</h2>
            <p>100</p>
          </div>
          <div class="metric">
            <h2>Active Listings</h2>
            <p>75</p>
          </div>
          <div class="metric">
            <h2>Pending Approvals</h2>
            <p>10</p>
          </div>
        </div>

        <!-- Quick Access to Tasks -->
        <div class="quick-tasks">
          <button onclick="location.href='#';">Manage Properties</button>
          <button onclick="location.href='#';">User Management</button>
          <button onclick="location.href='#';">Analytics</button>
        </div>
      </div>
      <div class="property-listings">
  <h2>Property Listings</h2>

  <!-- Display a table of properties with action buttons -->
  <table>
    <thead>
      <tr>
        <th>Property ID</th>
        <th>Property Name</th>
        <th>Type</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Beautiful House</td>
        <td>Residential</td>
        <td>Active</td>
        <td>
          <button onclick="editProperty(1)">Edit</button>
          <button onclick="updateProperty(1)">Update</button>
          <button onclick="deleteProperty(1)">Delete</button>
        </td>
      </tr>
      <!-- Add more rows for additional properties -->
    </tbody>
  </table>

  <!-- Modal for Editing Property -->
  <div id="editModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <!-- Form for editing property details -->
      <form id="editForm">
        <label for="propertyName">Property Name:</label>
        <input type="text" id="propertyName" name="propertyName" required>
        
        <!-- Add more input fields for other property details -->

        <button type="submit">Save Changes</button>
      </form>
    </div>
  </div>
</div>

    </div>
  </div>
<!-- Property Listings Section -->

</body>
</html>
