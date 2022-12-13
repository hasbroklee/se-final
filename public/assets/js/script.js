const search = document.querySelector(".search");
const input = search.querySelector("input");
const suggest = search.querySelector(".selection");



input.onkeyup = (e) =>{
    $(".subject-content h1").hide();
    let userInput = e.target.value;
    let emptyArray = [];
    if(userInput){
        emptyArray = suggestData.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userInput.toLocaleLowerCase());
        })
        emptyArray = emptyArray.map((data)=>{
            return data = '<a>' + data + '</a>';
        })
        search.classList.add("active");
        showSuggest(emptyArray);
        console.log(emptyArray);
        let listSuggest = suggest.querySelectorAll("a");
        for(let i=0; i<listSuggest.length; i++){
            console.log("lstsug: "+listSuggest[i].textContent);
            for(let j=0; j<suggestData.length; j++){
                if(suggestData[j]==listSuggest[i].textContent){
                    listSuggest[i].setAttribute("href",idData[j]);
                }
            }
            listSuggest[i].setAttribute("onclick","select(this);return false;");
        }
        
    }
    else{
        search.classList.remove("active");
    }
}

function select(element){
    let userSelect = element.textContent;
    input.value = userSelect;
    search.classList.remove("active");
    let idSelect = element.getAttribute("href");
    $(".subject-item").hide();
    $(idSelect).show();
}



function showSuggest(list){
    let listData;
    console.log("List length: " + list.length);
    if(!list.length){
        userValue = input.value;
        listData = '<a>' + userValue + '</a>';
    }
    else{
        listData = list.join('');
    }
    suggest.innerHTML = listData;
}
