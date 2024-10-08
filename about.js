
document.getElementById('searchButton').addEventListener('click', function() {
  var searchTerm = document.getElementById('searchInput').value;
  if (searchTerm.trim() !== '') {
    // Here you can implement your search logic
    // For demonstration, I'm just displaying the search term in the results div
    document.getElementById('searchResults').innerText = 'You searched for: ' + searchTerm;
  } else {
    alert('Please enter a search term');
  }
});




document.addEventListener('DOMContentLoaded', function() {
  const addToCartButtons = document.querySelectorAll('.add-to-cart');
  const cart = document.getElementById('cart');
  let total = 0;

  addToCartButtons.forEach(button => {
    button.addEventListener('click', function() {
      const name = button.getAttribute('data-name');
      const price = parseFloat(button.getAttribute('data-price'));
      addToCart(name, price);
      total += price;
      document.getElementById('total').textContent = total.toFixed(2);
    });
  });

  function addToCart(name, price) {
    const cartItem = document.createElement('div');
    cartItem.classList.add('cart-item');
    cartItem.innerHTML = `<span>${name}</span> - $${price.toFixed(2)}`;
    cart.appendChild(cartItem);
  }
});
