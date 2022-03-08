<div class="container text-center">

<div class="lista">
    <select id="lista" name="orszagok" id="orszag" class="w-25 text-center"></select>
</div>

<div class="table">
<div class="table-container ">
            <table class="table  table-hover w-50 text-center m-auto">
                <thead class="table-dark ">
                  <th>id</th>
                  <th>faj</th>
                  <th>körméret</th>
                  <th>település</th>
                </thead>
                <tbody></tbody>
            </table>
        </div>  

</div>
</div>
<script>
 fetch("../server/megyeFilter.php")
    .then((response) => response.json())
    .then((data) => render(data));

function render(data){
    document.getElementById("lista").innerHTML+=`<option value="0" selected></option>`
    for(let obj of data){
        document.getElementById("lista").innerHTML+=`<option> ${obj.nev}</option>`
    }

}
document.getElementById("lista").addEventListener('change',myFilter)

function myFilter(e){
    document.querySelector("tbody").innerHTML="";

  
   fetch("../server/Filter.php?megye="+e.target.value)
    .then((response) => response.json())
    .then((data) => render2(data));


}
function render2(data){
    for(let obj of data){
        document.querySelector("tbody").innerHTML+=`<tr><td>${obj.id}</td><td>${obj.faj}</td><td>${obj.kormeret}</td><td>${obj.telepules}</td></tr>`
    }

}

</script>