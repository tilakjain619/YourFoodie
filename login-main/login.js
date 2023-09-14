function message(){
    var email = document.getElementById('email');
    var pass = document.getElementById('pass');
    var success = document.getElementById('success');
    var danger = document.getElementById('danger');

    if(email.value === '' ||pass.value === ''){
        danger.style.display = 'block';
    }
    setTimeout(()=>{
        danger.style.display = 'none';
    },3000)

}


var loader = document.getElementById("preloader");
    window.addEventListener("load",function(){
    loader.style.display = "none";
})