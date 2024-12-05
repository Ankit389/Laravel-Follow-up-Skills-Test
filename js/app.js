$(document).ready(function () {
  const productTable = $("#productTable");
  const totalSum = $("#totalSum");

  // Function to load and display products
  function loadProducts() {
    $.getJSON("data.json", function (products) {
      productTable.empty(); // Clear the table before re-rendering
      let total = 0;

      products.forEach((product, index) => {
        total += product.totalValue;
        productTable.append(`
                    <tr>
                        <td>${product.productName}</td>
                        <td>${product.quantity}</td>
                        <td>${product.price.toFixed(2)}</td>
                        <td>${product.datetime}</td>
                        <td>${product.totalValue.toFixed(2)}</td>
                        <td>
                            <button class="btn btn-warning btn-sm edit-btn" data-index="${index}">Edit</button>
                        </td>
                    </tr>
                `);
      });

      totalSum.text(total.toFixed(2)); // Update total value
    });
  }

  // Initial load of products
  loadProducts();

  // Submit form data
  $("#productForm").submit(function (e) {
    e.preventDefault(); // Prevent form default submission
    const formData = $(this).serialize();

    $.post("includes/save.php", formData, function () {
      loadProducts(); // Reload products after adding new product
      $("#productForm")[0].reset(); // Reset the form
      $("input[name='editIndex']").remove(); // Remove the hidden edit index field
    });
  });

  // Edit product functionality
  productTable.on("click", ".edit-btn", function () {
    const index = $(this).data("index");

    $.getJSON("data.json", function (products) {
      const product = products[index];
      $("input[name='productName']").val(product.productName);
      $("input[name='quantity']").val(product.quantity);
      $("input[name='price']").val(product.price);

      // Add hidden field to identify edit action
      $("<input>")
        .attr({
          type: "hidden",
          name: "editIndex",
          value: index,
        })
        .appendTo("#productForm");
    });
  });
});
