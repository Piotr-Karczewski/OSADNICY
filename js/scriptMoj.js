window.addEventListener("load", function() {
    document.querySelector('#circle').addEventListener('mouseover', function () {
        document.querySelector('#planeta').style.filter = "brightness(200%)";
    });
    

    document.querySelector('#circle').addEventListener('mouseout', function () {
        document.querySelector('#planeta').style.filter = "brightness(100%)";
    });
    
    
});


