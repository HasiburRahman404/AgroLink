const input = document.getElementById("bkashNumber");
const confirmBtn = document.getElementById("confirmBtn");


input.addEventListener("input", () => {
    const value = input.value.trim();
    const regex = /^01[3-9]\d{8}$/;

    if (regex.test(value)) {
        confirmBtn.disabled = false;
        input.style.border = "2px solid #4caf50";
    } else {
        confirmBtn.disabled = true;
        input.style.border = "2px solid #ff5252";
    }
});


confirmBtn.addEventListener("click", () => {
    alert(" Payment request sent successfully!");
    window.location.href = "thanks.php";
});
