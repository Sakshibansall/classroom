document.getElementById("bookForm").addEventListener("submit", function(event) {
    event.preventDefault();
  
    var quantity = parseInt(document.getElementById("quantity").value);
   
    if (isNaN(quantity)) {
      alert("Please enter a valid quantity.");
      return;
    }
    
   

    var bookName = "Indian History";
    var price = 315; // Default price
  
    var totalCost = price * quantity;
  
    document.getElementById("bookNameOutput").textContent = "Book Name: " + bookName;
    document.getElementById("priceOutput").textContent = "Price per book: ₹" + price.toFixed(2);
    document.getElementById("quantityOutput").textContent = "Quantity: " + quantity;
    document.getElementById("totalCostOutput").textContent = "Total Cost: ₹" + totalCost.toFixed(2);
   
  
    document.getElementById("invoice").classList.remove("hidden");
   });