const list = document.getElementById('boodschappenlijst');
const item = document.getElementsByClassName('product')
const pPrice = document.getElementsByClassName('productPrice');
const pQuantity = document.getElementsByClassName('productQuantity');
const pTotalCost = document.getElementsByClassName('productTotalCost');
const tCost = document.getElementById('totalCost');


list.addEventListener('change', calcTotal);


function calcTotal() {
    let totalCost = 0
    for (let i = 0; i < 4; i++) { 
        let tempProductTotalCost = Math.round((pPrice[i].innerHTML * pQuantity[i].value) * 100) / 100;
        pTotalCost[i].innerHTML = tempProductTotalCost;
        totalCost += tempProductTotalCost;
    }
    tCost.innerHTML = totalCost.toFixed(2)
}
