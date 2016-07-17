function send(){
    var contact_form=document.querySelector("#contact_form");
    var contact_form_data=new FormData(contact_form);
    
    var req= new XMLHttpRequest();
    var url="../sender.php";
    req.open("POST",url,true);
    
    req.onreadystatechange= function(){
        if(req.readyState==4 && req.status==200){
            var status = document.getElementById("status");
            status.innerHTML=req.responseText;

        }        
    };
    
    req.send(contact_form_data);
    
}