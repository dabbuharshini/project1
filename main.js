document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll('.btn.add-to-cart');
    const sortOptions = document.getElementById('sort-options');
    const productList = document.querySelector('.product-list');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            const productElement = button.parentElement;
            const productImg = productElement.querySelector('img').src;
            const productPriceText = productElement.querySelector('p').textContent;
            const productPrice = parseFloat(productPriceText.replace('Rs.', ''));

            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

            const existingItem = cartItems.find(item => item.img === productImg);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cartItems.push({
                    img: productImg,
                    price: productPrice,
                    quantity: 1
                });
            }

            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            alert('Product added to the cart');
        });
    });

    sortOptions.addEventListener('change', function() {
        const selectedOption = sortOptions.value;
        
        if (selectedOption === 'price') {
            sortProductsByPrice();
        } else {
            // Handle other sorting options if necessary
        }
    });

    function sortProductsByPrice() {
        const products = Array.from(productList.querySelectorAll('.product'));
        
        products.sort((a, b) => {
            const priceA = parseFloat(a.dataset.price);
            const priceB = parseFloat(b.dataset.price);
            return priceA - priceB;
        });
        
        products.forEach(product => productList.appendChild(product));
    }
});
