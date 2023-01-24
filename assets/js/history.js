let myPurchase = document.getElementById("purchase-history");
let purchases = JSON.parse(localStorage.getItem("history")) || [];
let basket = JSON.parse(localStorage.getItem("data")) || [];

let calculation = () => {
    let cartIcon = document.getElementById("cart-amount");
    cartIcon.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);
};

calculation();

let generateHistory = () => {
    if (purchases.length !== 0) {
        return (myPurchase.innerHTML = purchases.map((x) => {
            let { id, item } = x;
            let search = shopItemsData.find((x) => x.id === id) || [];
            let { img, size, price, name } = search;
            return `
            <div
            class="row mb-4 d-flex justify-content-between align-items-center cart-row">
            <div class="col-md-3 col-lg-2 col-xl-2">
                <img src=".${img}" class="img-fluid rounded-3" alt="">
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
            <h6 class="text-black mb-0 cart-item-title">${name} ${size}</h6>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <h6 class="text-black mb-0 cart-item-title">Qty: ${item}</h6>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h6 class="mb-0 cart-price">P ${item * price}</h6>
            </div>
        </div>
            `;
        })
            .join(""));
    }
};

generateHistory();