function sendEmail(){
    var tempParams = {
        name : "20courtot"
    };
    emailjs.send('service_9728ajh','template_w5zuaar',tempParams)
    .then(function(res){
        console.log("success",res.status);
    })
}