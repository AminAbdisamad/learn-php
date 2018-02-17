function showSuggestion(str){
    //console.log(str);
    if(str.length == 0){
        document.getElementById('output').innerHTML = "";
    }else{
        //AJAX Request
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                   document.getElementById('output').innerHTML = this.responseText; 
            }

        }
        //request link
        xhr.open("GET", "suggest.php?q="+str, true);
        xhr.send();
    }
}