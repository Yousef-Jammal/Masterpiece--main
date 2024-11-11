// Function to get the input element from the parent hierarchy
function getDivFromTheElement(element) {
    let temp = element.parentNode.querySelector('input.products-quantity');

    if (!temp) {
        const upperParent = element.parentNode;
        return getDivFromTheElement(upperParent);
    }
    return temp;
}

const deliveryOptions = document.querySelectorAll('input[name="deliveryChoose"]');

deliveryOptions.forEach(option => {
    option.addEventListener('change', inputSpinComponents);
});

document.getElementById("placeOrder").addEventListener('click', function(){
    
});

function inputSpinComponents() {

    function updateQuantity(quantityInput) {
        var productRow = quantityInput.closest('.products');
        var productList = quantityInput.closest('.products-list');
        var price = parseFloat(productRow.querySelector('.products-price span')?.innerHTML || 0);
        var quantity = parseFloat(quantityInput.value);
        var linePrice = price * quantity;

        Array.from(productRow.getElementsByClassName('products-line-price')).forEach(function (e) {
            e.innerHTML = linePrice.toFixed(2);
            window.recalculateCart();
        });
    }


    // Add remove button functionality
    // window.removeBtn = function (productElement) {
    //     var productRow = productElement.closest('.products');
    //     // var removeButton = productRow.querySelector('.remove-button');
    //     // if (removeButton) {
    //         // removeButton.addEventListener('click', function () {
    //             // document.querySelector("#deleteRecord").addEventListener("click", () => {
    //                 productRow.remove();
    //                 window.recalculateCart();
    //             // })
    //         // });
    //     // }
    // }
    window.deliveryClaculater = function() {
        const deliveryOptions = document.querySelectorAll('input[name="deliveryChoose"]');

        let deliveriesPrice = {
            deliveryOption1 : 11.99,
            deliveryOption2 : 5,
            deliveryOption3 : 0,
        }
        // deliveryOptions.forEach(option => {
        //     if(option.checked){
        //         return deliveriesPrice[option.id];
        //     }
        // });
        for (const option of deliveryOptions) {
            if (option.checked) {
                return deliveriesPrice[option.id];
            }
        }
        return deliveriesPrice[deliveryOption1];
    }

    window.recalculateCart = function() {
        // var elm = document.querySelector(".products-list");
        let subTotalElement = document.getElementById("subTotal");
        let subtotalValue = subTotalElement.innerText.trim().replace('$', '');
        let subtotal  = parseFloat(subtotalValue);
        // Array.from(elm.getElementsByClassName("products")).forEach(function (item) {
        //     Array.from(item.getElementsByClassName('products-line-price')).forEach(function (e) {
        //         subtotal += parseFloat(e.innerHTML);
        //     });
        // });
        var currencySign = "$";
        var taxRate = 0;
        var shippingRate = window.deliveryClaculater();
        // var deleveryPrice =

        let discountText = document.querySelector('#Item_Discounts_Precentage').textContent.trim();
        let discountTextAmount = document.querySelector('#Item_Discounts').textContent.trim();
        let discountAmount = parseFloat(discountTextAmount.replace('-', '').replace('$', ''));



        if(discountText == ''){
            if(discountAmount > 0){
                discount = discountAmount;
            }else{
                var discount = 0;
            }
        }else{
            var discountRate = parseFloat(discountText.replace('%', '').replace('(', '').replace(')', '')) / 100;
            var discount = subtotal * discountRate;
        }
        /* Calculate totals */
        var tax = subtotal * taxRate;

        var shipping = (subtotal > 0 ? shippingRate : 0);

        var newTotal = subtotal + tax + shipping - discount;

        if(newTotal <= 0){
            newTotal = 0;
        }
        // const cartSubtitle = elm.parentElement.querySelector(".table-total .cart-subtotal")
        // if (cartSubtitle) {
        //     cartSubtitle.innerHTML = currencySign + subtotal.toFixed(2);
        // }
        // const cartTex = elm.parentElement.querySelector(".table-total .cart-tax")
        // if (cartTex) {
        //     cartTex.innerHTML = currencySign + tax.toFixed(2);
        // }
        const cartShipping = document.querySelector("#shippingCharge")
        if (cartShipping) {
            cartShipping.innerHTML = currencySign + shippingRate;
        }
        const TotalPrice = document.querySelector("#total_price");
        if (TotalPrice) {
            TotalPrice.innerHTML = currencySign + newTotal.toFixed(2);
        }
        // const cartDiscount = elm.parentElement.querySelector(".table-total .cart-discount")
        // if (cartDiscount) {
        //     cartDiscount.innerHTML = "-" + currencySign + discount.toFixed(2);
        // }
    }

window.recalculateCart();
}
inputSpinComponents()

