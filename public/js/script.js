const SCROLL_TRESHOLD = 50;
const EXTRA_SUGAR = 2000;
const ONGKIR_PRICE = 3000;

function convertIDR(price) {
    return "Rp." + Number(price).toLocaleString("id-ID");
}

function cleanNumber(value) {
    return parseInt(String(value).replace(/[^0-9]/g, "")) || 0;
}

function initNavbar() {
    const navbar = document.querySelector(".navbar");
    // navbarrscroll
    window.addEventListener("scroll", () => {
        if (window.scrollY > SCROLL_TRESHOLD) {
            navbar.classList.add("nav-onscroll");
        } else {
            navbar.classList.remove("nav-onscroll");
        }
    });
}

function initSidebar() {
    const close = document.querySelector(".close");
    const hamburgerMenu = document.querySelector("#hamburger-menu");
    const navVisible = document.querySelector(".nav-visible");
    // hamburger menu
    hamburgerMenu.addEventListener("click", () => {
        navVisible.classList.add("visible");
    });

    // button close sidebar
    close.addEventListener("click", () => {
        navVisible.classList.remove("visible");
        navVisible.classList.add("invisible");
    });

    // klik diluar sidebar
    document.addEventListener("click", (e) => {
        if (
            !navVisible.contains(e.target) &&
            !hamburgerMenu.contains(e.target)
        ) {
            navVisible.classList.remove("visible");
            navVisible.classList.add("invisible");
        }
    });
}

function initProductModal() {
    const buttons = document.querySelectorAll(".add");
    const modal = document.querySelector(".modal");
    const tutup = document.querySelector(".tutup");

    const productId = document.querySelector("#product_id");
    const productName = document.querySelector("#product_name");
    const productPrice = document.querySelector("#product_price");
    const productBasePrice = document.querySelector("#base_price");
    const productCategory = document.querySelector("#product_category");
    const productImage = document.querySelector("#product_image");

    const qty = document.querySelector("#product_qty");

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            productId.value = button.dataset.id;
            productName.value = button.dataset.name;
            productPrice.value = convertIDR(button.dataset.price);
            productBasePrice.value = button.dataset.baseprice;
            productCategory.value = button.dataset.category;
            productImage.src = button.dataset.image;

            modal.classList.remove("hidden");
        });
    });

    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.classList.add("hidden");
            qty.value = 1;
        }
    });

    tutup.addEventListener("click", () => {
        modal.classList.add("hidden");
    });
}

function initSugarOptions() {
    const btnSugar = document.querySelectorAll(".sugar, .sugar-active");
    const sugarLevel = document.querySelector("#sugar_level");

    const productPrice = document.querySelector("#product_price");
    const basePrice = document.querySelector("#base_price");
    const qty = document.querySelector("#product_qty");

    sugarLevel.value = "Normal";

    function hitungExtraSugar(basePrice, extraSugar, qty) {
        if (qty === "") {
            return parseInt(basePrice) + parseInt(extraSugar);
        }
        return (parseInt(basePrice) + parseInt(extraSugar)) * parseInt(qty);
    }

    function hitungTotalPrice(basePrice, qty) {
        if (qty === "") {
            return basePrice;
        }
        return parseInt(basePrice) * parseInt(qty);
    }

    function hitungTotal() {
        if (isNaN(qty.value)) {
            return;
        } else if (qty.value > 15) {
            alert("batas pembelian cuma sampai 15");
            qty.value = 1;
            return;
        }

        const btnSelected = document.querySelector("#btnSelected");
        const value = btnSelected.innerText;
        const isSelected = value === "Extra Sugar";

        sugarLevel.value = value;

        if (btnSelected) {
            productPrice.value = convertIDR(
                isSelected
                    ? hitungExtraSugar(basePrice.value, EXTRA_SUGAR, qty.value)
                    : hitungTotalPrice(basePrice.value, qty.value),
            );
        }
    }

    btnSugar.forEach((btn) => {
        btn.addEventListener("click", () => {
            btnSugar.forEach((b) => {
                b.classList.remove("sugar-active");
                b.classList.add("sugar");
                b.removeAttribute("id");
            });

            btn.classList.add("sugar-active");
            btn.classList.remove("sugar");
            btn.setAttribute("id", "btnSelected");

            hitungTotal();
        });
    });

    qty.addEventListener("input", hitungTotal);
}

function qtyChange(itemId) {
    const totalPrice = document.querySelector(`#total-price-${itemId}`);
    const qtyValue = document.getElementById(`qty-value-${itemId}`);
    let qty = Number(qtyValue.value);

    if (qtyValue.dataset.sugar === "Extra Sugar") {
        totalPrice.textContent = convertIDR(
            (Number(qtyValue.dataset.price) + EXTRA_SUGAR) * qty,
        );
        cartChecked();
    } else {
        totalPrice.textContent = convertIDR(
            cleanNumber(totalPrice.textContent) +
                Number(qtyValue.dataset.price),
        );
        cartChecked();
    }
}

function tambahQty(itemId) {
    const totalPrice = document.querySelector(`#total-price-${itemId}`);
    const qtyValue = document.getElementById(`qty-value-${itemId}`);
    const btnKurang = document.getElementById(`btn-kurang-${itemId}`);

    let qty = Number(qtyValue.value);

    btnKurang.removeAttribute("disabled");

    qty = qty + 1;
    qtyValue.value = qty;

    if (qtyValue.dataset.sugar === "Extra Sugar") {
        totalPrice.textContent = convertIDR(
            (Number(qtyValue.dataset.price) + EXTRA_SUGAR) * qty,
        );
        cartChecked();
    } else {
        totalPrice.textContent = convertIDR(
            cleanNumber(totalPrice.textContent) +
                Number(qtyValue.dataset.price),
        );
        cartChecked();
    }
}

function kurangQty(itemId) {
    const totalPrice = document.querySelector(`#total-price-${itemId}`);
    const qtyValue = document.getElementById(`qty-value-${itemId}`);
    const btnKurang = document.getElementById(`btn-kurang-${itemId}`);
    let qty = Number(qtyValue.value);

    if (qty <= 1) {
        btnKurang.setAttribute("disabled", "true");
        return;
    } else {
        btnKurang.removeAttribute("disabled");
    }

    qty = qty - 1;
    qtyValue.value = qty;

    if (qtyValue.dataset.sugar === "Extra Sugar") {
        totalPrice.textContent = convertIDR(
            (Number(qtyValue.dataset.price) + EXTRA_SUGAR) * qty,
        );
        cartChecked();
    } else {
        totalPrice.textContent = convertIDR(
            cleanNumber(totalPrice.textContent) -
                Number(qtyValue.dataset.price),
        );
        cartChecked();
    }
}

function cartChecked() {
    const cartCheckboxes = document.querySelectorAll(".cart-checked");
    const countItems = document.querySelector("#count-item");
    const subTotal = document.querySelector("#sub-total");
    const totalPriceOrder = document.querySelector(".total-price-order");
    const detailProducts = document.querySelector(".detail-products");

    //mengambil semua checkbox true
    const allChecked = Array.from(cartCheckboxes).filter((e) => e.checked);
    //mengambil semua id checkbox true
    const cartCheckedId = allChecked.map((cb) => cb.dataset.id);

    //reset all value
    let countItem = 0;
    let total = 0;
    detailProducts.innerHTML = "";
    subTotal.textContent = convertIDR(0);
    totalPriceOrder.textContent = convertIDR(0);
    countItems.textContent = `Subtotal (${countItem} item)`;

    //ongkir
    const ongkir = document.createElement("div");
    const delivery = document.querySelector("#delivery");

    cartCheckedId.forEach((id) => {
        //product
        const productItem = document.createElement("div");
        const productName = document.querySelector(`.product-name-${id}`);
        const productQty = document.querySelector(`#qty-value-${id}`);

        //price
        const totalPrice = document.querySelector(`#total-price-${id}`);
        const cleanPrice = cleanNumber(totalPrice.textContent);

        // product details
        total += cleanPrice;
        countItem += Number(productQty.value);
        countItems.textContent = `Subtotal (${countItem} item)`;

        subTotal.textContent = convertIDR(total);
        productItem.innerHTML = `<div class="items flex justify-between">
                <p>${productName.textContent} x ${Number(productQty.value)}</p>
                <p>${convertIDR(cleanPrice)}</p>
            </div>`;

        // product delivery
        if (delivery.value == "Delivery") {
            ongkir.innerHTML = `<div class="items flex justify-between">
                <p>Ongkir</p>
                <p>${convertIDR(ONGKIR_PRICE)}</p>
            </div>`;
            totalPriceOrder.textContent = convertIDR(total + ONGKIR_PRICE);
        } else {
            ongkir.innerHTML = "";
            totalPriceOrder.textContent = convertIDR(total);
        }

        detailProducts.appendChild(productItem);
        detailProducts.appendChild(ongkir);
    });
}

function initApp() {
    initNavbar();
    initSidebar();

    if (document.querySelector(".add")) {
        initProductModal();
        initSugarOptions();
    }
}

document.addEventListener("DOMContentLoaded", initApp);
