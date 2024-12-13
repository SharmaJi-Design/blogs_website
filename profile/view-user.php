<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Person Logo" class="rounded-circle" style="width: 100px; height: 100px;">
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Update Profile</h5>
                        <form>
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="d-grid">
                                <a herf="profile.php" class="btn btn-primary">Update Profile</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">User Details</h5>
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Rohit Sharma</td>
                                    <td>rohit360@gmail.com</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewUserModal" onclick="viewUser('John Doe', 'johndoe@example.com')">
                                            <img src="https://cdn-icons-png.flaticon.com/512/159/159604.png" alt="View Icon" style="width: 16px; height: 16px;"> View
                                        </button>
                                        <button class="btn btn-danger btn-sm" onclick="deleteUser(this)">
                                            <img src="https://cdn-icons-png.flaticon.com/512/1214/1214428.png" alt="Delete Icon" style="width: 16px; height: 16px;"> Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rocky</td>
                                    <td>rocky098@gmail.com</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewUserModal" onclick="viewUser('Jane Smith', 'janesmith@example.com')">
                                            <img src="https://cdn-icons-png.flaticon.com/512/159/159604.png" alt="View Icon" style="width: 16px; height: 16px;"> View
                                        </button>
                                        <button class="btn btn-danger btn-sm" onclick="deleteUser(this)">
                                            <img src="https://cdn-icons-png.flaticon.com/512/1214/1214428.png" alt="Delete Icon" style="width: 16px; height: 16px;"> Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="viewUserModal" tabindex="-1" aria-labelledby="viewUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewUserModalLabel">User Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Full Name:</strong> <span id="modalFullName"></span></p>
                    <p><strong>Email:</strong> <span id="modalEmail"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function viewUser(fullName, email) {
            document.getElementById('modalFullName').textContent = fullName;
            document.getElementById('modalEmail').textContent = email;
        }

        function deleteUser(button) {
            const row = button.closest('tr');
            row.remove();
        }
    </script>
</body>
</html>
