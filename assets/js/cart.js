let cart = document.getElementById("cart");
let cartempty = document.getElementById("cartempty");
let label = document.getElementById("label");
let basket = JSON.parse(localStorage.getItem("data")) || [];

let calculation = () => {
    let cartIcon = document.getElementById("cart-amount");
    cartIcon.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);
};

calculation();

let generateCart = () => {
    if (basket.length !== 0) {
        return (cart.innerHTML = basket.map((x) => {
            let { id, item } = x;
            let search = shopItemsData.find((x) => x.id === id) || [];
            let { img, price, name } = search;
            return `
            <div
            class="row mb-4 d-flex justify-content-between align-items-center cart-row">
            <div class="col-md-2 col-lg-2 col-xl-2">
                <img src=".${img}"
                    class="img-fluid rounded-3" alt="Cotton T-shirt">
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <h6 class="text-black mb-0 cart-item-title">${name}</h6>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i onclick="decreaseQuantity(${id})" class="fa fa-minus"></i>
                </button>

                <input id="${id}" min="0" name="quantity" value="${item}" type="number"
                    class="form-control form-control-sm cart-quantity-input" />

                <button class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i onclick="increaseQuantity(${id})" class="fa fa-plus"></i>
                </button>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h6 class="mb-0 cart-price">${item * price}</h6>
            </div>
            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="#!" class="text-muted delete-product"><i 
                    onclick="removeCart(${id})"
                    class="fa fa-times"></i></a>
            </div>
        </div>
            `;
        })
            .join(""));
    } else {
        cart.innerHTML = "";
        cartempty.innerHTML = `
        <h2>Cart is Empty</h2>
        `;
    }
};

generateCart();

let increaseQuantity = (id) => {
    let selectedItem = id;
    let search = basket.find((x) => x.id === selectedItem.id);

    if (search === undefined) {
        basket.push({
            id: selectedItem.id,
            item: 1,
        });
    } else {
        search.item += 1;
    }

    generateCart();
    updateOrder(selectedItem.id);
    localStorage.setItem("data", JSON.stringify(basket));
};

let decreaseQuantity = (id) => {
    let selectedItem = id;
    let search = basket.find((x) => x.id === selectedItem.id);

    if (search === undefined) return;
    else if (search.item === 0) return;
    else {
        search.item -= 1;
    }

    updateOrder(selectedItem.id);
    basket = basket.filter((x) => x.item !== 0);
    generateCart();
    TotalAmount();
    localStorage.setItem("data", JSON.stringify(basket));
};

let updateOrder = (id) => {
    let search = basket.find((x) => x.id === id);
    document.getElementById(id).innerHTML = search.item;
    calculation();
    TotalAmount();
};

let removeCart = (id) => {
    let selectedItem = id;
    basket = basket.filter((x) => x.id !== selectedItem.id);
    calculation();
    generateCart();
    TotalAmount();
    localStorage.setItem("data", JSON.stringify(basket));
}

let TotalAmount = () => {
    if (basket.length !== 0) {
        let amount = basket.map((x) => {
            let { id, item } = x;
            let filterData = shopItemsData.find((x) => x.id === id);
            return filterData.price * item;
        })
            .reduce((x, y) => x + y, 0);
        return (label.innerHTML = `
            <div class="p-5">
            <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
            <hr class="my-4">

            <div class="d-flex justify-content-between mb-4">
                <h5 class="text-uppercase">items </h5>
                <h5>P ${amount}</h5>
            </div>

            <h5 class="text-uppercase mb-3">Shipping</h5>

            <div class="mb-4 pb-2">
                <select class="select">
                    <option value="1">Standard-Delivery- P0.00</option>
                </select>
            </div>

            <h5 class="text-uppercase mb-3">Give code</h5>

            <div class="mb-5">
                <div class="form-outline">
                    <input type="text" id="form3Examplea2"
                        class="form-control form-control-lg" />
                    <label class="form-label" for="form3Examplea2">Enter your
                        code</label>
                </div>
            </div>

            <hr class="my-4">

            <div class="d-flex justify-content-between mb-5">
                <h5 class="text-uppercase">Total price</h5>
                <h5 class="cart-total-price">P ${amount}</h5>
            </div>

            <button type="button" class="btn btn-dark btn-block btn-lg"
                data-mdb-ripple-color="dark">Purchase</button>

        </div>
            `);
    } else {
        label.innerHTML = "";
    }
};

TotalAmount();

let clearCart = () => {
    basket = []
    generateCart();
    calculation();
    localStorage.setItem("data", JSON.stringify(basket));
};