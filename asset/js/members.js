var outputMembers = document.querySelector(".members__section")

function loadMembers(){
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "members.json", true)
    xhr.onload = function(){
        try{
            if(this.status == 200 && this.statusText == "OK"){
                let result = JSON.parse(this.responseText);
                result.map((member) => {
                    outputMembers.innerHTML += `<ul class='myList'>
                        <li class='myListItem'>
                            <img class='img-fluid' src=${member?.img} >
                            <h6>${member?.name}</h6>
                            <h6>${member?.position}</h6>
                        </li>
    
                    </ul>`
                })
            }
        }catch(err){
            console.error(err)
        }
    }
    xhr.send()
}
loadMembers()