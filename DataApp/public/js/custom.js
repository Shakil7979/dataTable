function formData(){
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var message = document.getElementById('message').value;
    var fileLength = document.getElementById('image').files.length;

    if(fileLength !== 0){
        var file = document.getElementById('image').files[0];
        var fileName = file.name;
        var fileSize = file.size;
        var fileFormate = fileName.split('.').pop(); 
    }else{
        file = 0;
    }
    
    let FileData = new FormData();

     FileData.append('file', file); 
     FileData.append('name',name); 
     FileData.append('email',email); 
     FileData.append('phone',phone); 
     FileData.append('message',message);   

     let config = {headers:{'content-type':'multipart/form-data'}};
 

     var url = "/insert-data";
     axios.post(url,FileData,config)
     .then(function(response){ 
        console.log(response); 
     })
     .catch(function (error){
        console.log(error);
     });


} 