<div class="container text-center">
    <h1>Statisztika</h1>
<div class="justify-content-center">
        <div class="table-container ">
            <table class="table  table-hover w-50 text-center m-auto">
                <thead class="table-dark ">
                    <tr>
                        <td>id</td>
                        <td>Faj</td>
                        <td>Darabszám</td>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>


<script>
    fetch("../server/Lista.php")
    .then((response) => response.json())
    .then((data) => render(data));

function render(data){
    for (let obj of data) {
        document.querySelector("tbody").innerHTML+= `<tr> <td>${obj.id}</td><td>${obj.faj}</td><td>${obj.darab}</td></tr>`;
    }
}

</script>
</div>