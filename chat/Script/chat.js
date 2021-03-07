const form = document.querySelector(".form-type"),
sendBtn = form.querySelector(".send"),
inputField = document.querySelector(".typing"),
chatBox = document.querySelector(".chat-place");

sendBtn.onclick = () => {
    
    
    let xhr = new XMLHttpRequest();
    xhr.open("POST","Script/auth/chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200 ){
               inputField.value= "";
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}


setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST","Script/auth/chatmsg.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200 ){
                let data = xhr.response;
            //    console.log(data);
            //    userList.innerHTML = data;
            // if(!searchBar.classList.contains("active")){
               chatBox.innerHTML = data;
            // }
               
                }
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);
       
}, 500);
