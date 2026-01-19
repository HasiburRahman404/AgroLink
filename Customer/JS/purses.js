document.querySelectorAll(".plus").forEach(btn => {
    btn.addEventListener("click", function () {
        let row = this.closest("tr");
        let qtyEl = row.querySelector(".qty");
        let price = parseInt(row.querySelector(".price").innerText);
        let qty = parseInt(qtyEl.innerText);

        qty++;
        qtyEl.innerText = qty;
        row.querySelector(".row-total").innerText = price * qty;

        updateTotals();
    });
});

document.querySelectorAll(".minus").forEach(btn => {
    btn.addEventListener("click", function () {
        let row = this.closest("tr");
        let qtyEl = row.querySelector(".qty");
        let price = parseInt(row.querySelector(".price").innerText);
        let qty = parseInt(qtyEl.innerText);

        if (qty > 1) {
            qty--;
            qtyEl.innerText = qty;
            row.querySelector(".row-total").innerText = price * qty;

            updateTotals();
        }
    });
});

function updateTotals() {
    let subTotal = 0;

    document.querySelectorAll(".row-total").forEach(el => {
        subTotal += parseInt(el.innerText);
    });

    document.getElementById("subTotal").innerText = subTotal + " ৳";
    document.getElementById("grandTotal").innerText = (subTotal + 60) + " ৳";
}
