let fromDate = document.getElementById("check-in");
let toDate = document.getElementById("check-out");
let currentDate = new Date().toJSON().slice(0, 10);

fromDate.min = currentDate;

fromDate.addEventListener("input", function() {
    toDate.min = fromDate.value;
})