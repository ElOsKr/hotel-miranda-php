document.addEventListener("readystatechange", cargarEventos, false);
function cargarEventos(){
    document.getElementById("contactForm").addEventListener("submit",formSubmit)
}

function formSubmit(e){

    e.preventDefault();

    let userName = document.getElementById("username").value;
    let userEmail = document.getElementById("useremail").value;
    let userTel = document.getElementById("usertel").value;
    let userSubject = document.getElementById("usersubject").value;
    let userMessage = document.getElementById("usermessage").value;

    let form = {
        name: userName,
        email: userEmail,
        phone: userTel,            
        subject: userSubject,
        message: userMessage
    }

    for(var key in form){
        if(form[key] === ""){
            document.getElementById("formStatus").style.color = "red"
            document.getElementById("formStatus").innerHTML="Must fill all fields";
            return;
        } 
    }

    document.getElementById("formStatus").innerHTML="";

    fetch("./database/contactForm.php",{
        method: 'post',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(form)
    })
    .then(function(response) {
        return response.text()
    })
    .then(function(status){
        if(status==="Inserted"){
            document.getElementById("formStatus").style.color = "green"
            document.getElementById("formStatus").innerHTML="Comment sent successfully";
            return;
        }else{
            document.getElementById("formStatus").style.color = "red"
            document.getElementById("formStatus").innerHTML="Error sending the comment";
            return;
        }
    })
}