<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Product Management</h1>
        <form id="productForm" class="mb-4">
            <div class="form-row">
                <div class="col-md-4">
                    <input type="text" name="productName" class="form-control" placeholder="Product Name" required>
                </div>
                <div class="col-md-3">
                    <input type="number" name="quantity" class="form-control" placeholder="Quantity in Stock" required>
                </div>
                <div class="col-md-3">
                    <input type="number" name="price" step="0.01" class="form-control" placeholder="Price per Item" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity in Stock</th>
                    <th>Price per Item</th>
                    <th>Datetime Submitted</th>
                    <th>Total Value</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="productTable">
                <!-- Product rows will be dynamically added here -->
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-right"><strong>Total:</strong></td>
                    <td id="totalSum">0.00</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>