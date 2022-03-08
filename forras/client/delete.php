<div class="container text-center">
<h2>Fa törlése</h2>
<input type="number" name="azon" id="faz" onkeyup="adatok();">
<input type="button" value="Törlés" id="torles" class="bg-danger">
<div id="msg"></div>
</div>
<script>
    function adatok(){
      let id=document.getElementById("faz").value
     
      fetch("../server/kivfa.php?faz="+id)
        .then((response) => response.json())
        .then((data) => faadatok(data));
    }
function faadatok(data){
    if(data.length ==0){
        document.getElementById("msg").innerHTML="Nincs ilyen fa az adatbázisban";
        let gomb=document.getElementById("torles")
       
        gomb.disabled="true";
        
    }else{
     let gomb=document.getElementById("torles")
    gomb.disabled=false;
    document.getElementById("msg").innerHTML="A törlendő fa: "+data[0]['faj']+"<br> A fa települése: "+data[0]['telepules']+"<br> A fa körmérete: "+data[0]['kormeret'];
}}
document.getElementById("torles").addEventListener('click',delet)

function delet(e){
    let id=document.getElementById("faz").value
    fetch("../server/delete.php?faz="+id)
        .then((response) => response.text())
        .then((data) => alert(data));
    location.reload()
}


</script>