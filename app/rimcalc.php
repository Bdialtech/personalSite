<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rimworld Resource Calculator</title>
        <style>
            body {
                background: url(/assets/apps/rimcalc/rimcalcBackgroundFull.png) no-repeat center;
                background-color: black;
            }
            p {
                margin: 0;
                font-style: italic;
            }
            p, label {
                color: white;
                text-shadow: 2px 2px black;
            }
            .content {
                background-color: rgba(0,0,0,0.5);
                margin: 1%;
                margin-left: 7.5%;
                margin-right: 7.5%;
                padding: 2.5%;
            }
            .dataTable {
                outline-style: solid;
                outline-width: 1px;
                width: 90%;
                margin: auto;
                text-align: left;
                padding: 0px;
                border-collapse: collapse;
            }
            .dataTable th,td {
                width: 16.66%;
                padding: 1px;
                margin: 1px;
            }
            .dataTable th {
                border: 0px;
                border-bottom: 1px;
                border-color: black;
                border-style: solid;
                padding-bottom: 2px;
            }
            .panel {
                background-color: rgba(211, 211, 211, 0.2);
                padding: 1%;
            }
            .tableentry {
                width: 85%;
            }
            .editButton {
                width: 100%;
            }
            .weekStepButton {
                display: flex;
                justify-content: center;
                width: 25%;
                margin: auto;
                background-color: rgb(189, 245, 196);
                border-color: rgb(164, 231, 173);
                font-weight: bold;
            }
            .deleteAll {
                display: flex; 
                justify-content: center; 
                margin: auto; 
                width: 90%;
                background-color: rgb(153, 79, 79);
                border-color: rgb(124, 54, 54);
                font-weight: bold;
                color: white;
            }
        </style>
    </head>
    <body>

        <div class="content">
            <div class="panel">
                <table style="width:90%; margin:auto">
                    <th style="width:50%"><input type="button" id="stepBack" value="Step Week Back" class="weekStepButton" onclick="output(0)" style="width:100%"></th>
                    <th style="width:50%"><input type="button" id="stepForward" value="Step Week Forward" class="weekStepButton" onclick="output(1)" style="width:100%"></th>
                </table>
            </div>

            <table id="data" class="dataTable">
                <thead>
                    <tr style="background-color:rgb(190,190,190)">
                        <th title="What item is being counted?">Item</th>
                        <th title="How much weekly input is there of this item?">In</th>
                        <th title="How much weekly consumption is there of this item?">Out</th>
                        <th title="How much of this item is net every week? This is derived from your input and output, you don't fill this one in yourself.">Net</th>
                        <th title="How much of this item do you currently have?">Stock</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Meat</td>
                        <td><input type="number" value="100" class="tableentry" onchange="updateTable()"></td>
                        <td><input type="number" value="50" class="tableentry" onchange="updateTable()"></td>
                        <td>50</td>
                        <td><input type="number" value="350" class="tableentry"></td>
                        <td><button onclick="deleteItem(1)" class="editButton">Delete</button></td>
                    </tr>
                    <tr style="background-color: rgb(230,230,230)">
                        <td><input type="text" value="New Item" class="tableentry"></td>
                        <td><input type="number" value="100" class="tableentry"></td>
                        <td><input type="number" value="50" class="tableentry"></td>
                        <td>-</td>
                        <td><input type="number" value="350" class="tableentry"></td>
                        <td><button onclick="addItem()" class="editButton">Add</button></td>
                    </tr>
                </tbody>
            </table>
            <input type="button" value="Delete All" onclick="eraseTable()" class="deleteAll">
            <p>Tip: Hover over headings to see exactly what they mean!</p><br>


            <label for="fileDownload">Export to file:</label>
            <input type="button" id="fileDownload" value="Download" onclick="downloadFile()"><br>
            <label for="fileUpload">Import from file:</label>
            <input type="file" id="fileUpload" style="color:white">
            <br><br><br><br>
            <p>Image credit: u/XxNelsonSxX on Reddit</p>
        </div>

        <script>
            // Common use variables
            table = document.getElementById("data");
            numOfRows = table.rows.length;

            // Event listener for file upload
            upload = document.getElementById("fileUpload");
            upload.addEventListener("change", function (event){
                file = event.target.files[0];
                if (file) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        jsonData = JSON.parse(e.target.result);
                        uploadFile(jsonData);
                    };
                    reader.readAsText(file);
                }
            });

            readCookie();
            updateTable();
            
            // Update Stocks (via week forward or back)
            function output(state) {
                for (i = 1; i < numOfRows - 1; i++) {
                    input = Number(table.rows.item(i).cells.item(1).children[0].value);
                    out = Number(table.rows.item(i).cells.item(2).children[0].value);
                    net = Number(table.rows.item(i).cells.item(3).innerHTML);
                    stock = Number(table.rows.item(i).cells.item(4).children[0].value);
                    if (state) {
                        table.rows.item(i).cells.item(4).children[0].value = stock + net;
                    } else {
                        table.rows.item(i).cells.item(4).children[0].value = stock - net;
                    }
                }
            }

            // Add input row of table to permanent table data
            function addItem() {
                newRow = table.insertRow(numOfRows)
                
                newItem = newRow.insertCell(0);
                newItem.innerHTML = '<input type="text" value="New Item" class="tableentry">';
                newIn = newRow.insertCell(1);
                newIn.innerHTML = '<input type="number" value="100" class="tableentry" onchange="updateTable()">';
                newOut = newRow.insertCell(2);
                newOut.innerHTML = '<input type="number" value="50" class="tableentry" onchange="updateTable()">';
                newNet = newRow.insertCell(3);
                newNet.innerHTML = "-";
                newStock = newRow.insertCell(4);
                newStock.innerHTML = '<input type="number" value="350" class="tableentry">';
                newButton = newRow.insertCell(5);
                newButton.innerHTML = '<button onclick="addItem()" class="editButton">Add</button>';

                prev = numOfRows - 1;
                table.rows.item(prev).cells.item(0).innerHTML = table.rows.item(prev).cells.item(0).children[0].value;
                table.rows.item(prev).cells.item(5).innerHTML = '<button onclick="deleteItem('+ prev +')" class="editButton">Delete</button>';

                numOfRows = table.rows.length;
                updateTable();
            }

            // Remove row from permanent table data
            function deleteItem(row) {
                if (confirm("Are you sure you want to delete this row?")) {
                    table.deleteRow(row);
                    numOfRows = table.rows.length;
                    updateTable();
                }
            }

            // Update values and attributes of table, usually upon a change in data (such as Net and coloring)
            function updateTable() {
                numOfRows = table.rows.length;
                for (i = 1; i < numOfRows - 1; i++) {
                    input = Number(table.rows.item(i).cells.item(1).children[0].value);
                    out = Number(table.rows.item(i).cells.item(2).children[0].value);
                    table.rows.item(i).cells.item(3).innerHTML = input - out;
                    table.rows.item(i).cells.item(5).innerHTML = '<button onclick="deleteItem('+ i +')" class="editButton">Delete</button>';
                }
                colorRows();
                setCookie();
            }

            // Apply alternate row coloring to table
            function colorRows() {
                table.rows.item(0).style.backgroundColor = "rgb(190,190,190)";
                for (i = 1; i < numOfRows; i++) {
                    if (i % 2 == 0) {
                        table.rows.item(i).style.backgroundColor = "rgb(230,230,230)";
                    } else {
                        table.rows.item(i).style.backgroundColor = "rgb(255,255,255)";
                    }
                }
            }

            // Delete all data from table; skip prompt if arg is true
            function eraseTable(skip) {
                if (skip || confirm("Are you sure you want to delete the entire table? Unsaved data will be permanently lost.")) {
                    for (i = numOfRows - 2; i > 0; i--) {
                        table.deleteRow(i);
                    }
                    updateTable();
                }
            }

            /*
            Format for JSON export:
            [{
                "item": "Meat",
                "in": "100",
                "out": "50",
                "stock": "350"
            }]
            */

            // Return a JSON string of table data
            function jsonifyTable() {
                out = '[';
                for (i = 1; i < numOfRows - 1; i++) {
                    it = table.rows.item(i);
                    outItem = it.cells.item(0).innerHTML;
                    outIn = String(it.cells.item(1).children[0].value);
                    outOut = String(it.cells.item(2).children[0].value);
                    outStock = String(it.cells.item(4).children[0].value);
                    out += '{"item":"'+outItem+'","in":"'+outIn+'","out":"'+outOut+'","stock":"'+outStock+'"}';
                    if (i < numOfRows - 2) out += ',';
                }
                out += "]";
                return out;
            }

            // Download a JSON file of the table
            function downloadFile() {
                dlBlob = new Blob([jsonifyTable()], {type: "application/octet-stream"});
                dlURL = URL.createObjectURL(dlBlob);
                dlLink = document.createElement("a");
                dlLink.href = dlURL;
                dlLink.download = "rimcalcExport.json";

                document.body.appendChild(dlLink);
                dlLink.click();
                document.body.removeChild(dlLink);

                URL.revokeObjectURL(dlURL);
            }

            // Read JSON data from external source, populate table with the data
            function uploadFile(data) {
                if (confirm("Are you sure you want to load from file? All unsaved data will be lost.")) {
                    eraseTable(1);
                    data.forEach(it => {
                        newRow = table.insertRow(numOfRows - 1);
                        numOfRows++;
                        itemCell = newRow.insertCell(0);
                        itemCell.innerHTML = it.item;
                        inCell = newRow.insertCell(1);
                        inCell.innerHTML = '<input type="number" value="'+it.in+'" class="tableentry" onchange="updateTable()">';
                        outCell = newRow.insertCell(2);
                        outCell.innerHTML = '<input type="number" value="'+it.out+'" class="tableentry" onchange="updateTable()">';
                        netCell = newRow.insertCell(3);
                        netCell.innerHTML = '-';
                        stockCell = newRow.insertCell(4);
                        stockCell.innerHTML = '<input type="number" value="'+it.stock+'" class="tableentry" onchange="updateTable()">';
                        buttonCell = newRow.insertCell(5);
                        buttonCell.innerHTML = '-';
                    })
                    updateTable();
                }
            }

            // Set or update the user cookie to store table data
            function setCookie() {
                destruct = new Date();
                destruct.setTime(destruct.getTime() + (365*24*60*60*1000));
                expiry = destruct.toUTCString();
                document.cookie = "data=" + jsonifyTable() + ";" + expiry + ";path=/;SameSite=None;Secure";
            }

            // If a cookie with data exists, populate table with cookie data
            function readCookie() {
                dataRaw = decodeURIComponent(document.cookie);
                if (dataRaw) {
                    data = JSON.parse(decodeURIComponent(document.cookie).substring(5));
                    eraseTable(1);
                    data.forEach(it => {
                        newRow = table.insertRow(numOfRows - 1);
                        numOfRows++;
                        itemCell = newRow.insertCell(0);
                        itemCell.innerHTML = it.item;
                        inCell = newRow.insertCell(1);
                        inCell.innerHTML = '<input type="number" value="'+it.in+'" class="tableentry" onchange="updateTable()">';
                        outCell = newRow.insertCell(2);
                        outCell.innerHTML = '<input type="number" value="'+it.out+'" class="tableentry" onchange="updateTable()">';
                        netCell = newRow.insertCell(3);
                        netCell.innerHTML = '-';
                        stockCell = newRow.insertCell(4);
                        stockCell.innerHTML = '<input type="number" value="'+it.stock+'" class="tableentry" onchange="updateTable()">';
                        buttonCell = newRow.insertCell(5);
                        buttonCell.innerHTML = '-';
                    })
                    updateTable();
                }
            }
        </script>
    </body>
</html>