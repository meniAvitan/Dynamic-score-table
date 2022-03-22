const createTableBtn = document.getElementById('create_btn');
const rows = document.getElementById('rows');
const cols = document.getElementById('cols');
const countBoxes = document.getElementById('numOfBoxes');
const box_num = document.getElementById('numOfBox');
const getTransactionD = document.getElementById('submitTransaction');



function createTable() {

    let table = document.getElementById('tab'),
        rIndex, cIndex;;
    let row = rows.value;
    let col = cols.value;

    console.log(row + " " + col);
    countBoxes.innerHTML = row * col + ' תאים ';

    for (let rowIndex = 0; rowIndex < row; rowIndex++) {
        let tr = document.createElement('tr');

        for (let colIndex = 0; colIndex < col; colIndex++) {
            let td = document.createElement('td');
            td.setAttribute('data-bs-toggle', 'modal');

            td.setAttribute('data-bs-target', '#exampleModal');

            tr.appendChild(td);
        }

        table.appendChild(tr)
    }
    // table rows
    for (var i = 0; i < table.rows.length; i++) {
        // row cells
        for (var j = 0; j < table.rows[i].cells.length; j++) {
            table.rows[i].cells[j].onclick = function() {
                rIndex = this.parentElement.rowIndex + 1;
                cIndex = this.cellIndex + 1;
                console.log("Row : " + rIndex + " , Cell : " + cIndex);
                box_num.innerHTML = "Row : " + rIndex + " , Cell : " + cIndex;
                td.textContent = color
            };
        }
    }
}

function copyTextValue() {
    const e = document.getElementById("select");
    const val = e.options[e.selectedIndex].value;
    document.getElementById("destination").value = val;
}

function copyTextValue2() {
    const e = document.getElementById("select_2");
    const val = e.options[e.selectedIndex].value;
    document.getElementById("destination_2").value = val;
}



createTableBtn.addEventListener("click", createTable);