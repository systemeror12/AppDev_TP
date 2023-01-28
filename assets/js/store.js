let shop = document.getElementById('products');

let basket = [];

let generateItem = () => {

    return (shop.innerHTML = shopItemsData
        .map((x) => {
            let { id, name, price, size, desc, carouselimage1, carouselimage2, carouselimage3 } = x;
            let search = basket.find((y) => y.id === id) || [];

            return `
            <div id=shop-id-${id} class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src=".${carouselimage1}"
                                    class="d-block w-100 shop-item-image" alt="battle_grass_dilaw">
                            </div>
                            <div class="carousel-item">
                                <img src=".${carouselimage2}"
                                    class="d-block w-100" alt="battle_grass_dilaw">
                            </div>
                            <div class="carousel-item">
                                <img src=".${carouselimage3}"
                                    class="d-block w-100" alt="battle_grass_dilaw">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5 px-md-5">
                            <div class="row gx-3 gy-2 align-items-center">
                                <h2 class="shop-item-title">${name} - ${size}</h2>
                                <h3 class = "shop-item-title-size"></h3>
                                <div class="d-flex flex-row col-md-12 mb-4">
                                    <h3>Size: ${size}</h3>
                                </div>
                                <div class="d-flex flex-row col-md-12 mb-4">
                                    <h3 class="shop-item-price">Price: P${price}</h3>
                                </div>
                                <div class="d-flex flex-row col-md-6 mb-4">
                                    <h3>Qantity</h3>
                                </div>
                                <div class="d-flex flex-row col-md-6 mb-4">
                                    <div class="d-flex mb-4" style="max-width: 300px">
                                        <button class="btn px-3 me-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i  onclick="decreaseQuantity(${id})" class="fa fa-minus"></i>
                                        </button>

                                        <div class="form-outline">
                                            <input id="${id}" min="0" name="quantity" value="${search.item === undefined ? 0 : search.item}" type="number"
                                                class="form-control shop-item-quantity" />
                                        </div>

                                        <button class="btn px-3 ms-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i onclick="increaseQuantity(${id})" class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class = "d-flex flex-row col-md-12 mb-4">
                                    <h3 class = "shop-item-description">Description: ${desc}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            `;
        }).join());
};

generateItem();

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
    updateOrder(selectedItem.id);
    addItem();
};

let decreaseQuantity = (id) => {
    let selectedItem = id;
    let search = basket.find((x) => x.id === selectedItem.id);
    if (search === undefined) return;
    else if (search === 0) return;
    else {
        search.item -= 1;
    }

    updateOrder(selectedItem.id);
    basket = basket.filter((x) => x.item != 0);
    updateItem();
};

let updateOrder = (id) => {
    let search = basket.find((x) => x.id === id);
    document.getElementById(id).innerHTML = search.item;

    calculation();
};

let calculation = () => {
    let cartIcon = document.getElementById("cart-amount");
    cartIcon.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);
};

calculation();

let addItem = () => {
    let data = basket.length;
    data = data - 1;
    for (let i = 0; i <= data; i++) {
        let jsonArray = basket;

        let firstObject = jsonArray[i];

        let id = firstObject.id;
        let item = firstObject.item;

        $.ajax({
            type: "POST",
            url: "AddToCart.php",
            data: { id: id, item: item },
            success: function (response) {
                console.log(response);
                console.log(basket);
            }
        });
    }
}

let updateItem = () => {
    let data = basket.length;
    data = data - 1;
    for (let i = 0; i <= data; i++) {
        let jsonArray = basket;

        let firstObject = jsonArray[i];

        let id = firstObject.id;
        let item = firstObject.item;

        $.ajax({
            type: "POST",
            url: "UpdateCart.php",
            data: { id: id, item: item },
            success: function (response) {
                console.log(response);
                console.log(basket);
            }
        });
    }
}

let delItem = () => {
    let data = basket.length;
    data = data - 1;
    for (let i = 0; i <= data; i++) {
        let jsonArray = basket;

        let firstObject = jsonArray[i];


        let id = firstObject.id;
        let item = firstObject.item;

        $.ajax({
            type: "GET",
            url: "DeleteCart.php",
            data: { id: id, item: item },
            success: function (response) {
                console.log(response);
            }
        });
    }
}

